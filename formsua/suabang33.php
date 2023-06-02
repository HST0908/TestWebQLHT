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
    <title>SỐ LƯỢNG BÀI CỦA CÁC CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC ĐĂNG TẠP CHÍ</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $nh = $_REQUEST['nam'];

        $sql = "SELECT * FROM bang33 WHERE loaitapchi = 'Tạp chí khoa học quốc tế (Danh mục ISI)' and nam='$nh'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $soluong = $row['soluong'];

        $sql1 = "SELECT * FROM bang33 WHERE loaitapchi = 'Tạp chí khoa học quốc tế (Danh mục SCOPUS)' and nam='$nh'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $soluong1 = $row1['soluong'];

        $sql2 = "SELECT * FROM bang33 WHERE loaitapchi = 'Tạp chí khoa học quốc tế (Khác)' and nam='$nh'";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $soluong2 = $row2['soluong'];

        $sql3 = "SELECT * FROM bang33 WHERE loaitapchi = 'Tạp chí khoa học cấp Nghành trong nước' and nam='$nh'";
        $result3 = mysqli_query($conn,$sql3);
        $row3  = mysqli_fetch_assoc($result3);
        $soluong3 = $row3['soluong'];

        $sql4 = "SELECT * FROM bang33 WHERE loaitapchi = 'Tạp chí / tập san của cấp trường' and nam='$nh'";
        $result4 = mysqli_query($conn,$sql4);
        $row4  = mysqli_fetch_assoc($result4);
        $soluong4 = $row4['soluong'];
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG BÀI CỦA CÁC CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC ĐĂNG TẠP CHÍ</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại tạp chí</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học quốc tế (Danh mục ISI)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcQT1" placeholder="Chỉ nhập số" id="" value="<?=$soluong?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học quốc tế (Danh mục SCOPUS)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="tcQT2" placeholder="Chỉ nhập số" id="" value="<?=$soluong1?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học quốc tế (Khác)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcQT3" placeholder="Chỉ nhập số" id="" value="<?=$soluong2?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí khoa học cấp Nghành trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcTN" placeholder="Chỉ nhập số" id="" value="<?=$soluong3?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tạp chí / tạp san của cấp trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tcT" placeholder="Chỉ nhập số" id="" value="<?=$soluong4?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$nh?>" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php
                                if(isset($_POST['sua'])){

                                    $tcQT1 = $_POST['tcQT1'];
                                    $tcQT2 = $_POST['tcQT2'];
                                    $tcQT3 = $_POST['tcQT3'];
                                    $tcTN = $_POST['tcTN'];
                                    $tcT = $_POST['tcT'];
                                    $year = $_POST['year'];
        
                                    if($tcQT1 !="") {
                                        $sql ="UPDATE `bang33` SET `soluong` = '$tcQT1', `nam` = '$year' WHERE `bang33`.`loaitapchi` = 'Tạp chí khoa học quốc tế (Danh mục ISI)' and nam = $nh";
                                        $result = mysqli_query($conn, $sql); 
                                    }
                                    if($tcQT2 !="") {
                                        $sql1 ="UPDATE `bang33` SET `soluong` = '$tcQT2', `nam` = '$year' WHERE `bang33`.`loaitapchi` = 'Tạp chí khoa học quốc tế (Danh mục SCOPUS)' and nam = $nh";
                                        $result1 = mysqli_query($conn, $sql1); 
                                    }
                                    if($tcQT3 !="") {
                                        $sql2 ="UPDATE `bang33` SET `soluong` = '$tcQT3', `nam` = '$year' WHERE `bang33`.`loaitapchi` = 'Tạp chí khoa học quốc tế (Khác)' and nam = $nh";
                                        $result2 = mysqli_query($conn, $sql2); 
                                    }
                                    if($tcTN !="") {
                                        $sql3 ="UPDATE `bang33` SET `soluong` = '$tcTN', `nam` = '$year' WHERE `bang33`.`loaitapchi` = 'Tạp chí khoa học cấp Nghành trong nước' and nam = $nh";
                                        $result3 = mysqli_query($conn, $sql3);
                                    }
                                    if($tcT !="") {
                                        $sql4 ="UPDATE `bang33` SET `soluong` = '$tcT', `nam` = '$year' WHERE `bang33`.`loaitapchi` = 'Tạp chí / tập san của cấp trường' and nam = $nh";
                                        $result4 = mysqli_query($conn, $sql4);
                                    
                                       
                                        if ($result) {
                                            echo '<script>alert("Sửa thành công!");</script>';
                                            echo '<script>window.location.href = "../formxem/bang33.php"</script>';
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