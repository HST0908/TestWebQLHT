<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang18 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);

    $output = '<table border = 1>
        <tr>
            <td>STT</td>
            <td>Trình độ, học vị, chức danh</td>
            <td>GV trong biên chế trực tiếp giảng dạy</td>
            <td>GV hợp đồng dài hạn trực tiếp giảng dạy</td>
            <td>Giảng viên kiêm nhiệm là cán bộ quản lý</td>
            <td>Giảng viên thỉnh giảng trong nước</td>
            <td>Giảng viên thỉnh giảng quốc tế</td>
            <td>Tổng số</td>
            <td>Năm học</td>
        </tr>';
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            
            $a= $row['gvbienche'];
            $b= $row['gvhopdong'];
            $c= $row['gvquanly'];
            $d= $row['gvthinhgiang'];
            $e= $row['gvthinhgiangqt'];
            $tong = $a+$b+$c+$d+$e;
            $output.='
            <tr>
                <td>'.$i++.'</td>
                <td>'.$row['chucdanh'].'</td>
                <td>'.$row['gvbienche'].'</td>
                <td>'.$row['gvhopdong'].'</td>
                <td>'.$row['gvquanly'].'</td>
                <td>'.$row['gvthinhgiang'].'</td>
                <td>'.$row['gvthinhgiangqt'].'</td>
                <td>'.$tong.'</td>
                <td>'.$row['namhoc'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang18.xls');
echo $output;