<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang19");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 16. THỐNG KÊ SỐ LƯỢNG CÁN BỘ QUẢN LÝ, NHÂN VIÊN")->mergeCells('A2:J2');
$myexcel->getActiveSheet()->setCellValue("A4", "TT")->mergeCells('A4:A5');
$myexcel->getActiveSheet()->setCellValue("B4", "Trình độ / Học vị")->mergeCells('B4:B5');
$myexcel->getActiveSheet()->setCellValue("C4", "Số lượng")->mergeCells('C4:C5');
$myexcel->getActiveSheet()->setCellValue("D4", "Tỉ lệ")->mergeCells('D4:D5');
$myexcel->getActiveSheet()->setCellValue("E4", "Phân loại theo giới tính")->mergeCells('E4:F4');
$myexcel->getActiveSheet()->setCellValue("E5", "Nam");
$myexcel->getActiveSheet()->setCellValue("F5", "Nữ");
$myexcel->getActiveSheet()->setCellValue("G4", "Phân loại theo tuổi (người)")->mergeCells('G4:K4');
$myexcel->getActiveSheet()->setCellValue("G5", "<30");
$myexcel->getActiveSheet()->setCellValue("H5", "30-40");
$myexcel->getActiveSheet()->setCellValue("I5", "41-50");
$myexcel->getActiveSheet()->setCellValue("J5", "51-60");
$myexcel->getActiveSheet()->setCellValue("K5", ">60");
$myexcel->getActiveSheet()->setCellValue("L4", "Năm học")->mergeCells('L4:L5');

$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("H")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("I")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("J")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("K")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("L")->setAutoSize(true);

$myexcel->getActiveSheet()->getStyle('A4:L5')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:L5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang19 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 5;
$dem = 0;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $dem++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, ("$dem"));
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['hocvi']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['soluong']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, );
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['nam']);
        $myexcel->getActiveSheet()->setCellValue("F" . $i, $row['nu']);
        $myexcel->getActiveSheet()->setCellValue("G" . $i, $row['bamuoi']);
        $myexcel->getActiveSheet()->setCellValue("H" . $i, $row['bonmuoi']);
        $myexcel->getActiveSheet()->setCellValue("I" . $i, $row['nammuoi']);
        $myexcel->getActiveSheet()->setCellValue("J" . $i, $row['saumuoi']);
        $myexcel->getActiveSheet()->setCellValue("K" . $i, $row['trensaumuoi']);
        $myexcel->getActiveSheet()->setCellValue("L" . $i, $row['namhoc']);
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A4:' . 'L'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'L' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang19b.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
