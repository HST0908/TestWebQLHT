<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    require_once "../connect.php";

    $nambd = $_POST['nambd'];
    $namkt = $_POST['namkt'];
    $sql = "SELECT * FROM bang40 where nam between $nambd and $namkt ORDER BY nam DESC ";
    $result = mysqli_query($conn, $sql);
    $output = "";
    $output = '<table border = 1>
        <tr>
            <th>Năm</th>
            <th>Khối ngành/ Nhóm ngành</th>
            <th>Đầu sách</th>
            <th>Bản sách</th>
        </tr>';
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                $output.='
                <tr>
                    <td align="center">'.$row['nam'].'</td>
                    <td align="center">'.$row['khoinganh'].'</td>
                    <td align="center">'.$row['dausach'].'</td>
                    <td align="center">'.$row['bansach'].'</td>
                </tr>
                ';
            }
        }
    $output .='</table>';

    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename= bang40.xls');
    echo $output;
    ?>
</body>
</html>