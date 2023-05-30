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
    <title>SỐ BẰNG PHÁT MINH, SÁNG CHẾ ĐƯỢC CẤP ĐƯỢC CẤP TRONG 5 NĂM GẦN ĐÂY</title>
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
                        <div class="container_header"><h3 class="heading_title">SỐ BẰNG PHÁT MINH, SÁNG CHẾ ĐƯỢC CẤP ĐƯỢC CẤP TRONG 5 NĂM GẦN ĐÂY</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng bằng được cấp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slbang" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Nơi cấp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="noicap" placeholder="" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Thời gian cấp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="date" name="thoigiancap" placeholder="vd: 12_12_2023" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Người được cấp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="nguoiduoccap" placeholder="Họ tên" id="" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $slbang = $_POST['slbang'];
                                    $noicap = $_POST['noicap'];
                                    $thoigiancap = $_POST['thoigiancap'];
                                    $nguoiduoccap = $_POST['nguoiduoccap'];
                                
                                    $kn = mysqli_query($conn, "SELECT * FROM bang37 WHERE  nam = '$year'");

                                    if(mysqli_num_rows($kn) > 0){

                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';

                                    } else {
                                        $sql = "INSERT INTO `bang37` (`id`,`nam`, `slbang`, `noicap`, `thoigiancap`, `nguoiduoccap`) VALUES (NULL,'$year', '$slbang', '$noicap', '$thoigiancap', '$nguoiduoccap')";
                                        $result = mysqli_query($conn, $sql);
                                            
                                        if($result){
                                            echo '<script>alert("Nhập thành công!");</script>';
                                            echo '<script>window.location.href = "../public/homepage.php"</script>';
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