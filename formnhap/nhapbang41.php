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
    <title>TỔNG SỐ THIẾT BỊ CHÍNH CỦA TRƯỜNG</title>
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
                        <div class="container_header"><h3 class="heading_title">TỔNG SỐ THIẾT BỊ CHÍNH CỦA TRƯỜNG</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tên phòng / Giảng đường / Lab</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="text" name="tenphong" placeholder="Nhập tên phòng" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng phòng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="soluong" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Thiết bị</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="text" name="thietbi" placeholder="" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Đối tượng sử dụng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="doituongsd" placeholder="" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Diện tích</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dientich" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="hinhthucsd">
                                            <option class="category_option--item" value="Sở hữu">Sở hữu</option>
                                            <option class="category_option--item" value="Liên kết">Liên kết</option>
                                            <option class="category_option--item" value="Thuê">Thuê</option>
                                        </select>
                                    </div>
                                </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $tenphong = $_POST['tenphong'];
                                    $soluong = $_POST['soluong'];
                                    $thietbi = $_POST['thietbi'];
                                    $doituongsd = $_POST['doituongsd'];
                                    $dientich = $_POST['dientich'];
            
                                    if($_POST['hinhthucsd'] =="Sở hữu"){
                                        $sohuu = "X";
                                        $lienket = "";
                                        $thue = "";}
            
                                        if($_POST['hinhthucsd'] =="Liên kết"){
                                            $sohuu = "";
                                            $lienket = "X";
                                            $thue = "";}
            
                                            if($_POST['hinhthucsd'] =="Thuê"){
                                                $sohuu = "";
                                                $lienket = "";
                                                $thue = "X";}
                                
                                    $kn = mysqli_query($conn, "SELECT * FROM bang41 WHERE  nam = '$year'");

                                    if(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
                                    } else {
                                        $sql = "INSERT INTO `bang41`
                                        (`id`, `nam`, `tenphong`, `soluong`, `thietbi`, `doituongsd`, `dientich`, `sohuu`, `lienket`, `thue`) 
                                        VALUES 
                                        (NULL, '$year', '$tenphong', '$soluong', '$thietbi', '$doituongsd', '$dientich', '$sohuu', '$lienket', '$thue')";
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