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
    <title> THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU</title>
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU 
THEO MỨC ĐỘ THƯỜNG XUYÊN SỬ DỤNG NGOẠI NGỮ VÀ TIN HỌC CHO CÔNG TÁC GIẢNG DẠY VÀ NGHIÊN CỨU </h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tần suất sử dụng</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap20" name="tansuatsd">
                                            <option class="category_option--item" value="Luôn sử dụng">Luôn sử dụng (trên 80% thời gian của công việc)</option>
                                            <option class="category_option--item" value="Thường sử dụng">Thường sử dụng (trên 60-80% thời gian của công việc)</option>
                                            <option class="category_option--item" value="Đôi khi sử dụng">Đôi khi sử dụng (trên 40-60% thời gian của công việc)</option>
                                            <option class="category_option--item" value="Ít khi sử dụng">Ít khi sử dụng (trên 20-40% thời gian của công việc)</option>
                                            <option class="category_option--item" value="Hiếm khi sử dụng">Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tỷ lệ (%) giảng viên cơ hữu sử dụng ngoại ngữ và tin học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                 <!-- tách -->
                                 <div class="container_box-content">
                                    <div class="container_box-content-title">Ngoại ngữ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tilengoaingu" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tin học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiletinhoc" placeholder="Chỉ nhập số" id="" required></div>
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

                                    $tansuat = $_POST['tansuatsd'];
                                    $ngoaingu = $_POST['tilengoaingu'];
                                    $tinhoc = $_POST['tiletinhoc'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang20 WHERE tansuatsd = '$tansuat' AND namhoc = '$year'");

                                    if ($ngoaingu==""||$tinhoc==""||$year=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu dòng này của năm '.$year.' đã tồn tại!");</script>';
                                    } else {
                                        $sql ="INSERT INTO `bang20` (`id`, `tansuatsd`, `gvngoaingu`, `gvtinhoc`, `namhoc`) VALUES (NULL, '$tansuat', '$ngoaingu', '$tinhoc', '$year')";
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