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
    <title>SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH CÓ BÁO CÁO KHOA HỌC TẠI CÁC HỘI NGHỊ, HỘI THẢO ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
        $sql = "SELECT * FROM bang36 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH CÓ BÁO CÁO KHOA HỌC TẠI CÁC HỘI NGHỊ, HỘI THẢO ĐƯỢC ĐĂNG TOÀN VĂN TRONG TUYỂN TẬP CÔNG TRÌNH HAY KỶ YẾU</h3></div>
                        <div class="container_box">
                            <?php 
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$row['nam']?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ cơ hữu có báo cáo đăng trên tạp chí</div>
                                    <div class="container_box-input">
                                    <?php 
                                        if($row['slbaocao']=="Từ 1 đến 5 báo cáo"){
                                            echo '<select class="category_option" name="slbaocao">';
                                            echo '<option class="category_option--item" value="Từ 1 đến 5 báo cáo" selected>Từ 1 đến 5 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 6 đến 10 báo cáo">Từ 6 đến 10 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 11 đến 15 báo cáo">Từ 11 đến 15 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Trên 15 báo cáo">Trên 15 báo cáo</option>';
                                            
                                            echo '</select>';
                                        }

                                        if($row['slbaocao']=="Từ 6 đến 10 báo cáo"){
                                        echo '<select class="category_option" name="slbaocao">';
                                            echo '<option class="category_option--item" value="Từ 1 đến 5 báo cáo">Từ 1 đến 5 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 6 đến 10 báo cáo" selected>Từ 6 đến 10 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 11 đến 15 báo cáo">Từ 11 đến 15 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Trên 15 báo cáo">Trên 15 báo cáo</option>';
                                            
                                            echo '</select>';
                                        }

                                        if($row['slbaocao']=="Từ 11 đến 15 báo cáo"){
                                        echo '<select class="category_option" name="slbaocao">';
                                            echo '<option class="category_option--item" value="Từ 1 đến 5 báo cáo">Từ 1 đến 5 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 6 đến 10 báo cáo">Từ 6 đến 10 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 11 đến 15 báo cáo" selected>Từ 11 đến 15 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Trên 15 báo cáo">Trên 15 báo cáo</option>';
                                            
                                            echo '</select>';
                                        }

                                        if($row['slbaocao']=="Trên 15 báo cáo"){
                                        echo '<select class="category_option" name="slbaocao">';
                                            echo '<option class="category_option--item" value="Từ 1 đến 5 báo cáo">Từ 1 đến 5 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 6 đến 10 báo cáo">Từ 6 đến 10 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Từ 11 đến 15 báo cáo">Từ 11 đến 15 báo cáo</option>';
                                            echo '<option class="category_option--item" value="Trên 15 báo cáo" selected>Trên 15 báo cáo</option>';
                                            
                                            echo '</select>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ có báo cáo khoa học tại hội thảo Quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slbcQT" placeholder="Chỉ nhập số" id="" value="<?=$row['slbcQT']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ có báo cáo khoa học tại hội thảo trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slbcTN" placeholder="Chỉ nhập số" id="" value="<?=$row['slbcTN']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ có báo cáo khoa học tại hội thảo Trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="slbcT" placeholder="Chỉ nhập số" id="" value="<?=$row['slbcT']?>" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $slbaocao = $_POST['slbaocao'];
                                    $slbcQT = $_POST['slbcQT'];
                                    $slbcTN = $_POST['slbcTN'];
                                    $slbcT = $_POST['slbcT'];
                                
                                        $sql = "UPDATE `bang36` SET `nam` = '$year', `slbaocao` = '$slbaocao', `slbcQT` = '$slbcQT', `slbcTN` = '$slbcTN' , `slbcT` = '$slbcT' WHERE `bang36`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang36.php"</script>';
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