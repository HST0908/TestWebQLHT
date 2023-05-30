<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];
$sql = "SELECT * FROM bang34 where nam between $nambd and $namkt ORDER BY nam DESC ";
$result = mysqli_query($conn, $sql);
$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">Năm</th>
        <th rowspan="2">Số lượng cán bộ cơ hữu có bài báo đăng trên tạp chí</th>
        <th colspan="3">Nơi đăng</th>
    </tr>
    <tr>
        <th>Tạp chí khoa học Quốc tế</th>
        <th>Tạp chí khoa học cấp Nghành trong nước</th>
        <th>Tạp chí / tập san cấp trường</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td align="center">'.$row['nam'].'</td>
                <td align="center">'.$row['slbaibao'].'</td>
                <td align="center">'.$row['sltcQT'].'</td>
                <td align="center">'.$row['sltcTN'].'</td>
                <td align="center">'.$row['sltcT'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang34.xls');
echo $output;
