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
    $nh = $_REQUEST['namhoc'];

    $sql = "SELECT * FROM bang25 WHERE namhoc = $nh";

    $sql1 = "SELECT * FROM bang25 WHERE tieuchi = '1 Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ' and namhoc='$nh'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $soluong1 = $row1['soluong'];

    $sql2 = "SELECT * FROM bang25 WHERE tieuchi = '2 Học viên tốt nghiệp cao học' and namhoc='$nh'";
    $result2 = mysqli_query($conn,$sql2);
    $row2  = mysqli_fetch_assoc($result2);
    $soluong2 = $row2['soluong'];

    $sql3 = "SELECT * FROM bang25 WHERE tieuchi = '3 Sinh viên tốt nghiệp đại học chính quy' and namhoc='$nh'";
    $result3 = mysqli_query($conn,$sql3);
    $row3  = mysqli_fetch_assoc($result3);
    $soluong3 = $row3['soluong'];

    $sql4 = "SELECT * FROM bang25 WHERE tieuchi = '4 Sinh viên tốt nghiệp đại học không chính quy' and namhoc='$nh'";
    $result4 = mysqli_query($conn,$sql4);
    $row4  = mysqli_fetch_assoc($result4);
    $soluong4 = $row4['soluong'];

    $sql5 = "SELECT * FROM bang25 WHERE tieuchi = '5 Sinh viên tốt nghiệp cao đẳng chính quy' and namhoc='$nh'";
    $result5 = mysqli_query($conn,$sql5);
    $row5  = mysqli_fetch_assoc($result5);
    $soluong5 = $row5['soluong'];

    $sql6 = "SELECT * FROM bang25 WHERE tieuchi = '6 Sinh viên tốt nghiệp cao đẳng không chính quy' and namhoc='$nh'";
    $result6 = mysqli_query($conn,$sql6);
    $row6  = mysqli_fetch_assoc($result6);
    $soluong6 = $row6['soluong'];

    $sql7 = "SELECT * FROM bang25 WHERE tieuchi = '7 Học sinh tốt nghiệp trung cấp chính quy' and namhoc='$nh'";
    $result7 = mysqli_query($conn,$sql7);
    $row7  = mysqli_fetch_assoc($result7);
    $soluong7 = $row7['soluong'];

    $sql8 = "SELECT * FROM bang25 WHERE tieuchi = '8 Học sinh tốt nghiệp trung cấp không chính quy' and namhoc='$nh'";
    $result8 = mysqli_query($conn,$sql8);
    $row8  = mysqli_fetch_assoc($result8);
    $soluong8 = $row8['soluong'];
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ SỐ LƯỢNG NGƯỜI HỌC TỐT NGHIỆP TRONG 5 NĂM GẦN ĐÂY</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Các tiêu chí</div>
                                    <div class="container_box-input">
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ncs" placeholder="Chỉ nhập số" id="" value="<?=$soluong1?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Học viên tốt nghiệp cao học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="hvcaohoc" placeholder="Chỉ nhập số" id="" value="<?=$soluong2?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sinh viên tốt nghiệp đại học, trong đó:</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svdhcq" placeholder="Chỉ nhập số" id="" value="<?=$soluong3?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ không chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svdhkcq" placeholder="Chỉ nhập số" id="" value="<?=$soluong4?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sinh viên tốt nghiệp cao đẳng, trong đó:</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svcdcq" placeholder="Chỉ nhập số" id="" value="<?=$soluong5?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ không chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svcdkcq" placeholder="Chỉ nhập số" id="" value="<?=$soluong6?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Học sinh tốt nghiệp trung cấp, Trong đó:</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tccq" placeholder="Chỉ nhập số" id="" value="<?=$soluong7?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ không chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tckcq" placeholder="Chỉ nhập số" id="" value="<?=$soluong8?>" required></div>
                                </div>
                                <!-- tách -->
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$nh?>" required></div>
                                </div>
                                
                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php
                                if(isset($_POST['sua'])){

                                    $ncs = $_POST['ncs'];
                                    $hvcaohoc = $_POST['hvcaohoc'];
                                    $svdhcq = $_POST['svdhcq'];
                                    $svdhkcq = $_POST['svdhkcq'];
                                    $svcdcq = $_POST['svcdcq'];
                                    $svcdkcq = $_POST['svcdkcq'];
                                    $tccq = $_POST['tccq'];
                                    $tckcq = $_POST['tckcq'];
                                    $year = $_POST['year'];

                                    if($ncs !="") {
                                    $sql ="UPDATE `bang25` SET `soluong` = '$ncs', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '1 Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ'and namhoc = $nh";
                                    $result = mysqli_query($conn, $sql);
                                    }
                                    if($hvcaohoc !="") {
                                        $sql1 ="UPDATE `bang25` SET `soluong` = '$hvcaohoc', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '2 Học viên tốt nghiệp cao học'and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql1);
                                    }
                                    if($svdhcq !="") {
                                        $sql2 ="UPDATE `bang25` SET `soluong` = '$svdhcq', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '3 Sinh viên tốt nghiệp đại học chính quy'and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql2);
                                    }
                                    if($svdhkcq !="") {
                                        $sql3 ="UPDATE `bang25` SET `soluong` = '$svdhkcq', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '4 Sinh viên tốt nghiệp đại học không chính quy'and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql3);
                                    }
                                    if($svcdcq !="") {
                                        $sql4 ="UPDATE `bang25` SET `soluong` = '$svcdcq', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '5 Sinh viên tốt nghiệp cao đẳng chính quy'and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql4);
                                    }
                                    if($svcdkcq !="") {
                                        $sql5 ="UPDATE `bang25` SET `soluong` = '$svcdkcq', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '6 Sinh viên tốt nghiệp cao đẳng không chính quy'and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql5);
                                    }
                                    if($tccq !="") {
                                        $sql6 ="UPDATE `bang25` SET `soluong` = '$tccq', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '7 Học sinh tốt nghiệp trung cấp chính quy'and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql6);
                                    }
                                    if($tckcq !="") {
                                        $sql7 ="UPDATE `bang25` SET `soluong` = '$tckcq', `namhoc` = '$year' WHERE `bang25`.`tieuchi` = '8 Học sinh tốt nghiệp trung cấp không chính quy'and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql7);
                                        if ($result) {
                                            echo '<script>alert("Sửa thành công!");</script>';
                                            echo '<script>window.location.href = "../formxem/bang25.php"</script>';
                                        }
                                    }
                                }
                            ?>
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