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
    <title>THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU THEO ĐỘ TUỔI (SỐ NGƯỜI)</title>
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
                        <div class="container_header"><h3 class="heading_title"> THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU THEO ĐỘ TUỔI </br> (SỐ NGƯỜI)</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">trình độ / học vị</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="phancap">
                                            <option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>
                                            <option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>
                                            <option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>
                                            <option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>
                                            <option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>
                                            <option class="category_option--item" value="Đại học">Đại học</option>
                                            <option class="category_option--item" value="Cao đẳng">Cao đẳng</option>
                                            <option class="category_option--item" value="Trung cấp">Trung cấp</option>
                                            <option class="category_option--item" value="Trình độ khác">Trình độ khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="sl" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại theo giới tính</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng nam</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slnam" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng nữ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slnu" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại theo tuổi (Người)</div>
                                    <div class="container_box-input"></div>
                                </div>
                                 <!-- tách -->
                                 <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi dưới 30</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dbamuoi" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi từ 31-40</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dbonmuoi" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi từ 41-50</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dnammuoi" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                    <!-- tách -->
                                    <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi từ 51-60</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dsaumuoi" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi trên 60</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tsaumuoi" placeholder="Chỉ nhập số" id="" required></div>
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
                                    $sl = $_POST['sl'];
                                    $slnam = $_POST['slnam'];
                                    $slnu = $_POST['slnu'];
                                    $dbamuoi = $_POST['dbamuoi'];
                                    $dbonmuoi = $_POST['dbonmuoi'];
                                    $dnammuoi = $_POST['dnammuoi'];
                                    $dsaumuoi = $_POST['dsaumuoi'];
                                    $tsaumuoi = $_POST['tsaumuoi'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang19 WHERE hocvi = '$phancap' AND namhoc = '$year'");

                                    if ($sl==""|| $slnam==""|| $slnu==""|| $dbamuoi==""|| $dbonmuoi==""|| $dnammuoi==""|| $dsaumuoi==""|| $tsaumuoi==""){
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của '.$phancap.' năm '.$year.' đã tồn tại!");</script>';
                                    } else {
                                        $sql ="INSERT INTO `bang19` (`id`, `hocvi`, `soluong`, `nam`, `nu`, `bamuoi`, `bonmuoi`, `nammuoi`, `saumuoi`, `trensaumuoi`, `namhoc`) VALUES (NULL, '$phancap', '$sl', '$slnam', '$slnu', '$dbamuoi', '$dbonmuoi', '$dnammuoi', '$dsaumuoi', '$tsaumuoi', '$year')";
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