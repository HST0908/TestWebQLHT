<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$namhoc = $_POST['namin'];
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang23");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 23. KÝ TÚC XÁ CHO SINH VIÊN")->mergeCells('A2:H2');
$myexcel->getActiveSheet()->setCellValue("A4", "Các tiêu chí");
$myexcel->getActiveSheet()->setCellValue("B4", ($namhoc));

// $myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
// $myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);

$myexcel->getActiveSheet()->getStyle('A4:B4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$namhoc = $_POST['namin'];
$sql = "SELECT * FROM bang23 where namhoc = $namhoc";
$result = mysqli_query($conn, $sql);
$i = 4;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['tieuchi']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['giatri']);
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A4:' . 'B'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'B' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang23.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
