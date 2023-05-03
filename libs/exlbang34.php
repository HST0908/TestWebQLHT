<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang34");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 34.  SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA VIẾT BÀI ĐĂNG TẠP CHÍ")->mergeCells('A2:H2');
$myexcel->getActiveSheet()->setCellValue("A4", "Số lượng cán bộ cơ hữu có bài báo đăng trên tạp chí ");
$myexcel->getActiveSheet()->setCellValue("B4", "Nơi đăng");
$myexcel->getActiveSheet()->setCellValue("B5", "Tạp chí KH Quốc tế");
$myexcel->getActiveSheet()->setCellValue("C5", "Tạp chí KH cấp Nghành trong nước");
$myexcel->getActiveSheet()->setCellValue("D5", "Tạp chí / tập san của cấp trường");

$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);

$myexcel->getActiveSheet()->getStyle('A4:D4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('B5:D5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nam = $_POST['namin'];
$sql = "SELECT * FROM bang34 where nam = $nam";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['slbaibao']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['sltcQT']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['sltcTN']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['sltcT']);
      
      
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A6:' . 'D'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'D' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang34.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
