<?php 
require_once "../connect.php";

    $nambd = $_POST['nambd'];
    $namkt = $_POST['namkt'];
    $sql = "SELECT * FROM bang12 where namhoc between $nambd and $namkt ORDER BY namhoc DESC ";
    $result = mysqli_query($conn, $sql);
$output = '<table border = 1>
    <tr>
        <td>STT</td>
        <td>Các đơn vị (bộ phận)</td>
        <td>Họ và tên</td>
        <td>Chức danh, học vị, chức vụ</td>
        <td>Điện thoại</td>
        <td>Email</td>
        <td>Năm học</td>
    </tr>';
    $dem = 0;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td>'.$dem++.'</td>
                <td>'.$row['cacdonvi'].'</td>
                <td>'.$row['hovaten'].'</td>
                <td>'.$row['chucdanh'].'</td>
                <td>'.$row['dienthoai'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['namhoc'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang12.xls');
echo $output;
?>