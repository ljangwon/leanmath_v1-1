<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Upload_tb_test_info_chapter_c extends MY_Controller
{

    /*
    |-------------------------------------------------------------------
    | Construct
    |-------------------------------------------------------------------
    | 
    */
    function __construct()
    {
        parent::__construct();
        $this->load->model('test_info_chapter_m');
    }

    /*
    |-------------------------------------------------------------------
    | Index
    |-------------------------------------------------------------------
    |
    */
    function index()
    {
        $data['title'] = 'Excel test_info_chapter';
        $data['transaction_list'] = $this->test_info_chapter_m->fetch_transactions();

        $this->load->view('upload_tb_test_info_chapter/header', $data);
        $this->load->view('upload_tb_test_info_chapter/content', $data);
        $this->load->view('upload_tb_test_info_chapter/footer', $data);
    }

    /*
    |-------------------------------------------------------------------
    | Import Excel
    |-------------------------------------------------------------------
    |
    */
    function import_excel()
    {
        $this->load->helper('file');

        /* Allowed MIME(s) File */
        $file_mimes = array(
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );

        if (isset($_FILES['uploadFile']['name']) && in_array($_FILES['uploadFile']['type'], $file_mimes)) {

            $array_file = explode('.', $_FILES['uploadFile']['name']);
            $extension  = end($array_file);

            if ('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadsheet = $reader->load($_FILES['uploadFile']['tmp_name']);
            $sheet_data  = $spreadsheet->getActiveSheet(0)->toArray();
            $array_data  = [];

            for ($i = 1; $i < count($sheet_data); $i++) {
                $data = array(
                    'id'       => $sheet_data[$i]['1'],
                    'grade1'   => $sheet_data[$i]['2'],
                    'grade2'   => $sheet_data[$i]['3'],
                    'chapter'  => $sheet_data[$i]['4'],
                    'title'    => $sheet_data[$i]['5']
                );
                $array_data[] = $data;
            }

            if ($array_data != '') {
                $this->test_info_chapter_m->empty_table();
                $this->test_info_chapter_m->insert_transaction_batch($array_data);
            }
            $this->modal_feedback('success', 'Success', 'Data Imported', 'OK');
        } else {
            $this->modal_feedback('error', 'Error', 'Import failed', 'Try again');
        }
        redirect('/upload_tb_test_info_chapter_c');
    }

    /*
    |-------------------------------------------------------------------
    | Export Excel
    |-------------------------------------------------------------------
    |
    */
    function export_excel()
    {
        /* Data */
        $data = $this->test_info_chapter_m->fetch_transactions();

        /* Spreadsheet Init */
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        /* Excel Header */
        $sheet->setCellValue('A1', '#');
        $sheet->setCellValue('B1', 'id');
        $sheet->setCellValue('C1', 'grade1');
        $sheet->setCellValue('D1', 'grade2');
        $sheet->setCellValue('E1', 'chapter');
        $sheet->setCellValue('F1', 'title');

        /* Excel Data */
        $row_number = 2;
        foreach ($data as $key => $row) {
            $sheet->setCellValue('A' . $row_number, $key + 1);
            $sheet->setCellValue('B' . $row_number, $row['id']);
            $sheet->setCellValue('C' . $row_number, $row['grade1']);
            $sheet->setCellValue('D' . $row_number, $row['grade2']);
            $sheet->setCellValue('E' . $row_number, $row['chapter']);
            $sheet->setCellValue('F' . $row_number, $row['title']);

            $row_number++;
        }

        /* Excel File Format */
        $writer = new Xlsx($spreadsheet);
        $filename = 'excel-report';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
