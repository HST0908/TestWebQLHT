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
    <title>SỐ LƯỢNG SÁCH CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC XUẤT BẢN</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $nh = $_REQUEST['nam'];

    $sql = "SELECT * FROM bang31 WHERE loaisach = 'Sách chuyên khảo ' and nam='$nh'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $sachCK = $row['soluong'];

    $sql1 = "SELECT * FROM bang31 WHERE loaisach = 'Sách giáo trình' and nam='$nh'";
    $result1 = mysqli_query($conn,$sql1);
    $row1  = mysqli_fetch_assoc($result1);
    $sachGT = $row1['soluong'];

    $sql2 = "SELECT * FROM bang31 WHERE loaisach = 'Sách tham khảo' and nam='$nh'";
    $result2 = mysqli_query($conn,$sql2);
    $row2  = mysqli_fetch_assoc($result2);
    $sachTK = $row2['soluong'];

    $sql3 = "SELECT * FROM bang31 WHERE loaisach = 'Sách hướng dẫn' and nam='$nh'";
    $result3 = mysqli_query($conn,$sql3);
    $row3  = mysqli_fetch_assoc($result3);
    $sachHD = $row3['soluong'];
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG SÁCH CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC XUẤT BẢN</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại sách</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sách chuyên khảo</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="sachCK" placeholder="Chỉ nhập số" id="" value="<?=$sachCK?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sách giáo trình</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="sachGT" placeholder="Chỉ nhập số" id="" value="<?=$sachGT?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sách tham khảo</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="sachTK" placeholder="Chỉ nhập số" id=""  value="<?=$sachTK?>" required></div>
                                </div>
                                <!-- tách -->

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sách hướng dẫn</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="sachHD" placeholder="Chỉ nhập số" id="" value="<?=$sachHD?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$nh?>" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php
                                if(isset($_POST['sua'])){

                                    $sachCK = $_POST['sachCK'];
                                    $sachGT = $_POST['sachGT'];
                                    $sachTK = $_POST['sachTK'];
                                    $sachHD = $_POST['sachHD'];
                                    $year = $_POST['year'];
        
                                    if($sachCK !="") {
                                        $sql ="UPDATE `bang31` SET `soluong` = '$sachCK', `nam` = '$year' WHERE `bang31`.`loaisach` = 'Sách chuyên khảo' and nam = $nh";
                                        $result = mysqli_query($conn, $sql); 
                                    }
                                    if($sachGT !="") {
                                        $sql1 ="UPDATE `bang31` SET `soluong` = '$sachGT', `nam` = '$year' WHERE `bang31`.`loaisach` = 'Sách giáo trình' and nam = $nh";
                                        $result = mysqli_query($conn, $sql1);
                                    }
                                    if($sachTK !="") {
                                        $sql2 ="UPDATE `bang31` SET `soluong` = '$sachTK', `nam` = '$year' WHERE `bang31`.`loaisach` = 'Sách tham khảo' and nam = $nh";
                                        $result = mysqli_query($conn, $sql2);
                                    }
                                    if($sachHD !="") {
                                        $sql3 ="UPDATE `bang31` SET `soluong` = '$sachHD', `nam` = '$year' WHERE `bang31`.`loaisach` = 'Sách hướng dẫn' and nam = $nh";
                                        $result = mysqli_query($conn, $sql3);
                                        if ($result) {
                                            echo '<script>alert("Sửa thành công!");</script>';
                                            echo '<script>window.location.href = "../formxem/bang31.php"</script>';
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