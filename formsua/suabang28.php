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
    <title>TỔNG SỐ LƯỢNG SINH VIÊN TỪNG NĂM</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $nh = $_REQUEST['namhoc'];
    $sql1 = "SELECT * FROM bang28 where namhoc = $nh and phanloaidetai = 'Cao học'";
    $rs = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($rs);
    $soluong1 = $row1['soluong'];

    $sql2 = "SELECT * FROM bang28 where namhoc = $nh and phanloaidetai = 'Đại học'";
    $rs1 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($rs1);
    $soluong2 = $row2['soluong'];

    $sql3 = "SELECT * FROM bang28 where namhoc = $nh and phanloaidetai = 'Cao đẳng'";
    $rs2 = mysqli_query($conn,$sql3);
    $row3 = mysqli_fetch_assoc($rs2);
    $soluong3 = $row3['soluong'];

    $sql4 = "SELECT * FROM bang28 where namhoc = $nh and phanloaidetai = 'Khác'";
    $rs3 = mysqli_query($conn,$sql4);
    $row4 = mysqli_fetch_assoc($rs3);
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
                        <div class="container_header"><h3 class="heading_title">TỔNG SỐ LƯỢNG SINH VIÊN TỪNG NĂM</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại đề tài</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Cao học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dtch" placeholder="Chỉ nhập số" value="<?= $soluong1?:"" ?>" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Đại học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="dtdh" placeholder="Chỉ nhập số" id="" value="<?= $soluong2?:"" ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Cao đẳng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dtcd" placeholder="Chỉ nhập số" id="" value="<?= $soluong3?:"" ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Khác</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dtk" placeholder="Chỉ nhập số" id="" value="<?= $soluong4?:"" ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" value="<?= $nh?:"" ?>" id="" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $dtch = $_POST['dtch'];
                                    $dtdh = $_POST['dtdh'];
                                    $dtcd = $_POST['dtcd'];
                                    $dtk = $_POST['dtk'];
                                    $year = $_POST['year'];

                                    if($dtch !="" ||$dtch > $soluong1 || $dtch < $soluong1 ){
                                    $sql1 ="UPDATE `bang28` SET `soluong` = '$dtch', `namhoc` = '$year' WHERE phanloaidetai = 'Cao học' and namhoc = $nh";
                                    $rs1 = mysqli_query($conn,$sql1);
                                    }

                                    if($dtdh !="" ||$dtdh > $soluong2 || $dtdh < $soluong2 ){
                                    $sql2 ="UPDATE `bang28` SET `soluong` = '$dtdh', `namhoc` = '$year' WHERE phanloaidetai = 'Đại học' and namhoc = $nh";
                                    $rs2 = mysqli_query($conn,$sql2);
                                    }

                                    if($dtcd !="" ||$dtcd > $soluong3 || $dtcd < $soluong3 ){
                                    $sql3 ="UPDATE `bang28` SET `soluong` = '$dtcd', `namhoc` = '$year' WHERE phanloaidetai = 'Cao đẳng' and namhoc = $nh";
                                    $rs3 = mysqli_query($conn,$sql3);
                                    }

                                    if($dtk !="" ||$dtk > $soluong4 || $dtk < $soluong4 ){
                                        $sql4 ="UPDATE `bang28` SET `soluong` = '$dtk', `namhoc` = '$year' WHERE phanloaidetai = 'Khác' and namhoc = $nh";
                                        $rs4 = mysqli_query($conn,$sql4);
                                        }
                                    if ($rs1) {
                                        // Update bảng 24 (select sum(soluong) from bang28)
                                        // $sqlb24 = "UPDATE bang24 SET soluong = (SELECT SUM(soluong) FROM bang28 WHERE namhoc = bang24.namhoc)";
                                        // $rs = mysqli_query($conn,$sqlb24);
                                        // if($rs){
                                            // thông báo và trở về trang hiện hành
                                        echo '<script>alert("Sửa thành công!");</script>';
                                        echo '<script>window.location.href = "../formxem/bang28.php"</script>';
                                        // }
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