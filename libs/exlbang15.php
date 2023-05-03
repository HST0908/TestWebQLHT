<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang15");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 15. THỐNG KÊ SỐ LƯỢNG GIẢNG VIÊN VÀ NGHIÊN CỨU VIÊN")->mergeCells('A2:F2');
$myexcel->getActiveSheet()->setCellValue("A4", "Phân cấp giảng viên và nghiên cứu viên")->mergeCells('A4:A5');
$myexcel->getActiveSheet()->setCellValue("B4", "Cơ hữu/toàn thời gian")->mergeCells('B4:C4');
$myexcel->getActiveSheet()->setCellValue("C4", "Năm thành lập");
$myexcel->getActiveSheet()->setCellValue("D4", "Hợp đồng/ thỉnh giảng")->mergeCells('D4:E4');
$myexcel->getActiveSheet()->setCellValue("B5", "Số lượng ");
$myexcel->getActiveSheet()->setCellValue("C5", "Tiến sĩ (%)");
$myexcel->getActiveSheet()->setCellValue("D5", "Số lượng ");
$myexcel->getActiveSheet()->setCellValue("E5", "Tiến sĩ (%)");
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:E5')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:E5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$namhoc = $_POST['namin'];
$sql = "SELECT * FROM bang15 where namhoc = $namhoc";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['phancap']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['slcohuu']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['tscohuu']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['slhopdong']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['tshopdong']);
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A4:' . 'E'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'E' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang15.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
