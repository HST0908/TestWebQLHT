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
    $sql = "SELECT * FROM bang43 where nam between $nambd and $namkt ORDER BY nam DESC ";
    $result = mysqli_query($conn, $sql);
    $output = "";
    $output = '<table border = 1>
        <tr>
            <th>STT</th>
            <th>Năm</th>
            <th>Tổng kinh phí (VNĐ)</th>
        </tr>';
        if (mysqli_num_rows($result) > 0) {
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $output.='
                <tr>
                    <td align="center">'.$i++.'</td>
                    <td align="center">'.$row['nam'].'</td>
                    <td align="center">'.number_format($row['tongthuhocphi'], 0, '.','.').'</td>
                </tr>
                ';
            }
        }
    $output .='</table>';

    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename= bang43.xls');
    echo $output;
    ?>
</body>
</html>