<?php 
    include_once "../connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <LINK REL="SHORTCUT ICON"  HREF="../assets/img/logo.jpg">
    <title>THỐNG KÊ SỐ LƯỢNG NGƯỜI HỌC TỐT NGHIỆP TRONG 5 NĂM GẦN ĐÂY</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    // phần header
    include_once "../public/header.php";
    ?>
    <div class="contain grid lager wide">
        <div class="row">
            <!-- phần menu -->
            <?php include_once "../public/menu.php"; ?>
            <!-- phần thân -->
            <div class="col l-10 m-12 c-12 app__content" >
                <div class="row">
                    <div class="container">
                        <div class="container_header"><h3 class="heading_title"> THỐNG KÊ SỐ LƯỢNG NGƯỜI HỌC TỐT NGHIỆP TRONG 5 NĂM GẦN ĐÂY</h3></div>
                        <div class="toolbar">
                            <form name="dulieuex" id="dulieuex" action="../libs/exlbang25.php" method="post" class="gia111">
                                <input type="number" id="input1" value="" class="input_nam-in" name="nambd" placeholder="Nhập năm bắt đầu" required>
                                <input type="number" id="input2" value="" class="input_nam-in" name="namkt" placeholder="Nhập năm kết thúc" required>
                                <button class="btn btn_ex" name="ex"><span class="text">Xuất Excel</span><span class="icon"><i class="fa-solid fa-file-export"></i></span></a>
                                <button class="btn btn_xem" name="xem" id="xem" onclick="thaydoi()">xem</button>
                            </form>
                        </div>
                        <div class="container_box">
                            <table class="bang_xem" border="0">
                                <tbody class="than_bang_xem">
                                    <?php
                                    if(isset($_POST['xem'])){
                                        $nambd = $_POST['nambd'];
                                        $namkt = $_POST['namkt'];
                                        $sql = "SELECT * FROM bang25 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $sql = "select tieuchi,";
                                            $i = $nambd;
                                            while ($i < $namkt) {
                                                $sql = $sql . " sum(if(namhoc=$i,soluong,0)) as 'năm $i',";
                                                $i++;
                                            }
                                            $sql = $sql . " sum(if(namhoc=$i,soluong,0))as 'năm $i'";
                                            $sql = $sql . " FROM bang25 where namhoc between $nambd and $namkt GROUP BY tieuchi ASC";
                                            echo '<tr class="bangxem--title">';
                                            echo "<td><strong>Các tiêu chí </strong></td>";
                                            $j = $nambd;
                                            while ($j <= $namkt) {
                                                echo " <td align=center><strong>Năm $j</strong></td>";

                                                $j++;
                                            }
                                            echo " </tr>";
                                            $kq = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($kq)) {

                                                echo '<tr class="bangxem--title">';
                                                if($row['tieuchi'] == "1 Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ"){
                                                    $tieuchi = "Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ";
                                                }
                                                if($row['tieuchi'] == "2 Học viên tốt nghiệp cao học"){
                                                    $tieuchi = "Học viên tốt nghiệp cao học";
                                                }
                                                if($row['tieuchi'] == "3 Sinh viên tốt nghiệp đại học chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp đại học chính quy";
                                                }
                                                if($row['tieuchi'] == "4 Sinh viên tốt nghiệp đại học không chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp đại học không chính quy";
                                                }
                                                if($row['tieuchi'] == "5 Sinh viên tốt nghiệp cao đẳng chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp cao đẳng chính quy";
                                                }
                                                if($row['tieuchi'] == "6 Sinh viên tốt nghiệp cao đẳng không chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp cao đẳng không chính quy";
                                                }
                                                if($row['tieuchi'] == "7 Học sinh tốt nghiệp trung cấp chính quy"){
                                                    $tieuchi = "Học sinh tốt nghiệp trung cấp chính quy";
                                                }
                                                if($row['tieuchi'] == "8 Học sinh tốt nghiệp trung cấp không chính quy"){
                                                    $tieuchi = "Học sinh tốt nghiệp trung cấp không chính quy";
                                                }
                                                echo "<td>" . $tieuchi . "</td>";
                                                //echo "<td align='center'>$row[1]</td>";
                                                $i = 1;
                                                for ($j = $nambd; $j <= $namkt; $j++) {
                                                    echo "<td align='center'><b>$row[$i]</b></td>";
                                                    $i++;
                                                }

                                                echo "</tr>	";
                                            }
                                        }
                                    }else{
                                        
                                        echo'<tr class="bangxem--title" align=center>';
                                            echo'<td class="bangxem-header">Các tiêu chí</td>';
                                            echo'<td class="bangxem-header">Số lượng</td>';
                                            echo'<td class="bangxem-header">Năm học</td>';
                                            echo'<td class="bangxem-header">Thao tác</td>';
                                        echo'</tr>';
                                        $sql = "SELECT * FROM bang25 order by namhoc ASC";
                                        $rs = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($rs)){
                                            echo '<tr class="bangxem--title">';
                                            
                                                if($row['tieuchi'] == "1 Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ"){
                                                    $tieuchi = "Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ";
                                                }
                                                if($row['tieuchi'] == "2 Học viên tốt nghiệp cao học"){
                                                    $tieuchi = "Học viên tốt nghiệp cao học";
                                                }
                                                if($row['tieuchi'] == "3 Sinh viên tốt nghiệp đại học chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp đại học chính quy";
                                                }
                                                if($row['tieuchi'] == "4 Sinh viên tốt nghiệp đại học không chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp đại học không chính quy";
                                                }
                                                if($row['tieuchi'] == "5 Sinh viên tốt nghiệp cao đẳng chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp cao đẳng chính quy";
                                                }
                                                if($row['tieuchi'] == "6 Sinh viên tốt nghiệp cao đẳng không chính quy"){
                                                    $tieuchi = "Sinh viên tốt nghiệp cao đẳng không chính quy";
                                                }
                                                if($row['tieuchi'] == "7 Học sinh tốt nghiệp trung cấp chính quy"){
                                                    $tieuchi = "Học sinh tốt nghiệp trung cấp chính quy";
                                                }
                                                if($row['tieuchi'] == "8 Học sinh tốt nghiệp trung cấp không chính quy"){
                                                    $tieuchi = "Học sinh tốt nghiệp trung cấp không chính quy";
                                                }
                                                echo '<td>'.$tieuchi.'</td>';
                                                echo '<td align=center>'.$row['soluong'].'</td>';
                                                echo '<td align=center>'.$row['namhoc'].'</td>';
                                                echo '<td align=center><label class="btnsua"><a href="../formsua/suabang25.php?namhoc='.$row['namhoc'].'">
                                                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/nnbhwnej.json"
                                                        trigger="hover"
                                                        colors="primary:#eeca66"
                                                        style="width:35px;height:35px">
                                                    </lord-icon></a></label>
                                                    <label class="btnxoa"><a href="../formxoa/xoabang25.php?id='.$row['id'].'">
                                                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                    <lord-icon
                                                    src="https://cdn.lordicon.com/exkbusmy.json"
                                                    trigger="hover"
                                                    colors="outline:#121331,primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef"
                                                    style="width:35px;height:35px">
                                                </lord-icon></label>
                                                </a>
                                                </td>';
                                                echo '</tr>';
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="../assets/js/app.js"></script>
</html>