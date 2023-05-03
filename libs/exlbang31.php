<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>

    <?php
    $nambd = $_POST['nambd'];
    $namkt = $_POST['namkt'];
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "hethongquanly");
	$output = '';
   
    $sql1 = "drop table bangmoi";
    $kq1 = mysqli_query($con, $sql1);
    $sql2 = "create table bangmoi(loaisach char (100))";
    $kq2 = mysqli_query($con, $sql2);
    for ($j = $nambd; $j <= $namkt; $j++) {
        $nam = "Nam" . $j;
        $sql3 = "ALTER TABLE bangmoi ADD $nam char(4)";
        $kq3 = mysqli_query($con, $sql3);
    }
 
    $sql = "select loaisach,";
    $i = $nambd;
    while ($i < $namkt) {
        $sql = $sql . " sum(if(nam=$i,soluong,0)) as 'năm $i',";
        $i++;
    }
    $sql = $sql . " sum(if(nam=$i,soluong,0))as 'năm $i'";
    $sql = $sql . " FROM bang31 where nam between $nambd and $namkt GROUP BY loaisach ASC";
    $j = $nambd;
    $kq = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($kq)) {
        $tam = $row[0]; 
        // $sql4 = "insert into bangmoi value ('$tam')";
        // $kq4 = mysqli_query($con, $sql4);
		$sql5="insert into bangmoi value ('$tam'" ;
		for($j=$nambd;$j<=$namkt;$j++)
		{
		 $sql5=$sql5.",Null";
		}
		$sql5=$sql5.")" ;
		$kq5=mysqli_query($con,$sql5);
        $i = 1;
        for ($j = $nambd; $j <= $namkt; $j++) {
            $tam1 = $row[$i];
            $nam = "Nam" . $j;
            $sql2 = "update bangmoi set $nam=$tam1 where loaisach = '$tam'";
            $kq2 = mysqli_query($con, $sql2);
            $i++;
        }
    }

	$sqlout = "Select * from bangmoi ";
	$rsout = mysqli_query($con,$sqlout);
	if(mysqli_num_rows($rsout) > 0){
		$output.='
        <h5> SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA VIẾT SÁCH </h5>
        <table border="1">
		<tr>
		<td> Thành tích </td>';
		for($k = $nambd;$k<=$namkt;$k++){
			$output = $output.='<td>'.$k.'</td>';
		}
		$output = $output.='</tr>';

        $tongnam = $namkt - $nambd + 1;
		while($row1 = mysqli_fetch_array($rsout)){
			$output.='<tr>';
            for($dem = 0; $dem <= $tongnam; $dem++){
                $output = $output.='<td>'.$row1[$dem].'</td>';
                $output++;
            }
		}
		$output.='</table>';
	}
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=bang31.xls');
    echo $output;
    ?>
</body>

</html>