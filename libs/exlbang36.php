<?php 
require_once "../connect.php";

    $nambd = $_POST['nambd'];
    $namkt = $_POST['namkt'];
    $sql = "SELECT * FROM bang36 where nam between $nambd and $namkt ORDER BY nam DESC ";
    $result = mysqli_query($conn, $sql);
$output = '<table border = 1>
    <tr>
        <td>Số lượng cán bộ cơ hữu có báo cáo khoa học tại các hội nghị, hội thảo</td>
        <td>Hội thảo quốc tế</td>
        <td>Hội thảo trong nước</td>
        <td>Hội thảo của trường</td>
        <td>Năm học</td>
    </tr>';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output.='
            <tr>
                <td>'.$row['slbaocao'].'</td>
                <td align=center>'.$row['slbcQT'].'</td>
                <td align=center>'.$row['slbcTN'].'</td>
                <td align=center>'.$row['slbcT'].'</td>
                <td align=center>'.$row['nam'].'</td>
            </tr>
            ';
        }
    }
$output .='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename= bang36.xls');
echo $output;
?>