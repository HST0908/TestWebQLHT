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
    <title>SỐ LƯỢNG BÁO CÁO KHOA HỌC DO CÁN BỘ CƠ HỮU
CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH BÁO CÁO TẠI CÁC HỘI NGHỊ, HỘI THẢO, ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</title>
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG BÁO CÁO KHOA HỌC DO CÁN BỘ CƠ HỮU
CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH BÁO CÁO TẠI CÁC HỘI NGHỊ, HỘI THẢO, ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại hội thảo</div>
                                    <div class="container_box-input"> </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội thảo quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="hoithaoQT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội thảo trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="hoithaoTN" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội thảo của trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="hoithaoT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $hoithaoQT = $_POST['hoithaoQT'];
                                    $hoithaoTN = $_POST['hoithaoTN'];
                                    $hoithaoT = $_POST['hoithaoT'];
                                    $kt1 = mysqli_query($conn, "SELECT * FROM bang35 WHERE  nam = '$year' and loaihoithao = 'Hội thảo quốc tế' ");
                                    $kt2 = mysqli_query($conn, "SELECT * FROM bang35 WHERE  nam = '$year' and loaihoithao = 'Hội thảo trong nước' ");
                                    $kt3 = mysqli_query($conn, "SELECT * FROM bang35 WHERE  nam = '$year' and loaihoithao = 'Hội thảo của trường' ");

                                    $result = "";
                                    if ($hoithaoQT ==""|| $hoithaoTN==""|| $hoithaoT==""||$year=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }
                                    else{
                                        if(mysqli_num_rows($kt1) > 0){

                                            echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
    
                                        }else {
                                            if($hoithaoQT !="") {
                                                $sql ="INSERT INTO `bang35` (`id`, `loaihoithao`, `soluong`, `nam`) VALUES (NULL, 'Hội thảo quốc tế', '$hoithaoQT', '$year')";
                                                $result = mysqli_query($conn, $sql);
                                            }
                                        }
                                        if(mysqli_num_rows($kt2) > 0){

                                            echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
    
                                        }else {
                                            if($hoithaoTN !="") {
                                                $sql1 ="INSERT INTO `bang35` (`id`, `loaihoithao`, `soluong`, `nam`) VALUES (NULL, 'Hội thảo trong nước', '$hoithaoTN', '$year')";
                                                $result = mysqli_query($conn, $sql1);
                                            }
                                        }
                                        if(mysqli_num_rows($kt3) > 0){

                                            echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
    
                                        }else {
                                            if($hoithaoT!="") {
                                                $sql2 ="INSERT INTO `bang35` (`id`,`loaihoithao`, `soluong`, `nam`) VALUES (NULL, 'Hội thảo của trường','$hoithaoT','$year')";
                                                $result = mysqli_query($conn, $sql2);
                                            }
                                        }
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