<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang41");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 41.  DIỆN TÍCH ĐẤT, DIỆN TÍCH SÀN XÂY DỰNG")->mergeCells('A2:H2');
$myexcel->getActiveSheet()->setCellValue("A4", "STT");
$myexcel->getActiveSheet()->setCellValue("B4", "Tên phòng/ giảng đường/ lab");
$myexcel->getActiveSheet()->setCellValue("C4", "Số lượng");

$myexcel->getActiveSheet()->setCellValue("D4", "Danh mục trang thiết bị chính (*)");
$myexcel->getActiveSheet()->setCellValue("E4", "Đối tượng sử dụng");
$myexcel->getActiveSheet()->setCellValue("F4", "Diện tích sàn xây dựng(m2)");
$myexcel->getActiveSheet()->setCellValue("G4", "Hình thức sử dụng");
$myexcel->getActiveSheet()->setCellValue("G5", "Sở hữu");
$myexcel->getActiveSheet()->setCellValue("H5", "Liên kết");
$myexcel->getActiveSheet()->setCellValue("I5", "Thuê");

$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("H")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("I")->setAutoSize(true);

$myexcel->getActiveSheet()->getStyle('A4:I4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:I4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('B5:I5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nam = $_POST['namin'];
$sql = "SELECT * FROM bang41 where nam = $nam";
$result = mysqli_query($conn, $sql);
$i = 5;
$dem=0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $dem++;
        $myexcel ->getActiveSheet()->setCellValue("A" . $i, ("$dem"));
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['tenphong']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['soluong']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['thietbi']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['doituongsd']);
        $myexcel->getActiveSheet()->setCellValue("F" . $i, $row['dientich']);
        $myexcel->getActiveSheet()->setCellValue("G" . $i, $row['sohuu']);
        $myexcel->getActiveSheet()->setCellValue("H" . $i, $row['lienket']);
        $myexcel->getActiveSheet()->setCellValue("I" . $i, $row['thue']);
      
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A6:' . 'I'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'I' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang41.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
