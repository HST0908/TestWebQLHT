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
    <title>SỐ LƯỢNG BÁO CÁO KHOA HỌC DO CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH BÁO CÁO TẠI CÁC HỘI NGHỊ, HỘI THẢO, ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $nh = $_REQUEST['nam'];

        $sql1 = "SELECT * FROM bang35 WHERE loaihoithao = 'Hội thảo quốc tế ' and nam='$nh'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $soluong1 = $row1['soluong'];

        $sql2 = "SELECT * FROM bang35 WHERE loaihoithao = 'Hội thảo trong nước' and nam='$nh'";
        $result2 = mysqli_query($conn,$sql2);
        $row2  = mysqli_fetch_assoc($result2);
        $soluong2 = $row2['soluong'];

        $sql3 = "SELECT * FROM bang35 WHERE loaihoithao = 'Hội thảo của trường' and nam='$nh'";
        $result3 = mysqli_query($conn,$sql3);
        $row3  = mysqli_fetch_assoc($result3);
        $soluong3 = $row3['soluong'];
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG BÁO CÁO KHOA HỌC DO CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH BÁO CÁO TẠI CÁC HỘI NGHỊ, HỘI THẢO, ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại hội thảo</div>
                                    <div class="container_box-input"> </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội thảo quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="hoithaoQT" placeholder="Chỉ nhập số" id="" value="<?=$soluong1?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội thảo trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="hoithaoTN" placeholder="Chỉ nhập số" id="" value="<?=$soluong2?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội thảo của trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="hoithaoT" placeholder="Chỉ nhập số" id="" value="<?=$soluong3?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$nh?>" readonly required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $hoithaoQT = $_POST['hoithaoQT'];
                                    $hoithaoTN = $_POST['hoithaoTN'];
                                    $hoithaoT = $_POST['hoithaoT'];

                                    if($hoithaoQT !="") {
                                        $sql ="UPDATE `bang35` SET `soluong` = '$hoithaoQT' WHERE `bang35`.`loaihoithao` = 'Hội thảo quốc tế' and nam = $nh";
                                        $result = mysqli_query($conn, $sql); 
                                    }
                                    if($hoithaoTN !="") {
                                        $sql1 ="UPDATE `bang35` SET `soluong` = '$hoithaoTN' WHERE `bang35`.`loaihoithao` = 'Hội thảo trong nước' and nam = $nh";
                                        $result = mysqli_query($conn, $sql1);
                                    }
                                    if($hoithaoT !="") {
                                        $sql2 ="UPDATE `bang35` SET `soluong` = '$hoithaoT' WHERE `bang35`.`loaihoithao` = 'Hội thảo của trường' and nam = $nh";
                                        $result = mysqli_query($conn, $sql2);
                                    
                                       
                                        if ($result) {
                                            echo '<script>alert("Sửa thành công!");</script>';
                                            echo '<script>window.location.href = "../formxem/bang35.php"</script>';
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