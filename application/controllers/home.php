<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Home extends MY_Controller
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
        $this->load->model('home_model');
    }

    /*
    |-------------------------------------------------------------------
    | Index
    |-------------------------------------------------------------------
    |
    */
    function index()
    {
        $data['title'] = 'Excel book_master';
        $data['transaction_list'] = $this->home_model->fetch_transactions();

        $this->load->view('frontend/book_master/header', $data);
        $this->load->view('frontend/book_master/content', $data);
        $this->load->view('frontend/book_master/footer', $data);
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
                    'id'            => $sheet_data[$i]['1'],
                    'flag'          => $sheet_data[$i]['2'],
                    'modified_time' => $sheet_data[$i]['3'],
                    'title'         => $sheet_data[$i]['4'],
                    'grade1'        => $sheet_data[$i]['5'],
                    'grade2'        => $sheet_data[$i]['6'],
                    'chapter_count' => $sheet_data[$i]['7'],
                    'book_level'    => $sheet_data[$i]['8'],
                    'description'   => $sheet_data[$i]['9'],
                    'status'        => $sheet_data[$i]['10'],
                    'workspace'     => $sheet_data[$i]['11']
                );
                $array_data[] = $data;
            }

            if ($array_data != '') {
                $this->home_model->empty_table();
                $this->home_model->insert_transaction_batch($array_data);
            }
            $this->modal_feedback('success', 'Success', 'Data Imported', 'OK');
        } else {
            $this->modal_feedback('error', 'Error', 'Import failed', 'Try again');
        }
        redirect('/home');
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
        $data = $this->home_model->fetch_transactions();

        /* Spreadsheet Init */
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        /* Excel Header */
        $sheet->setCellValue('A1', '#');
        $sheet->setCellValue('B1', 'id');
        $sheet->setCellValue('C1', 'flag');
        $sheet->setCellValue('D1', 'modified_time');
        $sheet->setCellValue('E1', 'title');
        $sheet->setCellValue('F1', 'grade1');
        $sheet->setCellValue('G1', 'grade2');
        $sheet->setCellValue('H1', 'chapter_count');
        $sheet->setCellValue('I1', 'book_level');
        $sheet->setCellValue('J1', 'description');
        $sheet->setCellValue('K1', 'status');
        $sheet->setCellValue('L1', 'workspace');

        /* Excel Data */
        $row_number = 2;
        foreach ($data as $key => $row) {
            $sheet->setCellValue('A' . $row_number, $key + 1);
            $sheet->setCellValue('B' . $row_number, $row['id']);
            $sheet->setCellValue('C' . $row_number, $row['flag']);
            $sheet->setCellValue('D' . $row_number, $row['modified_time']);
            $sheet->setCellValue('E' . $row_number, $row['title']);
            $sheet->setCellValue('F' . $row_number, $row['grade1']);
            $sheet->setCellValue('G' . $row_number, $row['grade2']);
            $sheet->setCellValue('H' . $row_number, $row['chapter_count']);
            $sheet->setCellValue('I' . $row_number, $row['book_level']);
            $sheet->setCellValue('J' . $row_number, $row['description']);
            $sheet->setCellValue('K' . $row_number, $row['status']);
            $sheet->setCellValue('L' . $row_number, $row['workspace']);

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
