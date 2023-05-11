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
    <title>SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA VIẾT BÀI ĐĂNG TẠP CHÍ</title>
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA VIẾT BÀI ĐĂNG TẠP CHÍ</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ cơ hữu có bài báo đăng trên tạp chí</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="slbaibao">
                                            <option class="category_option--item" value="Từ 1 đến 5 bài báo">Từ 1 đến 5 bài báo</option>
                                            <option class="category_option--item" value="Từ 6 đến 10 bài báo">Từ 6 đến 10 bài báo</option>
                                            <option class="category_option--item" value="Từ 11 đến 15 bào báo">Từ 11 đến 15 bào báo</option>
                                            <option class="category_option--item" value="Trên 15 bài báo">Trên 15 bài báo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia viết tạp chí khoa học Quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="sltcQT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia viết tạp chí khoa học cấp Nghành trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="sltcTN" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia viết tạp chí / tập san của trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="sltcT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $slbaibao = $_POST['slbaibao'];
                                    $sltcQT = $_POST['sltcQT'];
                                    $sltcTN = $_POST['sltcTN'];
                                    $sltcT = $_POST['sltcT'];
                                
                                    $kn = mysqli_query($conn, "SELECT * FROM bang34 WHERE  nam = '$year'");

                                    if($slbaibao==""|| $sltcQT==""|| $sltcTN==""|| $sltcT==""){
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){

                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';

                                    } else {
                                        $sql = "INSERT INTO `bang34` (`id`, `nam`, `slbaibao`, `sltcQT`, `sltcTN`, `sltcT`) VALUES (NULL, '$year', '$slbaibao', '$sltcQT', '$sltcTN', '$sltcT')";
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