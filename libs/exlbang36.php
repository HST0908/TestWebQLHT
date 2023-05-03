<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang36");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 36.  SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH
CÓ BÁO CÁO KHOA HỌC TẠI CÁC HỘI NGHỊ, HỘI THẢO ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU")->mergeCells('A2:H2');
$myexcel->getActiveSheet()->setCellValue("A4", "Số lượng cán bộ cơ hữu có báo cáo khoa học tại các hội nghị, hội thảo ");
$myexcel->getActiveSheet()->setCellValue("B4", "Hội thảo quốc tế");
$myexcel->getActiveSheet()->setCellValue("C4", "Hội thảo trong nước");
$myexcel->getActiveSheet()->setCellValue("D4", "Hội thảo của trường");

$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);

$myexcel->getActiveSheet()->getStyle('A4:D4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('B5:D5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nam = $_POST['namin'];
$sql = "SELECT * FROM bang36 where nam = $nam";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['slbaocao']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['slbcQT']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['slbcTN']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['slbcT']);
       
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
header('Content-Disposition: attachment;filename="bang36.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
