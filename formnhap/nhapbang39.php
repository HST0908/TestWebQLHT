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
    <title>DIỆN TÍCH ĐẤT, DIỆN TÍCH SÀN XÂY DỰNG</title>
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
                        <div class="container_header"><h3 class="heading_title">DIỆN TÍCH ĐẤT, DIỆN TÍCH SÀN XÂY DỰNG</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tổng diện tích đất trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dttruong" placeholder="Chỉ nhập số" id="" required></div>
                                </div>

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

                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tổng diện tích sàn xây dựng phục vụ đào tạo</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="dt21" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="hinhthucsd1">
                                            <option class="category_option--item" value="Sở hữu">Sở hữu</option>
                                            <option class="category_option--item" value="Liên kết">Liên kết</option>
                                            <option class="category_option--item" value="Thuê">Thuê</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Thư viện, trung tâm học liệu</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="dt22" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="hinhthucsd2">
                                            <option class="category_option--item" value="Sở hữu">Sở hữu</option>
                                            <option class="category_option--item" value="Liên kết">Liên kết</option>
                                            <option class="category_option--item" value="Thuê">Thuê</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="dt23" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="hinhthucsd3">
                                            <option class="category_option--item" value="Sở hữu">Sở hữu</option>
                                            <option class="category_option--item" value="Liên kết">Liên kết</option>
                                            <option class="category_option--item" value="Thuê">Thuê</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $year = $_POST['year'];
                                    $dttruong = $_POST['dttruong'];
                                    $dt21 = $_POST['dt21'];
                                    $dt22 = $_POST['dt22'];
                                    $dt23 = $_POST['dt23'];
                
                                    if($_POST['hinhthucsd'] =="Sở hữu"){$sohuu = "X";$lienket = "";$thue = "";}
                                    if($_POST['hinhthucsd'] =="Liên kết"){$sohuu = "";$lienket = "X";$thue = "";}
                                    if($_POST['hinhthucsd'] =="Thuê"){$sohuu = "";$lienket = "";$thue = "X";}
                
                                    if($_POST['hinhthucsd1'] =="Sở hữu"){$sohuu1 = "X";$lienket1 = "";$thue1 = "";}
                                    if($_POST['hinhthucsd1'] =="Liên kết"){$sohuu1 = "";$lienket1 = "X";$thue1 = "";}
                                    if($_POST['hinhthucsd1'] =="Thuê"){$sohuu1 = "";$lienket1 = "";$thue1 = "X";}
                
                                    if($_POST['hinhthucsd2'] =="Sở hữu"){$sohuu2 = "X";$lienket2 = "";$thue2 = "";}
                                    if($_POST['hinhthucsd2'] =="Liên kết"){$sohuu2 = "";$lienket2 = "X";$thue2 = "";}
                                    if($_POST['hinhthucsd2'] =="Thuê"){$sohuu2 = "";$lienket2 = "";$thue2 = "X";}
                
                                    if($_POST['hinhthucsd3'] =="Sở hữu"){$sohuu3 = "X";$lienket3 = "";$thue3 = "";}
                                    if($_POST['hinhthucsd3'] =="Liên kết"){$sohuu3 = "";$lienket3 = "X";$thue3 = "";}
                                    if($_POST['hinhthucsd3'] =="Thuê"){$sohuu3 = "";$lienket3 = "";$thue3 = "X";}
                                
                                    $kn = mysqli_query($conn, "SELECT * FROM bang36 WHERE  nam = '$year' and slbaocao = '$slbaocao'");

                                    if ($dttruong ==""|| $dt21==""|| $dt22==""||$dt23==""||$year=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }else{
                                        if($dttruong !="") {
                                            $sql ="INSERT INTO `bang39` (`id`, `noidung`, `dientich`, `nam`, `sohuu`, `lienket`, `thue`) VALUES (NULL, 'Tổng diện tích đất trường', '$dttruong', '$year', '$sohuu', '$lienket', '$thue')";
                                            $result = mysqli_query($conn, $sql);
                                        }
                                        if($dt21 !="") {
                                            $sql1 ="INSERT INTO `bang39` (`id`, `noidung`, `dientich`, `nam`, `sohuu`, `lienket`, `thue`) VALUES (NULL, 'Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu', '$dt21', '$year', '$sohuu1', '$lienket1', '$thue1')";
                                            $result = mysqli_query($conn, $sql1);
                                        }
                                        if($dt22 !="") {
                                            $sql2 ="INSERT INTO `bang39` (`id`, `noidung`, `dientich`, `nam`, `sohuu`, `lienket`, `thue`) VALUES (NULL, 'Thư viện, trung tâm học liệu', '$dt22', '$year', '$sohuu2', '$lienket2', '$thue2')";
                                            $result = mysqli_query($conn, $sql2);
                                        }
                                        if($dt23 !="") {
                                            $sql3 ="INSERT INTO `bang39` (`id`, `noidung`, `dientich`, `nam`, `sohuu`, `lienket`, `thue`) VALUES (NULL, 'Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập', '$dt23', '$year', '$sohuu3', '$lienket3', '$thue3')";
                                            $result = mysqli_query($conn, $sql3);
                                        }   
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