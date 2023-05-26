<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang17 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);

$output = '<table border = 1>
    <tr>
        <td>Phân loại</td>
        <td>Nam</td>
        <td>Nữ</td>
        <td>Tổng số</td>
        <td>Năm học</td>
    </tr>';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nam = $row['nam'];
        $nu = $row['nu'];
        $tong = $nam + $nu;

        if($row['phanloai']=='trong biên chế')$tam ='Cán bộ được tuyển dụng, sử dụng và quản lý theo các quy định của pháp luật về viên chức (trong biên chế)';
        if($row['phanloai']=='hợp đồng dài hạn')$tam ='Cán bộ hợp đồng có thời hạn 3 năm và hợp đồng không xác định thời hạn (hợp đồng dài hạn)';
        if($row['phanloai']=='hợp đồng ngắn hạn')$tam ='Cán bộ hợp đồng ngắn hạn, bao gồm cả giảng viên thỉnh giảng';

        $output.='
        <tr>
            <td>'.$tam.'</td>
            <td>'.$row['nam'].'</td>
            <td>'.$row['nu'].'</td>
            <td>'.$tong.'</td>
            <td>'.$row['namhoc'].'</td>
        </tr>
        ';
    }
}
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang17.xls');
echo $output;