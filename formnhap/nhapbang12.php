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
    <title>Quản lý</title>
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
                        <div class="container_header"><h3 class="heading_title"> DANH SÁCH CÁN BỘ LÃNH ĐẠO CHỦ CHỐT CỦA CSGD</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                        <div class="container_box-content-title">Các đơn vị (bộ phận)</div>
                                        <div class="container_box-input"><input class="content_input--item--input" type="text" name="txtdonvi" id="" required></div>
                                    </div>
                                    <div class="container_box-content">
                                        <div class="container_box-content-title">Họ và tên</div>
                                        <div class="container_box-input"><input class="content_input--item--input" type="text" name="txtten" id="" required></div>
                                    </div>
                                    <!-- tách -->
                                    <div class="container_box-content">
                                        <div class="container_box-content-title">Chức danh, học vị, chức vụ</div>
                                        <div class="container_box-input"><input class="content_input--item--input" type="text" name="txtchucdanh" id="" required></div>
                                    </div>
                                    <div class="container_box-content">
                                        <div class="container_box-content-title">Điện thoại</div>
                                        <div class="container_box-input"><input class="content_input--item--input" type="text" name="txtdienthoai" id="" required></div>
                                    </div>
                                    <div class="container_box-content">
                                        <div class="container_box-content-title">E-mail</div>
                                        <div class="container_box-input"><input class="content_input--item--input" type="email" name="txtemail" id="" required></div>
                                    </div>

                                    <div class="container_box-content">
                                        <div class="container_box-content-title">Năm học</div>
                                        <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                    </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                            if (isset($_POST['Nhap'])) {

                                $donvi = $_POST['txtdonvi'];
                                $ten = $_POST['txtten'];
                                $chucdanh = $_POST['txtchucdanh'];
                                $sdt = $_POST['txtdienthoai'];
                                $email = $_POST['txtemail'];
                                $year = $_POST['year'];

                                if ($donvi=="" || $ten=="" || $chucdanh=="" || $sdt=="" || $email=="") {
                                    echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                } else {
                                    $sql = "INSERT INTO `bang12` (`id`,`cacdonvi`, `hovaten`, `chucdanh`, `dienthoai`, `email`, `namhoc`) VALUES (NULL,'$donvi', '$ten', '$chucdanh', '$sdt', '$email', '$year')";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        echo '<script>alert("Nhập thành công!");</script>';
                                        // echo '<script>window.location.href = "../Danhmuc/bang12.php"</script>';
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