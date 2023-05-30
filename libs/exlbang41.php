<?php
require_once "../connect.php";
$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang41 where nam between $nambd and $namkt ORDER BY nam DESC ";
$result = mysqli_query($conn, $sql);
$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">STT</th>
        <th rowspan="2">Tên phòng/ giảng đường/ lab</th>
        <th rowspan="2">Số lượng</th>
        <th rowspan="2">Danh mục trang thiết bị chính(*)</th>
        <th rowspan="2">Đối tượng sử dụng</th>
        <th rowspan="2">Diện tích xây dựng(m<sup>2</sup>)</th>
        <th colspan="3">Hình thức sở hữu</th>
        <th rowspan="2">Năm</th>
    </tr>
    <tr>
        <th>Sở hữu</th>
        <th>Liên kết</th>
        <th>Thuê</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td align="center">'.$i++.'</td>
                <td  align="center">'.$row['tenphong'].'</td>
                <td  align="center">'.$row['soluong'].'</td>
                <td  align="center">'.$row['thietbi'].'</td>
                <td  align="center">'.$row['doituongsd'].'</td>
                <td  align="center">'.$row['dientich'].'</td>
                <td  align="center">'.$row['sohuu'].'</td>
                <td  align="center">'.$row['lienket'].'</td>
                <td  align="center">'.$row['thue'].'</td>
                <td  align="center">'.$row['nam'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang41.xls');
echo $output;
?>