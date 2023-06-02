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
    <title>THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU THEO ĐỘ TUỔI (SỐ NGƯỜI)</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang19 WHERE id = $id";
    $result = mysqli_query($conn,$sql);
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU THEO ĐỘ TUỔI (SỐ NGƯỜI)</h3></div>
                        <div class="container_box">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">trình độ / học vị</div>
                                    <div class="container_box-input">
                                    <?php if($row['hocvi'] ==  ("Giáo sư viện sĩ")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ" selected>Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo '</select>';
                                    }
                                    if($row['hocvi'] ==  ("Phó giáo sư")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư" selected>Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo '</select>';
                                    }  
                                    if($row['hocvi'] ==  ("Tiến sĩ khoa học")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học"  selected>Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo '</select>';
                                    }
                                    if($row['hocvi'] ==  ("Tiến sĩ")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ" selected>Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo '</select>';
                                    }
                                    if($row['hocvi'] ==  ("Thạc sĩ")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ" selected>Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo '</select>';
                                    } 
                                    if($row['hocvi'] ==  ("Đại học")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học" selected>Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo '</select>';
                                    }
                                    if($row['hocvi'] ==  ("Trung cấp")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp" selected>Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo '</select>';
                                    } 
                                    if($row['hocvi'] ==  ("Trình độ khác")){
                                        echo '<select class="category_optionNhap" name="phancap">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác" selected>Trình độ khác</option>';
                                        echo '</select>';
                                    }    
                                    ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="sl" placeholder="Chỉ nhập số" id="" value="<?= $row['soluong']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại theo giới tính</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng nam</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slnam" placeholder="Chỉ nhập số" id="" value="<?= $row['nam']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng nữ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slnu" placeholder="Chỉ nhập số" id="" value="<?= $row['nu']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại theo tuổi (Người)</div>
                                    <div class="container_box-input"></div>
                                </div>
                                 <!-- tách -->
                                 <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi dưới 30</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dbamuoi" placeholder="Chỉ nhập số" id="" value="<?= $row['bamuoi']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi từ 31-40</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dbonmuoi" placeholder="Chỉ nhập số" id="" value="<?= $row['bonmuoi']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi từ 41-50</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dnammuoi" placeholder="Chỉ nhập số" id="" value="<?= $row['nammuoi']?>" required></div>
                                </div>
                                    <!-- tách -->
                                    <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi từ 51-60</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dsaumuoi" placeholder="Chỉ nhập số" id="" value="<?= $row['saumuoi']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Độ tuổi trên 60</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tsaumuoi" placeholder="Chỉ nhập số" id="" value="<?= $row['trensaumuoi']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $row['namhoc']?>" required></div>
                                </div>
                                

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $phancap = $_POST['phancap'];
                                    $sl = $_POST['sl'];
                                    $slnam = $_POST['slnam'];
                                    $slnu = $_POST['slnu'];
                                    $dbamuoi = $_POST['dbamuoi'];
                                    $dbonmuoi = $_POST['dbonmuoi'];
                                    $dnammuoi = $_POST['dnammuoi'];
                                    $dsaumuoi = $_POST['dsaumuoi'];
                                    $tsaumuoi = $_POST['tsaumuoi'];
                                    $year = $_POST['year'];
                                    
                                    $sql ="UPDATE `bang19` SET `hocvi` = '$phancap', `soluong` = '$sl', `nam` = '$slnam', `nu` = '$slnu', `bamuoi` = '$dbamuoi', `bonmuoi` = '$dbonmuoi', `nammuoi` = '$dnammuoi', `saumuoi` = '$dsaumuoi', `trensaumuoi` = '$tsaumuoi', `namhoc` = '$year' WHERE `bang19`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        echo '<script>alert("Sửa thành công!");</script>';
                                        echo '<script>window.location.href = "../formxem/bang19.php"</script>';
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