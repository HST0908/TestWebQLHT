<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang22");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 22 :TỔNG SỐ NGƯỜI HỌC ĐĂNG KÝ DỰ THI VÀO CSGD, TRÚNG TUYỂN VÀ NHẬP HỌC
TRONG 5 NĂM GẦN ĐÂY HỆ KHÔNG CHÍNH QUY")->mergeCells('A2:H2');
$myexcel->getActiveSheet()->setCellValue("A4", "Đối tượng, thời gian (năm)");
$myexcel->getActiveSheet()->setCellValue("B4", "Số thí sinh dự tuyển (người)");
$myexcel->getActiveSheet()->setCellValue("C4", "Số trúng tuyển (người)");
$myexcel->getActiveSheet()->setCellValue("D4", "Tỷ lệ cạnh tranh");
$myexcel->getActiveSheet()->setCellValue("E4", "Số nhập học thực tế (người)");
$myexcel->getActiveSheet()->setCellValue("F4", "Điểm tuyển đầu vào (thang điểm 30)");
$myexcel->getActiveSheet()->setCellValue("G4", "Điểm trung bình của người học được tuyển");
$myexcel->getActiveSheet()->setCellValue("H4", "Số lượng sinh viên quốc tế nhập học (người)");
$myexcel->getActiveSheet()->setCellValue("I4", "Năm  học");

// $myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("H")->setAutoSize(true);

$myexcel->getActiveSheet()->getStyle('A4:I4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:I4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang22 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 4;
$dem = 0;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $dem++;
        $tile = $row['sotrungtuyen']/$row['sothisinh'];
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['doituong']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['sothisinh']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['sotrungtuyen']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, ("$tile"));
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['sonhaphoc']);
        $myexcel->getActiveSheet()->setCellValue("F" . $i, $row['diemdauvao']);
        $myexcel->getActiveSheet()->setCellValue("G" . $i, $row['diemtb']);
        $myexcel->getActiveSheet()->setCellValue("H" . $i, $row['slsinhvienqt']);
        $myexcel->getActiveSheet()->setCellValue("I" . $i, $row['namhoc']);
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A4:' . 'I'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'I' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang22b.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
