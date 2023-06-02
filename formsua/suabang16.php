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
    <title>THỐNG KÊ SỐ LƯỢNG CÁN BỘ QUẢN LÝ, NHÂN VIÊN</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang16 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ SỐ LƯỢNG CÁN BỘ QUẢN LÝ, NHÂN VIÊN</h3></div>
                        <div class="container_box">
                            <?php 
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân cấp cán bộ, nhân viên</div>
                                    <div class="container_box-input">
                                        <?php if($row['phancap'] ==  ("Cán bộ quản lý")){ 
                                            echo '<select name="phancap" class="category_optionNhap">';
                                            echo '<option value="Cán bộ quản lý" class="category_option--item" selected>Cán bộ quản lý</option>';
                                            echo '<option value="Nhân viên">Nhân viên</option>';
                                            echo '</select>';}
                                            if($row['phancap'] ==  ("Nhân viên")){
                                                echo '<select class="category_optionNhap" name="phancap">';
                                                echo '<option class="category_option--item" value="Cán bộ quản lý">Cán bộ quản lý</option>';
                                                echo '<option class="category_option--item" value="Nhân viên" selected>Nhân viên</option>';
                                                echo '</select>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cơ hữu/toàn thời gian</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slcohuu" placeholder="Chỉ nhập số" id="" value="<?= $row['slcohuu'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng hợp đồng/thỉnh giảng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slhopdong" placeholder="Chỉ nhập số" id="" value="<?= $row['slhopdong'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $row['namhoc'] ?>" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php }
                                if(isset($_POST['Nhap'])){

                                    $phancap = $_POST['phancap'];
                                    $slcohuu = $_POST['slcohuu'];
                                    $slhopdong = $_POST['slhopdong'];
                                    $year = $_POST['year'];

                                    $sql = "UPDATE `bang16` SET `phancap` = '$phancap', `slcohuu` = '$slcohuu', `slhopdong` = '$slhopdong', `namhoc` = '$year' WHERE `bang16`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang16.php"</script>';
                                    }
                                    else{
                                        echo "<script>alert('sửa thất bại');</script>";
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