<?php 
require_once "../connect.php";
require_once "PHPExcel.php";
$myexcel= new PHPExcel();
$myexcel ->getActiveSheet()->setTitle("bang12");
$myexcel->getActiveSheet()->setCellValue("A2", "BẢNG 12. DANH SÁCH CÁN BỘ LÃNH ĐẠO CHỦ CHỐT CỦA CSGD")->mergeCells("A2:E2");
$myexcel ->getActiveSheet()->setCellValue("A4","Các đơn vị",);
$myexcel ->getActiveSheet()->setCellValue("B4","Họ tên");
$myexcel ->getActiveSheet()->setCellValue("C4","Chức danh");
$myexcel ->getActiveSheet()->setCellValue("D4","Điện thoại");
$myexcel ->getActiveSheet()->setCellValue("E4","Email");
$myexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$myexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$myexcel->getActiveSheet()->getStyle('A4:F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$myexcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $namhoc = $_POST['namin'];
    $sql = "SELECT * FROM bang12 where namhoc = $namhoc";
    $result = mysqli_query($conn, $sql);
    $i = 4;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $i++;
            $myexcel ->getActiveSheet()->setCellValue("A".$i,$row['cacdonvi']);
            $myexcel ->getActiveSheet()->setCellValue("B".$i,$row['hovaten']);
            $myexcel ->getActiveSheet()->setCellValue("C".$i,$row['chucdanh']);
            $myexcel ->getActiveSheet()->setCellValue("D".$i,$row['dienthoai']);
            $myexcel ->getActiveSheet()->setCellValue("E".$i,$row['email']);
        }
    }
    else{
        echo '<script>alert("không có dữ liệu")</script>';
    }
    $styleArray = array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    );
    $myexcel->getActiveSheet()->getStyle('A5:' . 'E'.($i))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $myexcel->getActiveSheet()->getStyle('A4:' . 'E' . ($i))->applyFromArray($styleArray);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang12.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header ('Cache-Control: cache, must-revalidate');
$Save = PHPExcel_IOFactory::createWriter($myexcel, 'Excel2007');
$Save->save('php://output');
exit;
?>