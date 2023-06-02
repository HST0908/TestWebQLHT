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
    <title>THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN THEO TRÌNH ĐỘ</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang18 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN THEO TRÌNH ĐỘ</h3></div>
                        <div class="container_box">
                            <?php 
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Trình độ, học vị, chức danh</div>
                                    <div class="container_box-input">
                                    <?php if($row['chucdanh'] ==  ("Giáo sư viện sĩ")){
                                        echo'<select class="category_optionNhap" name="chucdanh">';
                                            echo '<option class="category_option--item" value="Giáo sư viện sĩ" selected>Giáo sư,viện sĩ</option>';
                                            echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                            echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                            echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                            echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                            echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                            echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                            echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                        echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Phó giáo sư")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư" selected>Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                            echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Tiến sĩ khoa học")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học" selected>Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                            echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Tiến sĩ")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ" selected>Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                            echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Thạc sĩ")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ" selected>Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                            echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Đại học")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học" selected>Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                            echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Cao đẳng")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng" selected>Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                            echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Trung cấp")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp" selected>Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác">Trình độ khác</option>';
                                            echo'</select>';
                                        }
                                        if($row['chucdanh'] ==  ("Trình độ khác")){
                                            echo'<select class="category_optionNhap" name="chucdanh">';
                                                echo '<option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>';
                                                echo '<option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>';
                                                echo '<option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>';
                                                echo '<option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>';
                                                echo '<option class="category_option--item" value="Đại học">Đại học</option>';
                                                echo '<option class="category_option--item" value="Cao đẳng">Cao đẳng</option>';
                                                echo '<option class="category_option--item" value="Trung cấp">Trung cấp</option>';
                                                echo '<option class="category_option--item" value="Trình độ khác" selected>Trình độ khác</option>';
                                            echo'</select>';
                                        } ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">GV trong biên chế trực tiếp giảng dạy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slgvbienche" placeholder="Chỉ nhập số" id="" value="<?= $row['gvbienche'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">GV hợp đồng dài hạn trực tiếp giảng dạy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slgvhopdong" placeholder="Chỉ nhập số" id="" value="<?= $row['gvhopdong'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Giảng viên kiêm nhiệm là cán bộ quản lý</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slgvql" placeholder="Chỉ nhập số" id="" value="<?= $row['gvquanly']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Giảng viên thỉnh giảng trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="gvtgtrongnuoc" placeholder="Chỉ nhập số" id="" value="<?= $row['gvthinhgiang'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Giảng viên thỉnh giảng quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="gvtgnuocngoai" placeholder="Chỉ nhập số" id="" value="<?= $row['gvthinhgiangqt'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $row['namhoc'] ?>" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $chucdanh = $_POST['chucdanh'];
                                    $slgvbienche = $_POST['slgvbienche'];
                                    $slgvhopdong = $_POST['slgvhopdong'];
                                    $slgvql = $_POST['slgvql'];
                                    $gvtgtrongnuoc = $_POST['gvtgtrongnuoc'];
                                    $gvtgnuocngoai = $_POST['gvtgnuocngoai'];
                                    $year = $_POST['year'];
                                    
                                    $sql ="UPDATE `bang18` SET `chucdanh` = '$chucdanh', `gvbienche` = '$slgvbienche', `gvhopdong` = '$slgvhopdong', `gvquanly` = '$slgvql', `gvthinhgiang` = '$gvtgtrongnuoc', `gvthinhgiangqt` = '$gvtgnuocngoai', `namhoc` = '$year' WHERE `bang18`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        echo '<script>alert("Sửa thành công!");</script>';
                                        echo '<script>window.location.href = "../formxem/bang18.php"</script>';
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