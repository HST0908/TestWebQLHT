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
    <title>SINH VIÊN THAM GIA NGHIÊN CỨU KHOA HỌC</title>
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
                        <div class="container_header"><h3 class="heading_title"> SINH VIÊN THAM GIA NGHIÊN CỨU KHOA HỌC</h3></div>
                        <div class="toolbar">
                            <form name="dulieuex" id="dulieuex" action="../libs/exlbang24.php" method="post" class="gia111">
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
                                        // Nhập dữ liệu vào bang24
                                        $j = $nambd;
                                        mysqli_query($conn, "delete from bang24");
                                        while ($j <= $namkt) {
                                            if ((mysqli_num_rows(mysqli_query($conn, "Select * from bang28 where namhoc = $j")) > 0) & (mysqli_num_rows(mysqli_query($conn, "Select * from bang38 where nam = $j")) > 0)) {

                                                $r1 = mysqli_fetch_array(mysqli_query($conn, "select namhoc, sum(soluong) from bang28 group by namhoc having namhoc=$j"));

                                                $kq3 = mysqli_query($conn, "insert into bang24 values(null,'Tổng số Học viên',$r1[1],$r1[0])");
                                                $r2 = mysqli_fetch_array(mysqli_query($conn, "select nam, sum(soluong) from bang38 group by nam having nam=$j"));

                                                $kq13 = mysqli_query($conn, "insert into bang24 values(null,'Tổng số NCKH',$r2[1],$r2[0])");

                                                $tl = round(($r2[1] / $r1[1]), 5);
                                                mysqli_query($conn, "insert into bang24 values(null,'Tỉ lệ',$tl,$j)");
                                            }
                                            $j++;
                                        }
                                        // xem 5 năm tính từ hiện tại trở về trước
                                        $sql = "SELECT * FROM bang24 where namhoc between $nambd and $namkt";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $sql = "select tieuchi,";
                                            $i = $nambd;
                                            while ($i < $namkt) {
                                                $sql = $sql . " sum(if(namhoc=$i,round(giatri,0),0)) as 'năm $i',";
                                                $i++;
                                            }
                                            $sql = $sql . " sum(if(namhoc=$i,round(giatri,0),0))as 'năm $i'";
                                            $sql = $sql . " FROM bang24 where namhoc between $nambd and $namkt GROUP BY tieuchi desc";

                                            echo "<tr class='bangxem--title'>";
                                            echo "<td><strong> Đơn vị </strong></td>";
                                            $j = $nambd;
                                            while ($j <= $namkt) {
                                                echo " <td align = center><strong> Năm $j </strong></td>";

                                                $j++;
                                             }
                                             echo " </tr>";
                                             $kq = mysqli_query($conn, $sql);
                                             while ($row = mysqli_fetch_array($kq)) {
                                                echo "<tr class='bangxem--title'>";
                                                echo "<td align='center'>" . $row['tieuchi'] . "</td>";
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
                                        
                                        include "../function.php";
                                        DateTime();
                                        $day = date("Y");
                                        $nambd = $day - 5;
                                        $namkt = $nambd + 5;
                                        // Nhập dữ liệu vào bang24
                                        $j = $nambd;
                                        mysqli_query($conn, "delete from bang24");
                                        while ($j <= $namkt) {
                                            if ((mysqli_num_rows(mysqli_query($conn, "Select * from bang28 where namhoc = $j")) > 0) & (mysqli_num_rows(mysqli_query($conn, "Select * from bang38 where nam = $j")) > 0)) {

                                                $r1 = mysqli_fetch_array(mysqli_query($conn, "select namhoc, sum(soluong) from bang28 group by namhoc having namhoc=$j"));

                                                $kq3 = mysqli_query($conn, "insert into bang24 values(null,'Tổng số Học viên',$r1[1],$r1[0])");
                                                $r2 = mysqli_fetch_array(mysqli_query($conn, "select nam, sum(soluong) from bang38 group by nam having nam=$j"));

                                                $kq13 = mysqli_query($conn, "insert into bang24 values(null,'Tổng số NCKH',$r2[1],$r2[0])");

                                                $tl = round(($r2[1] / $r1[1]), 5);
                                                mysqli_query($conn, "insert into bang24 values(null,'Tỉ lệ',$tl,$j)");
                                            }
                                            $j++;
                                        }
                                        // xem 5 năm tính từ hiện tại trở về trước
                                        $sql = "SELECT * FROM bang24 where namhoc between $nambd and $namkt";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $sql = "select tieuchi,";
                                            $i = $nambd;
                                            while ($i < $namkt) {
                                                $sql = $sql . " sum(if(namhoc=$i,round(giatri,0),0)) as 'năm $i',";
                                                $i++;
                                            }
                                            $sql = $sql . " sum(if(namhoc=$i,round(giatri,0),0))as 'năm $i'";
                                            $sql = $sql . " FROM bang24 where namhoc between $nambd and $namkt GROUP BY tieuchi desc";

                                            echo "<tr class='bangxem--title'>";
                                            echo "<td><strong> Đơn vị </strong></td>";
                                            $j = $nambd;
                                            while ($j <= $namkt) {
                                                echo " <td align = center><strong> Năm $j </strong></td>";

                                                $j++;
                                            }
                                            echo " </tr>";
                                            $kq = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($kq)) {

                                                echo "<tr class='bangxem--title'>";
                                                echo "<td align='center'>" . $row['tieuchi'] . "</td>";
                                                //echo "<td align='center'>$row[1]</td>";
                                                $i = 1;
                                                for ($j = $nambd; $j <= $namkt; $j++) {
                                                    echo "<td align='center'><b>$row[$i]</b></td>";
                                                    $i++;
                                                }

                                                echo "</tr>	";
                                            }
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