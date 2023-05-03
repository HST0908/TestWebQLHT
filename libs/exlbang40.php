<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang40");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 40.  TỔNG SỐ ĐẦU SÁCH TRONG THƯ VIỆN CỦA NHÀ TRƯỜNG")->mergeCells('A2:F2');
$myexcel->getActiveSheet()->setCellValue("A4", "Khối nghành / nhóm nghành");
$myexcel->getActiveSheet()->setCellValue("B4", "Đầu sách");
$myexcel->getActiveSheet()->setCellValue("C4", "Bản sách");


$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);


$myexcel->getActiveSheet()->getStyle('A4:C4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('B5:C5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nam = $_POST['namin'];
$sql = "SELECT * FROM bang40 where nam = $nam";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['khoinghanh']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['dausach']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['bansach']);
        
       
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A6:' . 'C'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'C' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang40.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
