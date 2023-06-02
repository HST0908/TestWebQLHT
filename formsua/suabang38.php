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
    <title>NGHIÊN CỨU KHOA HỌC CỦA SINH VIÊN</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $nh = $_REQUEST['nam'];

    $sql = "SELECT * FROM bang38 WHERE thanhtich = 'Số giải thường nghiên cứu' and nam='$nh'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $soluong = $row['soluong'];

    $sql1 = "SELECT * FROM bang38 WHERE thanhtich = 'Số bài báo được đăng, công trình được công bố' and nam='$nh'";
    $result1 = mysqli_query($conn,$sql1);
    $row1  = mysqli_fetch_assoc($result1);
    $soluong1 = $row1['soluong'];

    $sql2 = "SELECT * FROM bang38 WHERE thanhtich = 'Số lượng sinh viên tham gia viết đề tài cấp Nhà nước' and nam='$nh'";
    $result2 = mysqli_query($conn,$sql2);
    $row2  = mysqli_fetch_assoc($result2);
    $soluong2 = $row2['soluong'];

    $sql3 = "SELECT * FROM bang38 WHERE thanhtich = 'Số lượng sinh viên tham gia viết đề tài cấp Bộ* ' and nam='$nh'";
    $result3 = mysqli_query($conn,$sql3);
    $row3 = mysqli_fetch_assoc($result3);
    $soluong3 = $row3['soluong'];

    $sql4 = "SELECT * FROM bang38 WHERE thanhtich = 'Số lượng sinh viên tham gia viết đề tài cấp Trường' and nam='$nh'";
    $result4 = mysqli_query($conn,$sql4);
    $row4  = mysqli_fetch_assoc($result4);
    $soluong4 = $row4['soluong'];

    $sql5 = "SELECT * FROM bang38 WHERE thanhtich = 'Số lượng đề tài cấp Nhà nước' and nam='$nh'";
    $result5 = mysqli_query($conn,$sql5);
    $row5  = mysqli_fetch_assoc($result5);
    $soluong5 = $row5['soluong'];

    $sql6 = "SELECT * FROM bang38 WHERE thanhtich = 'Số lượng đề tài cấp Bộ' and nam='$nh'";
    $result6 = mysqli_query($conn,$sql6);
    $row6  = mysqli_fetch_assoc($result6);
    $soluong6 = $row6['soluong'];

    $sql7 = "SELECT * FROM bang38 WHERE thanhtich = 'Số lượng đề tài cấp Trường' and nam='$nh'";
    $result7 = mysqli_query($conn,$sql7);
    $row7  = mysqli_fetch_assoc($result7);
    $soluong7 = $row7['soluong'];
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
                        <div class="container_header"><h3 class="heading_title">NGHIÊN CỨU KHOA HỌC CỦA SINH VIÊN</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Thành tích nghiên cứu khoa học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                    <!-- tách -->
                                    <div class="container_box-content">
                                    <div class="container_box-content-title">Số giải thưởng nghiên cứu khoa học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slgiaithuong" placeholder="Chỉ nhập số" id="" value="<?=$soluong?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số bài báo được đăng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slbaidangbao" placeholder="Chỉ nhập số" id="" value="<?=$soluong1?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên tham gia viết đề tài cấp Nhà nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slsvvietNN" placeholder="Chỉ nhập số" id="" value="<?=$soluong2?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên tham gia viết đề tài cấp Bộ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slsvvietB" placeholder="Chỉ nhập số" id="" value="<?=$soluong3?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số sinh viên tham gia viết đề tài cấp Trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slsvvietT" placeholder="Chỉ nhập số" id="" value="<?=$soluong4?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng đề tài cấp Nhà nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="sldetaiNN" placeholder="Chỉ nhập số" id="" value="<?=$soluong5?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng đề tài cấp Bộ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="sldetaiB" placeholder="Chỉ nhập số" id="" value="<?=$soluong6?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng đề tài cấp Trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="sldetaiT" placeholder="Chỉ nhập số" id="" value="<?=$soluong7?>" required></div>
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

                                    $year = $_POST['year'];
                                    $slgiaithuong = $_POST['slgiaithuong'];
                                    $slbaidangbao = $_POST['slbaidangbao'];
                                    $slsvvietNN = $_POST['slsvvietNN'];
                                    $slsvvietB = $_POST['slsvvietB'];
                                    $slsvvietT= $_POST['slsvvietT'];
                                    $sldetaiNN = $_POST['sldetaiNN'];
                                    $sldetaiB = $_POST['sldetaiB'];
                                    $sldetaiT = $_POST['sldetaiT'];

                                    if($slgiaithuong !="") {
                                        $sql ="UPDATE `bang38` SET `soluong` = '$slgiaithuong',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số giải thường nghiên cứu' and nam = $nh";
                                        $result = mysqli_query($conn, $sql); 
                                    }
                                    if($slbaidangbao !="") {
                                        $sql1 ="UPDATE `bang38` SET `soluong` = '$slbaidangbao',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số bài báo được đăng, công trình được công bố' and nam = $nh";
                                        $result = mysqli_query($conn, $sql1);
                                    }
                                    if($slsvvietNN !="") {
                                        $sql2 ="UPDATE `bang38` SET `soluong` = '$slsvvietNN',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số lượng sinh viên tham gia viết đề tài cấp Nhà nước' and nam = $nh";
                                        $result = mysqli_query($conn, $sql2);}
    
                                        if($slsvvietB !="") {
                                            $sql3 ="UPDATE `bang38` SET `soluong` = '$slsvvietB',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số lượng sinh viên tham gia viết đề tài cấp Bộ*' and nam = $nh";
                                            $result = mysqli_query($conn, $sql3); 
                                        }
                                        if($slbaidangbao !="") {
                                            $sql4 ="UPDATE `bang38` SET `soluong` = '$slsvvietT',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số lượng sinh viên tham gia viết đề tài cấp Trường' and nam = $nh";
                                            $result = mysqli_query($conn, $sql4);
                                        }
                                        if($sldetaiNN !="") {
                                            $sql5 ="UPDATE `bang38` SET `soluong` = '$sldetaiNN',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số lượng đề tài cấp Nhà nước' and nam = $nh";
                                            $result = mysqli_query($conn, $sql5);}
    
                                            if($sldetaiB !="") {
                                                $sql6 ="UPDATE `bang38` SET `soluong` = '$sldetaiB',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số lượng đề tài cấp Bộ' and nam = $nh";
                                                $result = mysqli_query($conn, $sql6); 
                                            }
                                            if($sldetaiT!="") {
                                                $sql7 ="UPDATE `bang38` SET `soluong` = '$sldetaiT',`nam` = '$year' WHERE `bang38`.`thanhtich` = 'Số lượng đề tài cấp Trường' and nam = $nh";
                                                $result = mysqli_query($conn, $sql7);
                                       
                                        if ($result) {
                                            echo '<script>alert("Sửa thành công!");</script>';
                                            echo '<script>window.location.href = "../formxem/bang38.php"</script>';
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