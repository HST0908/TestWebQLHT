<?php
require_once "../connect.php";
$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];

$sql = "SELECT * FROM bang20 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
$result = mysqli_query($conn, $sql);
$i = 0;

$output = "";
$output = '<table border = 1>
    <tr>
        <th rowspan="2">STT</th>
        <th rowspan="2">Tần suất sử dụng</th>
        <th colspan="2">Tỷ lệ (%) giảng viên cơ hữu sử dụng ngoại ngữ và tin học</th>
        <th rowspan="2">Năm học</th>
    </tr>
    <tr>
        <th>Ngoại ngữ</th>
        <th>Tin học</th>
    </tr>';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        if($row['tansuatsd']=="Luôn sử dụng")
            $hocvi = "Luôn sử dụng (trên 80% thời gian của công việc)";
        if($row['tansuatsd']=="Thường sử dụng")
            $hocvi = "Thường sử dụng (trên 60-80% thời gian của công việc)";
        if($row['tansuatsd']=="Đôi khi sử dụng")
            $hocvi = "Đôi khi sử dụng (trên 40-60% thời gian của công việc)";
        if($row['tansuatsd']=="Ít khi sử dụng")
            $hocvi = "Ít khi sử dụng (trên 20-40% thời gian của công việc)";
        if($row['tansuatsd']=="Hiếm khi sử dụng")
            $hocvi = "Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)";
        $output.='
        <tr>
            <td>'.$i++.'</td>
            <td align="center">'.$hocvi.'</td>
            <td  align="center">'.$row['gvngoaingu'].'</td>
            <td  align="center">'.$row['gvtinhoc'].'</td>
            <td  align="center">'.$row['namhoc'].'</td>
        </tr>';
    }
}
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang20.xls');
echo $output;
