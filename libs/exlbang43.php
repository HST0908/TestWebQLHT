<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang43");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 43.  TỔNG THU HỌC PHÍ (CHỈ TÍNH HỆ CHÍNH QUY)")->mergeCells('A2:J2');
$myexcel->getActiveSheet()->setCellValue("C4", "STT");
$myexcel->getActiveSheet()->setCellValue("D4", "Năm");
$myexcel->getActiveSheet()->setCellValue("E4", "Tổng thu học phí");

$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);


$myexcel->getActiveSheet()->getStyle('C4:E4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('C4:E4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('D5:E5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang43 where nam between $nambd and $namkt ORDER BY nam ASC";
$result = mysqli_query($conn, $sql);
$i = 4;
$dem=0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $dem++;
        $myexcel ->getActiveSheet()->setCellValue("C" . $i, ("$dem"));
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['nam']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, number_format($row['tongthuhocphi'], 0, '.','.'));

      
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('C6:' . 'E'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('C4:' . 'E' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang43.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;