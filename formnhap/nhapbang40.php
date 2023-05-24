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
    <title>TỔNG SỐ ĐẦU SÁCH TRONG THƯ VIỆN CỦA NHÀ TRƯỜNG</title>
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
                        <div class="container_header"><h3 class="heading_title">TỔNG SỐ ĐẦU SÁCH TRONG THƯ VIỆN CỦA NHÀ TRƯỜNG</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Khối ngành</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="khoinganh">
                                            <option class="category_option--item" value="Khối ngành I">Khối ngành I</option>
                                            <option class="category_option--item" value="Khối ngành II">Khối ngành II</option>
                                            <option class="category_option--item" value="Khối ngành III">Khối ngành III</option>
                                            <option class="category_option--item" value="Khối ngành IV">Khối ngành IV</option>
                                            <option class="category_option--item" value="Khối ngành V">Khối ngành V</option>
                                            <option class="category_option--item" value="Khối ngành VI">Khối ngành VI</option>
                                            <option class="category_option--item" value="Khối ngành VII">Khối ngành VII</option>
                                            <option class="category_option--item" value="Các môn chung">Các môn chung</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Đầu sách</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dausach" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Bản sách</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="bansach" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $khoinganh = $_POST['khoinganh'];
                                    $dausach = $_POST['dausach'];
                                    $bansach = $_POST['bansach'];
                                
                                    $kn = mysqli_query($conn, "SELECT * FROM bang40 WHERE  nam = '$year' AND khoinganh = '$khoinganh'");

                                    if(mysqli_num_rows($kn) > 0){

                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';

                                    } else {
                                        $sql = "INSERT INTO `bang40` (`id`,`nam`, `khoinganh`, `dausach`, `bansach`) VALUES (NULL,'$year', '$khoinganh', '$dausach', '$bansach')";
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