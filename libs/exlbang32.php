<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];
$sql = "SELECT * FROM bang32 where nam between $nambd and $namkt ORDER BY nam DESC ";
$result = mysqli_query($conn, $sql);
$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">Năm</th>
        <th rowspan="2">Số lượng sách</th>
        <th colspan="4">Số lượng cán bộ cơ hữu tham gia viết sách</th>
    </tr>
    <tr>
        <th>Sách chuyên khảo</th>
        <th>Sách giáo khoa</th>
        <th>Sách tham khảo</th>
        <th>Sách hướng dẫn</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
           <td align="center">'.$row['nam'].'</td>
           <td  align="center">'.$row['slsach'].'</td>
           <td  align="center">'.$row['slvietSCK'].'</td>
           <td  align="center">'.$row['slvietSGK'].'</td>
           <td  align="center">'.$row['slvietSTK'].'</td>
           <td  align="center">'.$row['slvietSHD'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang32.xls');
echo $output;
