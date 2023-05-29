<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang22 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 0;

    $output = '<table border = 1>
    <tr>
        <td>STT</td>
        <td>Đối tượng</td>
        <td>Số thí sinh dự tuyển (người)</td>
        <td>Số trúng tuyển (người)</td>
        <td>Tỉ lệ cạnh tranh</td>
        <td>Số nhập học thực tế (người)</td>
        <td>Điểm tuyển đầu vào (thang điểm 30)</td>
        <td>Điểm trung bình của người học được tuyển</td>
        <td>Số lượng sinh viên quốc tế nhập học (người)</td>
        <td>Năm học</td>
    </tr>';
    $dem = 0;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td>'.$i++.'</td>
                <td>'.$row['doituong'].'</td>
                <td align=center>'.$row['sothisinh'].'</td>
                <td align=center>'.$row['sotrungtuyen'].'</td>
                <td align=center>'.$row['sotrungtuyen']/$row['sothisinh'].'</td>
                <td align=center>'.$row['sonhaphoc'].'</td>
                <td align=center>'.$row['diemdauvao'].'</td>
                <td align=center>'.$row['diemtb'].'</td>
                <td align=center>'.$row['slsinhvienqt'].'</td>
                <td>'.$row['namhoc'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang22.xls');
echo $output;
