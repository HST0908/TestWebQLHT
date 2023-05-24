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
    <title>TỔNG KINH PHÍ TỪ CÁC NGUỒN THU CỦA TRƯỜNG</title>
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
                        <div class="container_header"><h3 class="heading_title">TỔNG KINH PHÍ TỪ CÁC NGUỒN THU CỦA TRƯỜNG</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tổng kinh phí từ các nguồn thu</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tongnguonthu" placeholder="Tổng kinh phí" id="" required></div>
                                </div>
                                <!-- tách -->
                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $tongnguonthu = $_POST['tongnguonthu'];
                                
                                    $kn = mysqli_query($conn, "SELECT * FROM bang42 WHERE  nam = '$year'");

                                    if(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
                                    } else {
                                        $sql = "INSERT INTO `bang42` (`id`,`nam`,`tongnguonthu`) VALUES (NULL,'$year','$tongnguonthu')";
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