<?php
$nambd = $_POST['nambd'];
$namkt = $_POST['namkt'];
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "hethongquanly");
$output = '';
$sql = "SELECT * From bang29 where nam between $nambd and $namkt";
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) > 0){

    $output.='<table border = "1">
                <tr>
                <td>Năm</td>
                <td>Doanh thu từ NCKH và chuyển giao công nghệ (triệu VNĐ)</td>
                <td>Tỷ lệ doanh thu từ NCKH và chuyển giao công nghệ so với tổng kinh phí đầu vào của CSGD (%)</td>
                <td>Tỷ số doanh thu từ NCKH và chuyển giao công nghệ trên cán bộ cơ hữu (triệu VNĐ/ người)</td>
                </tr>';
    while($row = mysqli_fetch_assoc($rs)){
        $output.='<tr>
        <td>'.$row['nam'].'</td>
        <td>'.$row['doanhthu'].'</td>
        <td>'.$row['tiledoanhthu'].'</td>
        <td>'.$row['tisodoanhthu'].'</td></tr>';
    }
    $output.='</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename= bang29.xls');
    echo $output;
}