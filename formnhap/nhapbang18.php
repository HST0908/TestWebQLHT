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
    <title>Bảng 18</title>
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ SỐ LƯỢNG CÁN BỘ, GIẢNG VIÊN VÀ NHÂN VIÊN </br>(GỌI CHUNG LÀ CÁN BỘ) CỦA CSGD THEO GIỚI TÍNH</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Trình độ, học vị, chức danh</div>
                                    <div class="container_box-input">
                                        <select class="category_optionNhap" name="chucdanh">
                                        <option class="category_option--item" value="Giáo sư viện sĩ">Giáo sư,viện sĩ</option>
                                            <option class="category_option--item" value="Phó giáo sư">Phó giáo sư</option>
                                            <option class="category_option--item" value="Tiến sĩ khoa học">Tiến sĩ khoa học</option>
                                            <option class="category_option--item" value="Tiến sĩ">Tiến sĩ</option>
                                            <option class="category_option--item" value="Thạc sĩ">Thạc sĩ</option>
                                            <option class="category_option--item" value="Đại học">Đại học</option>
                                            <option class="category_option--item" value="Cao đẳng">Cao đẳng</option>
                                            <option class="category_option--item" value="Trung cấp">Trung cấp</option>
                                            <option class="category_option--item" value="Trình độ khác">Trình độ khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">GV trong biên chế trực tiếp giảng dạy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slgvbienche" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">GV hợp đồng dài hạn trực tiếp giảng dạy</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slgvhopdong" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Giảng viên kiêm nhiệm là cán bộ quản lý</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slgvql" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Giảng viên thỉnh giảng trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="gvtgtrongnuoc" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Giảng viên thỉnh giảng quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="gvtgnuocngoai" placeholder="Chỉ nhập số" id="" required></div>
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

                                    $chucdanh = $_POST['chucdanh'];
                                    $slgvbienche = $_POST['slgvbienche'];
                                    $slgvhopdong = $_POST['slgvhopdong'];
                                    $slgvql = $_POST['slgvql'];
                                    $gvtgtrongnuoc = $_POST['gvtgtrongnuoc'];
                                    $gvtgnuocngoai = $_POST['gvtgnuocngoai'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang18 WHERE chucdanh = '$chucdanh' AND namhoc = '$year'");

                                    if ($slgvbienche==""|| $slgvhopdong==""|| $slgvql==""|| $gvtgtrongnuoc==""|| $gvtgnuocngoai=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }
                                    elseif(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của '.$chucdanh.' năm '.$year.' đã tồn tại!");</script>';
                                    } 
                                    else {
                                        $sql ="INSERT INTO `bang18` (`id`, `chucdanh`, `gvbienche`, `gvhopdong`, `gvquanly`, `gvthinhgiang`, `gvthinhgiangqt`, `namhoc`) VALUES (NULL, '$chucdanh', ' $slgvbienche', ' $slgvhopdong', ' $slgvql', ' $gvtgtrongnuoc', '$gvtgnuocngoai', '$year')";
                                        $result = mysqli_query($conn, $sql);
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