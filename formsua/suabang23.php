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
    $nh = $_REQUEST['namhoc'];

    $sql1 = "SELECT * FROM bang23 WHERE tieuchi = '1 Tổng diện tích phòng ở (m2)' and namhoc='$nh'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $giatri1 = $row1['giatri'];

    $sql2 = "SELECT * FROM bang23 WHERE tieuchi = '2 Số lượng sinh viên' and namhoc='$nh'";
    $result2 = mysqli_query($conn,$sql2);
    $row2  = mysqli_fetch_assoc($result2);
    $giatri2 = $row2['giatri'];

    $sql3 = "SELECT * FROM bang23 WHERE tieuchi = '3 Số sinh viên có nhu cầu ở ký túc xá' and namhoc='$nh'";
    $result3 = mysqli_query($conn,$sql3);
    $row3  = mysqli_fetch_assoc($result3);
    $giatri3 = $row3['giatri'];

    $sql4 = "SELECT * FROM bang23 WHERE tieuchi = '4 Số lượng sinh viên được ở ký túc xá' and namhoc='$nh'";
    $result4 = mysqli_query($conn,$sql4);
    $row4  = mysqli_fetch_assoc($result4);
    $giatri4 = $row4['giatri'];
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
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dtphong" placeholder="Chỉ nhập số" id="" value="<?=$giatri1?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsv" placeholder="Chỉ nhập số" id="" value="<?=$giatri2?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên có nhu cầu ở ký túc xá</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsvkt" placeholder="Chỉ nhập số" id="" value="<?=$giatri3?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng sinh viên được ở ký túc xá</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsvckt" placeholder="Chỉ nhập số" id="" value="<?=$giatri4?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$nh?>" required></div>
                                </div>
                                
                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php
                                if(isset($_POST['sua'])){

                                    $dtphong = $_POST['dtphong'];
                                    $slsv = $_POST['slsv'];
                                    $slsvkt = $_POST['slsvkt'];
                                    $slsvckt = $_POST['slsvckt'];
                                    $year = $_POST['year'];
                                    $a = $dtphong / $slsvckt;

                                    if($dtphong !="") {
                                    $sql ="UPDATE `bang23` SET `giatri` = '$dtphong' , `namhoc` = '$year' WHERE `bang23`.`tieuchi` = '1 Tổng diện tích phòng ở (m2)' and namhoc = $nh";
                                    $result = mysqli_query($conn, $sql); 
                                    }
                                    if($slsv !="") {
                                        $sql1 ="UPDATE `bang23` SET `giatri` = '$slsv' , `namhoc` = '$year' WHERE `bang23`.`tieuchi` = '2 Số lượng sinh viên' and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql1);
                                    }
                                    if($slsvkt !="") {
                                        $sql2 ="UPDATE `bang23` SET `giatri` = '$slsvkt' , `namhoc` = '$year' WHERE `bang23`.`tieuchi` = '3 Số sinh viên có nhu cầu ở ký túc xá' and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql2);
                                    }
                                    if($slsvckt !="") {
                                        $sql3 ="UPDATE `bang23` SET `giatri` = '$slsvckt' , `namhoc` = '$year' WHERE `bang23`.`tieuchi` = '4 Số lượng sinh viên được ở ký túc xá' and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql3);
                                        $sql4 ="UPDATE `bang23` SET `giatri` = '$a' , `namhoc` = '$year' WHERE `bang23`.`tieuchi` = '5 Tỷ số diện tích trên đầu sinh viên ở trong ký túc xá, m2/người' and namhoc = $nh";
                                        $result = mysqli_query($conn, $sql4);
                                        if ($result) {
                                            echo '<script>alert("Sửa thành công!");</script>';
                                            echo '<script>window.location.href = "../formxem/bang23.php"</script>';
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