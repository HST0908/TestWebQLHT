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
    <title>KÝ TÚC XÁ CHO SINH VIÊN</title>
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
                        <div class="container_header"><h3 class="heading_title">KÝ TÚC XÁ CHO SINH VIÊN</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Các tiêu chí</div>
                                    <div class="container_box-input">
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tổng diện tích phòng ở (m2)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dtphong" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsv" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên có nhu cầu ở ký túc xá</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsvkt" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng sinh viên được ở ký túc xá</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsvckt" placeholder="Chỉ nhập số" id="" required></div>
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

                                    $dtphong = $_POST['dtphong'];
                                    $slsv = $_POST['slsv'];
                                    $slsvkt = $_POST['slsvkt'];
                                    $slsvckt = $_POST['slsvckt'];
                                    $year = $_POST['year'];
                                    $a = $dtphong/$slsvckt;
                                    $kn = mysqli_query($conn, "SELECT * FROM bang23 WHERE namhoc = '$year'");

                                    if(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
                                    }else{

                                        if ($dtphong ==""|| $slsv==""|| $slsvkt==""||$slsvckt==""||$year=="") {
                                            echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                        }else{
                                            if($dtphong !="") {
                                                $sql ="INSERT INTO `bang23` (`id`, `tieuchi`, `giatri`, `namhoc`) VALUES (NULL, '1 Tổng diện tích phòng ở (m2)', '$dtphong', '$year')";
                                                $result = mysqli_query($conn, $sql);
                                            }
                                            if($slsv !="") {
                                                $sql1 ="INSERT INTO `bang23` (`id`, `tieuchi`, `giatri`, `namhoc`) VALUES (NULL, '2 Số lượng sinh viên', '$slsv', '$year')";
                                                $result = mysqli_query($conn, $sql1);
                                            }
                                            if($slsvkt !="") {
                                                $sql2 ="INSERT INTO `bang23` (`id`, `tieuchi`, `giatri`, `namhoc`) VALUES (NULL, '3 Số sinh viên có nhu cầu ở ký túc xá', '$slsvkt', '$year')";
                                                $result = mysqli_query($conn, $sql2);
                                            }
                                            if($slsvckt !="") {
                                                $sql3 ="INSERT INTO `bang23` (`id`, `tieuchi`, `giatri`, `namhoc`) VALUES (NULL, '4 Số lượng sinh viên được ở ký túc xá', '$slsvckt', '$year')";
                                                $result = mysqli_query($conn, $sql3);}
                                            if($dtphong !="" and $slsvckt !="") {
                                                $sql4 ="INSERT INTO `bang23` (`id`, `tieuchi`, `giatri`, `namhoc`) VALUES (NULL, '5 Tỷ số diện tích trên đầu sinh viên ở trong ký túc xá, m2/người', '$a', '$year')";
                                                $result = mysqli_query($conn, $sql4);}
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