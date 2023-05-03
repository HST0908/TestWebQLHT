<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang18");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 18. THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN THEO TRÌNH ĐỘ")->mergeCells('A2:H2');
$myexcel->getActiveSheet()->setCellValue("A4", "TT");
$myexcel->getActiveSheet()->setCellValue("B4", "Trình độ, học vị, chức danh");
$myexcel->getActiveSheet()->setCellValue("C4", "GV trong biên chế trực tiếp giảng dạy");
$myexcel->getActiveSheet()->setCellValue("D4", "GV hợp đồng dài hạn trực tiếp giảng dạy");
$myexcel->getActiveSheet()->setCellValue("E4", "Giảng viên kiêm nhiệm là cán bộ quản lý");
$myexcel->getActiveSheet()->setCellValue("F4", "Giảng viên thỉnh giảng trong nước");
$myexcel->getActiveSheet()->setCellValue("G4", "Giảng viên thỉnh giảng quốc tế");
$myexcel->getActiveSheet()->setCellValue("H4", "Tổng số");
$myexcel->getActiveSheet()->setCellValue("I4", "Năm học");

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

$sql = "SELECT * FROM bang18 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 4;
$dem = 0;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $dem++;
        $gv1 = $row['gvbienche'];
        $gv2 = $row['gvhopdong'];
        $gv3 = $row['gvquanly'];
        $gv4 = $row['gvthinhgiang'];
        $gv5 = $row['gvthinhgiangqt'];
        $tong = $gv1+$gv2+$gv3+$gv4+$gv5;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, ("$dem"));
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['chucdanh']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['gvbienche']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['gvhopdong']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['gvquanly']);
        $myexcel->getActiveSheet()->setCellValue("F" . $i, $row['gvthinhgiang']);
        $myexcel->getActiveSheet()->setCellValue("G" . $i, $row['gvthinhgiangqt']);
        $myexcel->getActiveSheet()->setCellValue("H" . $i, ''.($tong));
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
header('Content-Disposition: attachment;filename="bang18b.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
