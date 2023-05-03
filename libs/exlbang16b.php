<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang16");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 16. THỐNG KÊ SỐ LƯỢNG CÁN BỘ QUẢN LÝ, NHÂN VIÊN")->mergeCells('A2:D2');
$myexcel->getActiveSheet()->setCellValue("A4", "Phân cấp cán bộ nhân viên")->mergeCells('A4:A5');
$myexcel->getActiveSheet()->setCellValue("B4", "Số lượng")->mergeCells('B4:D4');
$myexcel->getActiveSheet()->setCellValue("B5", "Cơ hữu / Toàn thời gian");
$myexcel->getActiveSheet()->setCellValue("C5", "Hợp đồng bán thời gian");
$myexcel->getActiveSheet()->setCellValue("D5", "Tổng số");
$myexcel->getActiveSheet()->setCellValue("E4", "Năm học")->mergeCells('E4:E5');
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:E5')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:E5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang16 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $cohuu = $row['slcohuu'];
        $hopdong = $row['slhopdong'];
        $tong = $cohuu + $hopdong;
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['phancap']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['slcohuu']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['slhopdong']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, ''.($tong));
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['namhoc']);
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
header('Content-Disposition: attachment;filename="bang16b.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
