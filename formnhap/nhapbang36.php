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
    <title>SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH CÓ BÁO CÁO KHOA HỌC TẠI CÁC HỘI NGHỊ, HỘI THẢO ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</title>
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH CÓ BÁO CÁO KHOA HỌC TẠI CÁC HỘI NGHỊ, HỘI THẢO ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ cơ hữu có báo cáo đăng trên tạp chí</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="slbaocao">
                                            <option class="category_option--item" value="Từ 1 đến 5 báo cáo">Từ 1 đến 5 báo cáo</option>
                                            <option class="category_option--item" value="Từ 6 đến 10 báo cáo">Từ 6 đến 10 báo cáo</option>
                                            <option class="category_option--item" value="Từ 11 đến 15 báo cáo">Từ 11 đến 15 báo cáo</option>
                                            <option class="category_option--item" value="Trên 15 báo cáo">Trên 15 báo cáo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ có báo cáo khoa học tại hội thảo Quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slbcQT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ có báo cáo khoa học tại hội thảo trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slbcTN" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ có báo cáo khoa học tại hội thảo Trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slbcT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $slbaocao = $_POST['slbaocao'];
                                    $slbcQT = $_POST['slbcQT'];
                                    $slbcTN = $_POST['slbcTN'];
                                    $slbcT = $_POST['slbcT'];
                                
                                    $kn = mysqli_query($conn, "SELECT * FROM bang36 WHERE  nam = '$year' and slbaocao = '$slbaocao'");

                                    if($slbaocao==""|| $slbcQT==""|| $slbcTN==""|| $slbcT==""){
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){

                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';

                                    } else {
                                        $sql = "INSERT INTO `bang36` (`id`, `nam`, `slbaocao`, `slbcQT`, `slbcTN`, `slbcT`) VALUES (NULL, '$year', '$slbaocao', '$slbcQT', '$slbcTN', '$slbcT')";
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