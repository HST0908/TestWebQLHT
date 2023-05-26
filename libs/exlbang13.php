<?php
require_once "../connect.php";
$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang13 where namhoc between $nambd and $namkt ORDER BY namhoc DESC ";
$result = mysqli_query($conn, $sql);
$output = "";
$output = '<table border = 1>
    <tr>
        <th  rowspan="2">Khoa viện đào tạo</th>
        <th  colspan="2">Đại học</th>
        <th colspan="2">Sau đại học</th>
        <th colspan="2">Khác(ghi rõ)</th>
        <th rowspan="2">Năm học</th>
    </tr>
    <tr>
        <th>Số CTĐT</th>
        <th>Số sinh viên</th>
        <th>Số CTĐT</th>
        <th>Số người học</th>
        <th>Số CTĐT</th>
        <th>Số người học</th>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td>'.$row['khoa'].'</td>
                <td>'.$row['ctdtdh'].'</td>
                <td>'.$row['svdh'].'</td>
                <td>'.$row['ctdtsaudh'].'</td>
                <td>'.$row['svsaudh'].'</td>
                <td>'.$row['ctdtkhac'].'</td>
                <td>'.$row['svkhac'].'</td>
                <td>'.$row['namhoc'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang13.xls');
echo $output;
?>