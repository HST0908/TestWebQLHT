<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];
$sql = "SELECT * FROM bang30 where nam between $nambd and $namkt ORDER BY nam DESC ";
$result = mysqli_query($conn, $sql);
$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">Năm</th>
        <th rowspan="2">Số lượng đề tài</th>
        <th colspan="3">Số lượng cán bộ tham gia (Người)</th>
    </tr>
    <tr>
        <th>Đề tài cấp Nhà nước</th>
        <th>Đề tài cấp Bộ</th>
        <th>Đề tài cấp trường</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
            <td align="center">'.$row['nam'].'</td>
            <td  align="center">'.$row['sldetai'].'</td>
            <td  align="center">'.$row['slcbNN'].'</td>
            <td  align="center">'.$row['slcbB'].'</td>
            <td  align="center">'.$row['slcbT'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang30.xls');
echo $output;
