<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang37");
$myexcel->getActiveSheet()->setCellValue("A2", "SỐ BẰNG PHÁT MINH, SÁNG CHẾ
 ĐƯỢC CẤP")->mergeCells('A2:D2');
$myexcel->getActiveSheet()->setCellValue("A4", "Năm");
$myexcel->getActiveSheet()->setCellValue("B4", "Số bằng phát minh, sáng chế được cấp
(ghi rõ nơi cấp, thời gian cấp, người được cấp)");

$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:B4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A4:A8')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang37 where nam BETWEEN $nambd AND $namkt order by nam asc ";
$result = mysqli_query($conn, $sql);
$i = 5;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $myexcel->getActiveSheet()->setCellValue("A" . $i, $row['nam']);
        $myexcel->getActiveSheet()->setCellValue("B" . $i, 'Số bằng phát minh: '.$row['slbang'].', Nơi cấp: '.$row['noicap'].', Thời gian cấp: '.$row['thoigiancap'].', Người được cấp:'.$row['nguoiduoccap']);
     
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
header('Content-Disposition: attachment;filename="bang37.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;



