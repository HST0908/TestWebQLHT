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
    <title>CÁC KHOA ĐÀO TẠO CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH</title>
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
                        <div class="container_header"><h3 class="heading_title">CÁC KHOA ĐÀO TẠO CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Khoa/Viện đào tạo</div>
                                    <div class="container_box-input">                                                
                                        <select class="category_optionNhap" name="khoa">
                                            <option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>
                                            <option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>
                                            <option class="category_option--item" value="Điện">Điện</option>
                                            <option class="category_option--item" value="Điện tử">Điện tử</option>
                                            <option class="category_option--item" value="Tin">Tin</option>
                                            <option class="category_option--item" value="Kinh tế">Kinh tế</option>
                                            <option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>
                                            <option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>
                                            <option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>
                                            <option class="category_option--item" value="Sư phạm">Sư phạm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ Đại học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">CTĐT</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ctdtdaihoc" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số Sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svdaihoc" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ Sau đại học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">CTĐT</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ctdtsaudaihoc" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số Sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svsaudaihoc" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ Khác</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">CTĐT</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ctdtkhac" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số Sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svkhac" placeholder="Chỉ nhập số" id="" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $khoa = $_POST['khoa'];
                                    $ctdtdh = $_POST['ctdtdaihoc'];
                                    $svdh = $_POST['svdaihoc'];
                                    $ctdtsaudh = $_POST['ctdtsaudaihoc'];
                                    $svsaudh = $_POST['svsaudaihoc'];
                                    $ctdtkhac = $_POST['ctdtkhac'];
                                    $svkhac = $_POST['svkhac'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang13 WHERE khoa = '$khoa' AND namhoc = '$year'");

                                    if($ctdtdh==""|| $svdh==""|| $ctdtsaudh==""|| $svsaudh==""|| $ctdtkhac==""||$svkhac==""){
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }elseif(mysqli_num_rows($kn) > 0){
                                            echo '<script>alert("Dữ liệu của '.$khoa.' năm '.$year.' đã tồn tại!");</script>';
                                        } else {
                                        $sql = "INSERT INTO `bang13` (`id`, `khoa`, `ctdtdh`, `svdh`, `ctdtsaudh`, `svsaudh`, `ctdtkhac`, `svkhac`, `namhoc`) VALUES (NULL, '$khoa', '$ctdtdh', '$svdh', '$ctdtsaudh', '$svsaudh', '$ctdtkhac', '$svkhac', '$year')";
                                        $result = mysqli_query($conn, $sql);
                                        if($result){
                                            echo '<script>alert("Nhập thành công!");</script>';
                                            // echo '<script>window.location.href = "../Danhmuc/bang13.php"</script>';
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