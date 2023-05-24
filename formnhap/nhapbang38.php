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
    <title>NGHIÊN CỨU KHOA HỌC CỦA SINH VIÊN</title>
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
                        <div class="container_header"><h3 class="heading_title">NGHIÊN CỨU KHOA HỌC CỦA SINH VIÊN</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Thành tích nghiên cứu khoa học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                    <!-- tách -->
                                    <div class="container_box-content">
                                    <div class="container_box-content-title">Số giải thưởng nghiên cứu khoa học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slgiaithuong" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số bài báo được đăng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slbaidangbao" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên tham gia viết đề tài cấp Nhà nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slsvvietNN" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên tham gia viết đề tài cấp Bộ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slsvvietB" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên tham gia viết đề tài cấp Trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slsvvietT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng đề tài cấp Nhà nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="sldetaiNN" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng đề tài cấp Bộ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="sldetaiB" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng đề tài cấp Trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="sldetaiT" placeholder="Chỉ nhập số" id="" required></div>
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
                                    $slgiaithuong = $_POST['slgiaithuong'];
                                    $slbaidangbao = $_POST['slbaidangbao'];
                                    $slsvvietNN = $_POST['slsvvietNN'];
                                    $slsvvietB = $_POST['slsvvietB'];
                                    $slsvvietT= $_POST['slsvvietT'];
                                    $sldetaiNN = $_POST['sldetaiNN'];
                                    $sldetaiB = $_POST['sldetaiB'];
                                    $sldetaiT = $_POST['sldetaiT'];
                                    $kt = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số giải thưởng nghiên cứu' ");
                                    $kt1 = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số bài báo được đăng, công trình được công bố' ");
                                    $kt2 = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số lượng sinh viên tham gia viết đề tài cấp Nhà nước' ");
                                    $kt3 = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số lượng sinh viên tham gia viết đề tài cấp Bộ*' ");
                                    $kt4 = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số lượng sinh viên tham gia viết đề tài cấp Trường' ");
                                    $kt5 = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số lượng đề tài cấp Nhà nước' ");
                                    $kt6 = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số lượng đề tài cấp Bộ' ");
                                    $kt7 = mysqli_query($conn, "SELECT * FROM bang38 WHERE  nam = '$year' and thanhtich = 'Số lượng đề tài cấp Trường' ");

                                    if($slgiaithuong !="") {
                                        if(mysqli_num_rows($kt) > 0){
                                            echo '<script>alert("Dữ liệu Số giải thưởng nghiên cứu năm '.$year.' đã tồn tại");</script>';
                                        }
                                        $sql ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số giải thưởng nghiên cứu', '$slgiaithuong', '$year')";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                    if($slbaidangbao !="") {
                                        if(mysqli_num_rows($kt1) > 0){
                                            echo '<script>alert("Số bài báo được đăng, công trình được công bố năm '.$year.' đã tồn tại");</script>';
                                        }
                                        $sql1 ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số bài báo được đăng, công trình được công bố ', '$slbaidangbao', '$year')";
                                        $result = mysqli_query($conn, $sql1);
                                    }
                                    if($slsvvietNN !="") {
                                        if(mysqli_num_rows($kt2) > 0){
                                            echo '<script>alert("Số lượng sinh viên tham gia viết đề tài cấp Nhà nước năm '.$year.' đã tồn tại");</script>';
                                        }
                                        $sql2 ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số lượng sinh viên tham gia viết đề tài cấp Nhà nước', '$slsvvietNN', '$year')";
                                        $result = mysqli_query($conn, $sql2);
                                    }
                                    
                                    if($slsvvietB !="") {
                                        if(mysqli_num_rows($kt3) > 0){
                                            echo '<script>alert("Dữ liệu Số lượng sinh viên tham gia viết đề tài cấp Bộ* năm '.$year.' đã tồn tại");</script>';
                                        }
                                        $sql3 ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số lượng sinh viên tham gia viết đề tài cấp Bộ*', '$slsvvietB', '$year')";
                                        $result = mysqli_query($conn, $sql3);
                                    }
    
                                    if($slsvvietT!="") {
                                        if(mysqli_num_rows($kt4) > 0){
                                            echo '<script>alert("Dữ liệu Số lượng sinh viên tham gia viết đề tài cấp Trường năm '.$year.' đã tồn tại");</script>';
                                        }
                                        $sql4 ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số lượng sinh viên tham gia viết đề tài cấp Trường', '$slsvvietT', '$year')";
                                        $result = mysqli_query($conn, $sql4);
                                    }
                                    if($sldetaiNN!="") {
                                        if(mysqli_num_rows($kt5) > 0){
                                            echo '<script>alert("Dữ liệu Số lượng đề tài cấp Nhà nước năm '.$year.' đã tồn tại");</script>';
                                        }
                                        $sql5 ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số lượng đề tài cấp Nhà nước ', '$sldetaiNN', '$year')";
                                        $result = mysqli_query($conn, $sql5);
                                    }
                                    if($sldetaiB!="") {
                                        if(mysqli_num_rows($kt6) > 0){
                                            echo '<script>alert("Dữ liệu Số lượng đề tài cấp Bộ năm '.$year.' đã tồn tại");</script>';
                                        }
                                        $sql6 ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số lượng đề tài cấp Bộ', '$sldetaiB', '$year')";
                                        $result = mysqli_query($conn, $sql6);
                                    }
                                    if($sldetaiT!="") {
                                        if(mysqli_num_rows($kt7) > 0){
                                            echo '<script>alert("Dữ liệu Số lượng đề tài cấp Trường năm '.$year.' đã tồn tại");</script>';
                                            return;
                                        }
                                        $sql7 ="INSERT INTO `bang38` (`id`, `thanhtich`, `soluong`, `nam`) VALUES (NULL, 'Số lượng đề tài cấp Trường', '$sldetaiT', '$year')";
                                        $result = mysqli_query($conn, $sql7);
                                    }
                                    if($result){
                                        echo '<script>alert("Nhập thành công!");</script>';
                                        echo '<script>window.location.href = "../public/homepage.php"</script>';
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