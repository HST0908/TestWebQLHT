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
    <title>Bảng 16</title>
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ SỐ LƯỢNG CÁN BỘ QUẢN LÝ, NHÂN VIÊN</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân cấp cán bộ, nhân viên</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="phancap">
                                            <option class="category_option--item" value="Cán bộ quản lý">Cán bộ quản lý</option>
                                            <option class="category_option--item" value="Nhân viên">Nhân viên</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cơ hữu/toàn thời gian</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slcohuu" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng hợp đồng/thỉnh giảng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slhopdong" placeholder="Chỉ nhập số" id="" required></div>
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

                                    $phancap = $_POST['phancap'];
                                    $slcohuu = $_POST['slcohuu'];
                                    $slhopdong = $_POST['slhopdong'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang16 WHERE phancap = '$phancap' AND namhoc = '$year'");

                                    if ($slcohuu==""|| $slhopdong==""|| $year=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của '.$phancap.' năm '.$year.' đã tồn tại!");</script>';
                                    } else {
                                        $sql = "INSERT INTO `bang16` (`id`, `phancap`, `slcohuu`, `slhopdong`, `namhoc`) VALUES (NULL, '$phancap', ' $slcohuu ', '$slhopdong', '$year')";
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