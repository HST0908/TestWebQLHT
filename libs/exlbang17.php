<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang17");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 17. THỐNG KÊ SỐ LƯỢNG CÁN BỘ, GIẢNG VIÊN VÀ NHÂN VIÊN
(GỌI CHUNG LÀ CÁN BỘ) CỦA CSGD THEO GIỚI TÍNH) ")->mergeCells('A2:D2');
$myexcel->getActiveSheet()->setCellValue("A4", "TT");
$myexcel->getActiveSheet()->setCellValue("A5", "I");
$myexcel->getActiveSheet()->setCellValue("A6", "I.1");
$myexcel->getActiveSheet()->setCellValue("A7", "I.2");
$myexcel->getActiveSheet()->setCellValue("A8", "II");
$myexcel->getActiveSheet()->setCellValue("B5", "Cán bộ cơ hữu");
$myexcel->getActiveSheet()->setCellValue("B4", "Phân loại");
$myexcel->getActiveSheet()->setCellValue("C4", "Nam");
$myexcel->getActiveSheet()->setCellValue("D4", "Nữ");
$myexcel->getActiveSheet()->setCellValue("E4", "Tổng số");
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:E4')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$myexcel->getActiveSheet()->getStyle('A5:A8')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A4:E4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$namhoc = $_POST['namin'];
$sql = "SELECT * FROM bang17 where namhoc = $namhoc";
$result = mysqli_query($conn, $sql);
$i = 5;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nam = $row['nam'];
        $nu = $row['nu'];
        $tong = $nam + $nu;
        $i++;
        if($row['phanloai']=='trong biên chế'){$phanloai = "Cán bộ được tuyển dụng, sử dụng và quản lý theo các quy định của pháp luật về viên chức (trong biên chế)";}
        if($row['phanloai']=='hợp đồng dài hạn'){ $phanloai = "Cán bộ hợp đồng có thời hạn 3 năm và hợp đồng không xác định thời hạn (hợp đồng dài hạn)";}
        if($row['phanloai']=='hợp đồng ngắn hạn'){$phanloai = "Cán bộ hợp đồng ngắn hạn, bao gồm cả giảng viên thỉnh giảng";}
        $myexcel->getActiveSheet()->setCellValue("B" . $i, ''.($phanloai));
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['nam']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['nu']);
        $myexcel->getActiveSheet()->setCellValue("E" . $i, ''.($tong));
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
header('Content-Disposition: attachment;filename="bang17.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
