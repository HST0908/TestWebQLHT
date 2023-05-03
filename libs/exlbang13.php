<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang13");
$myexcel->getActiveSheet()->setCellValue("A4", "Khoa / viện đào tạo")->mergeCells("A4:A5");
$myexcel->getActiveSheet()->setCellValue("B4", "Đại học")->mergeCells("B4:C4");
$myexcel->getActiveSheet()->setCellValue("D4", "Sau đại học")->mergeCells("D4:E4");
$myexcel->getActiveSheet()->setCellValue("F4", "Khác")->mergeCells("F4:G4");
$myexcel->getActiveSheet()->setCellValue("B5", "Số CTĐT");
$myexcel->getActiveSheet()->setCellValue("C5", "Số sinh viên");
$myexcel->getActiveSheet()->setCellValue("D5", "Số CTĐT");
$myexcel->getActiveSheet()->setCellValue("E5", "Số người học");
$myexcel->getActiveSheet()->setCellValue("F5", "Số CTĐT");
$myexcel->getActiveSheet()->setCellValue("G5", "Số người học");
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:F4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('B5:G5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$namhoc = $_POST['namin'];
$sql = "SELECT * FROM bang13 where namhoc = $namhoc";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['khoa']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, $row['ctdtdh']);
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['svdh']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['ctdtsaudh']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, $row['svsaudh']);
        $myexcel->getActiveSheet()->setCellValue("F" . $i, $row['ctdtkhac']);
        $myexcel->getActiveSheet()->setCellValue("G" . $i, $row['svkhac']);
    }
}
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$myexcel->getActiveSheet()->getStyle('A6:' . 'G'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:' . 'G' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang13.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
