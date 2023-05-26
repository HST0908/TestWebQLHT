<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];


$sql = "SELECT * FROM bang15 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);

$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">Phân cấp giảng viên và nghiên cứu viên</th>
        <th colspan="2">Cơ hữu/ toàn thời gian</th>
        <th colspan="2">Hợp đồng/ thỉnh giảng</th>
        <th rowspan="2">Năm học</th>
    </tr>
    <tr>
        <th>Số lượng</th>
        <th>Tiến sĩ (%)</th>
        <th>Số lượng</th>
        <th>Tiến sĩ</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
            <td align="center">'.$row['phancap'].'</td>
            <td  align="center">'.$row['slcohuu'].'</td>
            <td  align="center">'.$row['tscohuu'].'</td>
            <td  align="center">'.$row['slhopdong'].'</td>
            <td  align="center">'.$row['tshopdong'].'</td>
            <td  align="center">'.$row['namhoc'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang15.xls');
echo $output;