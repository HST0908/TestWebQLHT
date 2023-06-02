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
    <title>THỐNG KÊ SỐ LƯỢNG GIẢNG VIÊN VÀ NGHIÊN CỨU VIÊN</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang15 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ SỐ LƯỢNG GIẢNG VIÊN VÀ NGHIÊN CỨU VIÊN</h3></div>
                        <div class="container_box">
                            <?php 
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân cấp giảng viên và nghiên cứu viên</div>
                                    <div class="container_box-input">
                                        <?php if($row['phancap'] ==  ("Giảng Viên")){ 
                                            echo '<select name="phancap" class="category_optionNhap">';
                                            echo '<option value="Giảng Viên" class="category_option--item" selected>Giảng Viên</option>';
                                            echo '<option value="Nghiên cứu viên">Nghiên cứu viên</option>';
                                            echo '</select>';}
                                            if($row['phancap'] ==  ("Nghiên cứu viên")){
                                                echo '<select class="category_optionNhap" name="phancap">';
                                                echo '<option class="category_option--item" value="Giảng Viên">Giảng Viên</option>';
                                                echo '<option class="category_option--item" value="Nghiên cứu viên" selected>Nghiên cứu viên</option>';
                                                echo '</select>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cơ hữu/toàn thời gian</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slcohuu" placeholder="Chỉ nhập số" id=""  value="<?= $row['slcohuu']  ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng tiến sĩ cơ hữu (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="tscohuu" placeholder="Chỉ nhập số" id="" value="<?= $row['tscohuu']  ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng hợp đồng/thỉnh giảng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slhopdong" placeholder="Chỉ nhập số" id="" value="<?= $row['slhopdong']  ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng tiến sĩ hợp đồng (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tshd" placeholder="Chỉ nhập số" id="" value="<?= $row['tshopdong']  ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $row['namhoc']  ?>" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $phancap = $_POST['phancap'];
                                    $slcohuu = $_POST['slcohuu'];
                                    $tscohuu = $_POST['tscohuu'];
                                    $slhopdong = $_POST['slhopdong'];
                                    $tshd = $_POST['tshd'];
                                    $year = $_POST['year'];

                                    
                                    $sql = "UPDATE `bang15` SET `phancap` = '$phancap', `slcohuu` = '$slcohuu', `tscohuu` = '$tscohuu ', `slhopdong` = '$slhopdong', `tshopdong` = '$tshd', `namhoc` = '$year' WHERE `bang15`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang15.php"</script>';
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