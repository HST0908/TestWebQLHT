<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang19 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 0;

$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">STT</th>
        <th rowspan="2">Trình độ/ học vị</th>
        <th rowspan="2">Số lượng</th>
        <th colspan="2">Phân loại theo giới tính</th>
        <th colspan="5">Phân loại theo độ tuổi người</th>
        <th rowspan="2">Năm học</th>
    </tr>
    <tr>
        <th>Nam</th>
        <th>Nữ</th>
        <th> < 30 </th>
        <th>30-40</th>
        <th>41-50</th>
        <th>51-60</th>
        <th>>60</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td>'.$i++.'</td>
                <td align="center">'.$row['hocvi'].'</td>
                <td  align="center">'.$row['soluong'].'</td>
                <td  align="center">'.$row['nam'].'</td>
                <td  align="center">'.$row['nu'].'</td>
                <td  align="center">'.$row['bamuoi'].'</td>
                <td  align="center">'.$row['bonmuoi'].'</td>
                <td  align="center">'.$row['nammuoi'].'</td>
                <td  align="center">'.$row['saumuoi'].'</td>
                <td  align="center">'.$row['trensaumuoi'].'</td>
                <td  align="center">'.$row['namhoc'].'</td>
            </tr>';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang19.xls');
echo $output;
