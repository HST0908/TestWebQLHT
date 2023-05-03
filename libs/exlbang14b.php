<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang14");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 14. DANH SÁCH ĐƠN VỊ TRỰC THUỘC 
(BAO GỒM CÁC TRUNG TÂM NGHIÊN CỨU, CHI NHÁNH/CƠ SỞ CỦA CÁC ĐƠN VỊ)")->mergeCells('A2:F2');
$myexcel->getActiveSheet()->setCellValue("A4", "STT");
$myexcel->getActiveSheet()->setCellValue("B4", "Tên đơn vị");
$myexcel->getActiveSheet()->setCellValue("C4", "Năm thành lập");
$myexcel->getActiveSheet()->setCellValue("D4", "Lĩnh vực hoạt động");
$myexcel->getActiveSheet()->setCellValue("E4", "Số lượng nghiên cứu viên");
$myexcel->getActiveSheet()->setCellValue("F4", "Số lượng cán bộ/nhân viên");
$myexcel->getActiveSheet()->setCellValue("G4", "Năm học");
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:F4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang14 where namnhapds between $nambd and $namkt ORDER BY namnhapds DESC";
$result = mysqli_query($conn, $sql);
$i = 4;
$dem = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $dem++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i,''.($dem));
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['tendonvi']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['namthanhlap']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['linhvuchd']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['slnghiencuuvien']);
        $myexcel->getActiveSheet()->setCellValue("F" . $i, $row['slnhanvien']);
        $myexcel->getActiveSheet()->setCellValue("G" . $i, $row['namnhapds']);
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A4:' . 'G'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'G' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang14b.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
