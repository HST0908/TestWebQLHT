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
    <title>Bảng 14</title>
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
                        <div class="container_header"><h3 class="heading_title">DANH SÁCH ĐƠN VỊ TRỰC THUỘC </h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tên đơn vị</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="tendonvi" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm thành lập</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="namthanhlap" placeholder="1990" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Lĩnh vực hoạt động</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="linhvuchd" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng nghiên cứu viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slnghiencuu" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ nhân viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slcanbo" placeholder="Chỉ nhập số" id="" required></div>
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

                                    $donvi = $_POST['tendonvi'];
                                    $namtl = $_POST['namthanhlap'];
                                    $linhvuchd = $_POST['linhvuchd'];
                                    $slnghiencuu = $_POST['slnghiencuu'];
                                    $slcanbo = $_POST['slcanbo'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang14 WHERE tendonvi = '$donvi' AND namnhapds = '$year'");

                                    if($donvi==""|| $namtl==""|| $linhvuchd==""|| $slnghiencuu==""|| $slcanbo=="" ||$year==""){
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của '.$donvi.' năm '.$year.' đã tồn tại!");</script>';
                                    } else {
                                        $sql = "INSERT INTO `bang14` (`id`, `tendonvi`, `namthanhlap`, `linhvuchd`, `slnghiencuuvien`, `slnhanvien`, `namnhapds`) VALUES (NULL, '$donvi', '$namtl', '$linhvuchd', '$slnghiencuu', '$slcanbo', '$year')";
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