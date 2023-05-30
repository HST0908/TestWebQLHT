<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];
$sql = "SELECT * FROM bang39 where nam between $nambd and $namkt ORDER BY nam DESC ";
$result = mysqli_query($conn, $sql);
$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">Năm</th>
        <th rowspan="2">Nội dung</th>
        <th rowspan="2">Diện tích</th>
        <th colspan="3">Hình thức sử dụng</th>
    </tr>
    <tr>
        <th>Sở hữu</th>
        <th>Liên kết</th>
        <th>Thuê</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td align="center">'.$row['nam'].'</td>
                <td align="center">'.$row['noidung'].'</td>
                <td align="center">'.$row['dientich'].' m<sup>2</sup>'.'</td>
                <td align="center">'.$row['sohuu'].'</td>
                <td align="center">'.$row['lienket'].'</td>
                <td align="center">'.$row['thue'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang39.xls');
echo $output;
