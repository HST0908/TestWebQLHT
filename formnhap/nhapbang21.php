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
    <title>TỔNG SỐ NGƯỜI HỌC ĐĂNG KÝ DỰ THI VÀO CSGD, TRÚNG TUYỂN VÀ NHẬP HỌC TRONG 5 NĂM GẦN ĐÂY HỆ CHÍNH QUY</title>
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
                        <div class="container_header"><h3 class="heading_title">TỔNG SỐ NGƯỜI HỌC ĐĂNG KÝ DỰ THI VÀO CSGD, TRÚNG TUYỂN VÀ NHẬP HỌC TRONG 5 NĂM GẦN ĐÂY HỆ CHÍNH QUY</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Đối tượng</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="doituong">
                                            <option class="category_option--item" value="Nghiên cứu sinh">Nghiên cứu sinh</option>
                                            <option class="category_option--item" value="Học viên cao học">Học viên cao học</option>
                                            <option class="category_option--item" value="Đại học">Đại học</option>
                                            <option class="category_option--item" value="Cao đẳng">Cao đẳng</option>
                                            <option class="category_option--item" value="Trung cấp">Trung cấp</option>
                                            <option class="category_option--item" value="Trình độ khác">Trình độ khác</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số thí sinh dự tuyển (người)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dutuyen" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số trúng tuyển (người)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="trungtuyen" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số nhập học thực tế (người)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="nhaphoc" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Điểm tuyển đầu vào (thang điểm 30)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="diemtuyen" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Điểm trung bình của người học được tuyển</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tbduoctuyen" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng sinh viên quốc tế nhập học (người)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsvqt" placeholder="Chỉ nhập số" id="" required></div>
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

                                    $doituong = $_POST['doituong'];
                                    $dutuyen = $_POST['dutuyen'];
                                    $trungtuyen = $_POST['trungtuyen'];
                                    $nhaphoc = $_POST['nhaphoc'];
                                    $diemtuyen = $_POST['diemtuyen'];
                                    $tbduoctuyen = $_POST['tbduoctuyen'];
                                    $slsvqt = $_POST['slsvqt'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang21 WHERE doituong = '$doituong' AND namhoc = '$year'");

                                    if ($dutuyen ==""|| $trungtuyen==""|| $nhaphoc==""||$diemtuyen==""||$tbduoctuyen==""||$slsvqt==""||$year=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }
                                    elseif(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của '.$doituong.' năm '.$year.' đã tồn tại!");</script>';
                                    } 
                                    else {
                                        $sql ="INSERT INTO `bang21` (`id`, `doituong`, `sothisinh`, `sotrungtuyen`, `sonhaphoc`, `diemdauvao`, `diemtb`, `slsinhvienqt`, `namhoc`) VALUES (NULL, '$doituong', '$dutuyen', '$trungtuyen', '$nhaphoc', '$diemtuyen', '$tbduoctuyen', '$slsvqt', '$year')";
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