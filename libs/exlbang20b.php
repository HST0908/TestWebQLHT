<?php
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel = new PHPExcel();
$myexcel->getActiveSheet()->setTitle("bang20");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 20: THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU 
THEO MỨC ĐỘ THƯỜNG XUYÊN SỬ DỤNG NGOẠI NGỮ VÀ TIN HỌC CHO CÔNG TÁC GIẢNG DẠY VÀ NGHIÊN CỨU ")->mergeCells('A2:D2');
$myexcel->getActiveSheet()->setCellValue("A4", "TT")->mergeCells('A4:A5');
$myexcel->getActiveSheet()->setCellValue("B4", "Tần suất sử dụng")->mergeCells('B4:B5');
$myexcel->getActiveSheet()->setCellValue("C4", "Tỷ lệ (%) giảng viên cơ hữu sử dụng ngoại ngữ và tin học")->mergeCells('C4:D4');
$myexcel->getActiveSheet()->setCellValue("C5", "Ngoại ngữ");
$myexcel->getActiveSheet()->setCellValue("D5", "Tin học");
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

$sql = "SELECT * FROM bang20 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 5;
$dem = 0;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $dem++;

        if($row['tansuatsd']=="Luôn sử dụng")
            $hocvi = "Luôn sử dụng (trên 80% thời gian của công việc)";
        if($row['tansuatsd']=="Thường sử dụng")
            $hocvi = "Thường sử dụng (trên 60-80% thời gian của công việc)";
        if($row['tansuatsd']=="Đôi khi sử dụng")
            $hocvi = "Đôi khi sử dụng (trên 40-60% thời gian của công việc)";
        if($row['tansuatsd']=="Ít khi sử dụng")
            $hocvi = "Ít khi sử dụng (trên 20-40% thời gian của công việc)";
        if($row['tansuatsd']=="Hiếm khi sử dụng")
            $hocvi = "Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)";

        $myexcel->getActiveSheet()->setCellValue("A" . $i, ("$dem"));
        $myexcel->getActiveSheet()->setCellValue("B" . $i, ("$hocvi"));
        $myexcel->getActiveSheet()->setCellValue("C" . $i, $row['gvngoaingu']);
        $myexcel->getActiveSheet()->setCellValue("D" . $i, $row['gvtinhoc']);
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
header('Content-Disposition: attachment;filename="bang20b.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
