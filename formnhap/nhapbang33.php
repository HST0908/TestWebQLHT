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
    <title>SỐ LƯỢNG BÀI CỦA CÁC CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC ĐĂNG TẠP CHÍ TRONG 5 NĂM GẦN ĐÂY</title>
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG BÀI CỦA CÁC CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC ĐĂNG TẠP CHÍ TRONG 5 NĂM GẦN ĐÂY</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại tạp chí</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học quốc tế (Danh mục ISI)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcQT1" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học quốc tế (Danh mục SCOPUS)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="tcQT2" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học quốc tế (Khác)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcQT3" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học cấp Nghành trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcTN" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí / tạp san của cấp trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcT" placeholder="Chỉ nhập số" id="" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $tcQT1 = $_POST['tcQT1'];
                                    $tcQT2 = $_POST['tcQT2'];
                                    $tcQT3 = $_POST['tcQT3'];
                                    $tcTN = $_POST['tcTN'];
                                    $tcT = $_POST['tcT'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang33 WHERE nam = '$year'");
        
                                    if ($tcQT1 ==""||$tcQT2 ==""||$tcQT3 ==""|| $tcTN==""|| $tcT==""|| $year=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){

                                        echo '<script>alert("Dữ liệu năm '.$year.' đã tồn tại!");</script>';

                                    }else{

                                        if($tcQT1 !="") {
                                            $sql ="INSERT INTO `bang33` (`id`, `loaitapchi`, `soluong`, `nam`) VALUES (NULL, 'Tạp chí khoa học quốc tế (Danh mục ISI)', '$tcQT1', '$year')";
                                            $result = mysqli_query($conn, $sql);
                                        }
                                        
                                        if($tcQT2 !="") {
                                            $sql1 ="INSERT INTO `bang33` (`id`, `loaitapchi`, `soluong`, `nam`) VALUES (NULL, 'Tạp chí khoa học quốc tế (Danh mục SCOPUS)', '$tcQT2', '$year')";
                                            $result = mysqli_query($conn, $sql1);
                                        }
        
                                        if($tcQT3 !="") {
                                            $sql2 ="INSERT INTO `bang33` (`id`, `loaitapchi`, `soluong`, `nam`) VALUES (NULL, 'Tạp chí khoa học quốc tế (Khác)', '$tcQT3', '$year')";
                                            $result = mysqli_query($conn, $sql2);
                                        }
        
                                        if($tcTN !="") {
                                            $sql3 ="INSERT INTO `bang33` (`id`, `loaitapchi`, `soluong`, `nam`) VALUES (NULL, 'Tạp chí khoa học cấp Nghành trong nước', '$tcTN', '$year')";
                                            $result = mysqli_query($conn, $sql3);
                                        }
        
                                        if($tcT !="") {
                                            $sql4 ="INSERT INTO `bang33` (`id`, `loaitapchi`, `soluong`, `nam`) VALUES (NULL, 'Tạp chí / tập san của cấp trường', '$tcT', '$year')";
                                            $result = mysqli_query($conn, $sql4);
                                            
                                            if($result){
                                                echo '<script>alert("Nhập thành công!");</script>';
                                                echo '<script>window.location.href = "../public/homepage.php"</script>';
                                            }
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