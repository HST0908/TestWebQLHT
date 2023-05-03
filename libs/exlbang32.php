<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang32");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 32.  SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH
THAM GIA VIẾT SÁCH")->mergeCells('A2:H2');
$myexcel->getActiveSheet()->setCellValue("A4", "Số lượng sách ");
$myexcel->getActiveSheet()->setCellValue("B4", "Số lượng cán bộ cơ hữu tham gia viết sách");
$myexcel->getActiveSheet()->setCellValue("F4", "Ghi chú ");
$myexcel->getActiveSheet()->setCellValue("B5", "Sách chuyên khảo");
$myexcel->getActiveSheet()->setCellValue("C5", "Sách giáo trình");
$myexcel->getActiveSheet()->setCellValue("D5", "Sách tham khảo");
$myexcel->getActiveSheet()->setCellValue("E5", "Sách hướng dẫn");
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:F4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('B5:F5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nam = $_POST['namin'];
$sql = "SELECT * FROM bang32 where nam = $nam";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['slsach']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['slvietSCK']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['slvietSGT']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['slvietSTK']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['slvietSHD']);
      
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A6:' . 'F'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'F' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang32.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
