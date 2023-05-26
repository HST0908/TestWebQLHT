<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang16 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);

$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">Phân cấp giảng viên và nghiên cứu viên</th>
        <th colspan="3">Số lượng</th>
        <th rowspan="2">Năm học</th>
    </tr>
    <tr>
        <th> Cơ hữu / toàn thời gian </th>
        <th>Hợp đồng bán thời gian</th>
        <th>Tổng số</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            
            $cohuu = $row['slcohuu'];
            $hopdong = $row['slhopdong'];
            $tong = $cohuu + $hopdong;

            $output.='
            <tr>
                <td>'.$row['phancap'].'</td>
                <td  align="center">'.$row['slcohuu'].'</td>
                <td  align="center">'.$row['slhopdong'].'</td>
                <td  align="center">'.$tong.'</td>
                <td  align="center">'.$row['namhoc'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang16.xls');
echo $output;
