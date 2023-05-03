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
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ncs" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Học viên tốt nghiệp cao học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="hvcaohoc" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sinh viên tốt nghiệp đại học, trong đó:</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svdhcq" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ không chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svdhkcq" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sinh viên tốt nghiệp cao đẳng, trong đó:</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svcdcq" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ không chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svcdkcq" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Học sinh tốt nghiệp trung cấp, Trong đó:</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tccq" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ không chính quy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tckcq" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>
                                
                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $ncs = $_POST['ncs'];
                                    $hvcaohoc = $_POST['hvcaohoc'];
                                    $svdhcq = $_POST['svdhcq'];
                                    $svdhkcq = $_POST['svdhkcq'];
                                    $svcdcq = $_POST['svcdcq'];
                                    $svcdkcq = $_POST['svcdkcq'];
                                    $tccq = $_POST['tccq'];
                                    $tckcq = $_POST['tckcq'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang25 WHERE namhoc = '$year'");
        
                                    if(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
                                    }else{
        
                                        if ($ncs ==""|| $hvcaohoc==""|| $svdhcq==""||$svdhkcq==""||$svcdcq ==""|| $svcdkcq==""|| $tccq==""||$tckcq==""||$year=="") {
                                            echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                        }else{
                                            if($ncs !="") {
                                                $sql ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ', '$ncs', '$year')";
                                                $result = mysqli_query($conn, $sql);
                                            }
                                            if($hvcaohoc !="") {
                                                $sql1 ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Học viên tốt nghiệp cao học', '$hvcaohoc', '$year')";
                                                $result = mysqli_query($conn, $sql1);
                                            }
                                            if($svdhcq !="") {
                                                $sql2 ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Sinh viên tốt nghiệp đại học chính quy', '$svdhcq', '$year')";
                                                $result = mysqli_query($conn, $sql2);
                                            }
                                            if($svdhkcq !="") {
                                                $sql3 ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Sinh viên tốt nghiệp đại học không chính quy', '$svdhkcq', '$year')";
                                                $result = mysqli_query($conn, $sql3);
                                            }
                                            if($svcdcq !="") {
                                                $sql4 ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Sinh viên tốt nghiệp cao đẳng chính quy', '$svcdcq', '$year')";
                                                $result = mysqli_query($conn, $sql4);
                                            }
                                            if($svcdkcq !="") {
                                                $sql5 ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Sinh viên tốt nghiệp cao đẳng không chính quy', '$svcdkcq', '$year')";
                                                $result = mysqli_query($conn, $sql5);
                                            }
                                            if($tccq !="") {
                                                $sql6 ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Học sinh tốt nghiệp trung cấp chính quy', '$tccq', '$year')";
                                                $result = mysqli_query($conn, $sql6);
                                            }
                                            if($tckcq !="") {
                                                $sql7 ="INSERT INTO `bang25` (`id`, `tieuchi`, `soluong`, `namhoc`) VALUES (NULL, 'Học sinh tốt nghiệp trung cấp không chính quy', '$tckcq', '$year')";
                                                $result = mysqli_query($conn, $sql7);}
                                            if($result){
                                                echo '<script>alert("Nhập thành công!");</script>';
                                                echo '<script>window.location.href = "../public/homepage.php"</script>';
                                            }
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