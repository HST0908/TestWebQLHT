<?php 
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel= new PHPExcel();
$myexcel ->getActiveSheet()->setTitle("bang12");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 12. DANH SÁCH CÁN BỘ LÃNH ĐẠO CHỦ CHỐT CỦA CSGD")->mergeCells("A2:E2");
$myexcel ->getActiveSheet()->setCellValue("A4","STT",);
$myexcel ->getActiveSheet()->setCellValue("B4","Các đơn vị",);
$myexcel ->getActiveSheet()->setCellValue("C4","Họ tên");
$myexcel ->getActiveSheet()->setCellValue("D4","Chức danh");
$myexcel ->getActiveSheet()->setCellValue("E4","Điện thoại");
$myexcel ->getActiveSheet()->setCellValue("F4","Email");
$myexcel ->getActiveSheet()->setCellValue("G4","Năm học");
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:G4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $nambd = $_POST['nambd'];
    $namkt = $_POST['namkt'];
    $sql = "SELECT * FROM bang12 where namhoc between $nambd and $namkt ORDER BY namhoc DESC ";
    $result = mysqli_query($conn, $sql);
    $i = 4;
    $dem = 0;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $i++;
            $dem++;
            $myexcel ->getActiveSheet()->setCellValue("A" . $i, ("$dem"));
            $myexcel ->getActiveSheet()->setCellValue("B".$i,$row['cacdonvi']);
            $myexcel ->getActiveSheet()->setCellValue("C".$i,$row['hovaten']);
            $myexcel ->getActiveSheet()->setCellValue("D".$i,$row['chucdanh']);
            $myexcel ->getActiveSheet()->setCellValue("E".$i,$row['dienthoai']);
            $myexcel ->getActiveSheet()->setCellValue("F".$i,$row['email']);
            $myexcel ->getActiveSheet()->setCellValue("G".$i,$row['namhoc']);
        }
    }
    else{
        echo '<script>alert("không có dữ liệu")</script>';
    }
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang12b.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header ('Cache-Control: cache, must-revalidate');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
?>