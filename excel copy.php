<?php
var_dump("test");

include "./PHPExcel/Classes/PHPExcel.php";

$objPHPExcel = new PHPExcel();

$arrTwice = array();

$arrTwice[1] = array("name" => "나연", "position" => "리드보컬, 리드댄서", "birthday" => "09월 22일");
$arrTwice[2] = array("name" => "정연", "position" => "리드보컬", "birthday" => "11월 01일");
$arrTwice[3] = array("name" => "모모", "position" => "서브보컬, 메인댄서, 서브래퍼", "birthday" => "11월 09일");
$arrTwice[4] = array("name" => "사나", "position" => "서브보컬", "birthday" => "12월 29일");
$arrTwice[5] = array("name" => "지효", "position" => "리더, 메인보컬", "birthday" => "02월 01일");
$arrTwice[6] = array("name" => "미나", "position" => "서브보컬, 메인댄서, 서브래퍼", "birthday" => "03월 24일");
$arrTwice[7] = array("name" => "다현", "position" => "리드래퍼, 서브보컬", "birthday" => "05월 28일");
$arrTwice[8] = array("name" => "채영", "position" => "메인래퍼, 서브보컬", "birthday" => "04월 23일");
$arrTwice[9] = array("name" => "쯔위", "position" => "서브보컬, 리드댄서", "birthday" => "06월 14일");



$objPHPExcel->setActiveSheetIndex(0)
  ->setCellValue("A1", "NO.")
  ->setCellValue("B1", "이름")
  ->setCellValue("C1", "포지션")
  ->setCellValue("D1", "생일");

$count = 1;

foreach ($arrTwice as $key => $val) {
  $num = 1 + $key;
  $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue(sprintf("A%s", $num), $key)
    ->setCellValue(sprintf("B%s", $num), $val['name'])
    ->setCellValueExplicit(sprintf("C%s", $num), $val['position'])
    ->setCellValue(sprintf("D%s", $num), $val['birthday']);
  $count++;
}

// 가로 넓이 조정

$objPHPExcel->getActiveSheet()->getColumnDimension("A")->setWidth(6);
$objPHPExcel->getActiveSheet()->getColumnDimension("B")->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension("C")->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension("D")->setWidth(15);

// 전체 가운데 정렬

$objPHPExcel->getActiveSheet()->getStyle(sprintf("A1:D%s", $count))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

// 전체 테두리 지정

$objPHPExcel->getActiveSheet()->getStyle(sprintf("A1:D%s", $count))->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

// 타이틀 부분

$objPHPExcel->getActiveSheet()->getStyle("A1:D1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("A1:D1")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("CECBCA");

// $objPHPExcel -> getActiveSheet() -> getRowDimension(1) -> setRowHeight(23);

// 내용 지정

$objPHPExcel->getActiveSheet()->getStyle(sprintf("A2:D%s", $count))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("F4F4F4");

// 시트 네임

$objPHPExcel->getActiveSheet()->setTitle("트와이스");

// 첫번째 시트(Sheet)로 열리게 설정

$objPHPExcel->setActiveSheetIndex(0);

// 파일의 저장형식이 utf-8일 경우 한글파일 이름은 깨지므로 euc-kr로 변환해준다.

$filename = iconv("UTF-8", "EUC-KR", "트와이스_TWICE");

// 브라우저로 엑셀파일을 리다이렉션

header("Content-Type:application/vnd.ms-excel");
header("Content-Disposition: attachment;filename=" . $filename . ".xls");
header("Cache-Control:max-age=0");

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel5");
$objWriter->save("php://output");
