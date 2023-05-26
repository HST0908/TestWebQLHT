<?php
require_once "../connect.php";

$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang14 where namnhapds between $nambd and $namkt ORDER BY namnhapds DESC";
$result = mysqli_query($conn, $sql);

$output = '<table border = 1>
    <tr>
        <td>STT</td>
        <td>Tên đơn vị</td>
        <td>Năm thành lập</td>
        <td>Lĩnh vực hoạt động</td>
        <td>Số lượng nghiên cứu viên</td>
        <td>Số lượng cán bộ/nhân viên</td>
        <td>Năm học</td>
    </tr>';
    $dem = 0;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td>'.$dem++.'</td>
                <td>'.$row['tendonvi'].'</td>
                <td>'.$row['namthanhlap'].'</td>
                <td>'.$row['linhvuchd'].'</td>
                <td>'.$row['slnghiencuuvien'].'</td>
                <td>'.$row['slnhanvien'].'</td>
                <td>'.$row['namnhapds'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang14.xls');
echo $output;