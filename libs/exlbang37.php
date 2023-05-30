<?php 
require_once "../connect.php";
include '../function.php';

    $nambd = $_POST['nambd'];
    $namkt = $_POST['namkt'];
    $sql = "SELECT * FROM bang37 where nam between $nambd and $namkt ORDER BY nam DESC ";
    $result = mysqli_query($conn, $sql);
$output = '<table border = 1>
    <tr>
        <td>STT</td>
        <td>Năm</td>
        <td>Số bằng phát minh, sáng chế được cấp (ghi rõ nơi cấp, thời gian cấp, người được cấp)</td>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $tg = $row['thoigiancap'];
            $date=date_create("$tg");
            $output.='
            <tr>
            <td>'.$i++.'</td>
            <td align=center>'.$row['nam'].'</td>
            <td>'.'Số bằng phát minh: <strong>'.$row['slbang'].'</strong><br>Nơi cấp: <strong>'.$row['noicap'].'</strong><br>Thời gian cấp: <strong>'.date_format($date,"d/m/Y").'</strong><br>Người được cấp: <strong>'.$row['nguoiduoccap'].'</strong></td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang37.xls');
echo $output;
?>