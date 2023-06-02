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
    <title>SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA VIẾT BÀI ĐĂNG TẠP CHÍ</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang34 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA VIẾT BÀI ĐĂNG TẠP CHÍ</h3></div>
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
                                    <div class="container_box-content-title">Số lượng cán bộ cơ hữu có bài báo đăng trên tạp chí</div>
                                    <div class="container_box-input">
                                    <?php if($row['slbaibao']=="Từ 1 đến 5 bài báo"){
                                        echo '<select class="category_option" name="slbaibao">';
                                        echo '<option class="category_option--item" value="Từ 1 đến 5 bài báo" selected>Từ 1 đến 5 bài báo</option>';
                                        echo '<option class="category_option--item" value="Từ 6 đến 10 bài báo ">Từ 6 đến 10 bài báo</option>';
                                        echo '<option class="category_option--item" value="Từ 11 đến 15 bài báo">Từ 11 đến 15 bài báo</option>';
                                        echo '<option class="category_option--item" value="Trên 15 bài báo">Trên 15 bài báo</option>';
                                        
                                        echo '</select>';
                                        }

                                        if($row['slbaibao']=="Từ 6 đến 10 bài báo"){
                                            echo '<select class="category_option" name="slbaibao">';
                                            echo '<option class="category_option--item" value="Từ 1 đến 5 bài báo" >Từ 1 đến 5 bài báo</option>';
                                            echo '<option class="category_option--item" value="Từ 6 đến 10 bài báo" selected>Từ 6 đến 10 bài báo</option>';
                                            echo '<option class="category_option--item" value="Từ 11 đến 15 bài báo">Từ 11 đến 15 bài báo</option>';
                                            echo '<option class="category_option--item" value="Trên 15 bài báo">Trên 15 bài báo</option>';
                                            
                                            echo '</select>';
                                        }

                                        if($row['slbaibao']=="Từ 11 đến 15 bài báo"){
                                            echo '<select class="category_option" name="slbaibao">';
                                            echo '<option class="category_option--item" value="Từ 1 đến 5 bài báo" >Từ 1 đến 5 bài báo</option>';
                                            echo '<option class="category_option--item" value="Từ 6 đến 10 bài báo">Từ 6 đến 10 bài báo</option>';
                                            echo '<option class="category_option--item" value="Từ 11 đến 15 bài báo" selected>Từ 11 đến 15 bài báo</option>';
                                            echo '<option class="category_option--item" value="Trên 15 bài báo">Trên 15 bài báo</option>';
                                            
                                            echo '</select>';
                                        }

                                        if($row['slbaibao']=="Trên 15 bài báo"){
                                            echo '<select class="category_option" name="slbaibao">';
                                            echo '<option class="category_option--item" value="Từ 1 đến 5 bài báo">Từ 1 đến 5 bài báo</option>';
                                            echo '<option class="category_option--item" value="Từ 6 đến 10 bài báo">Từ 6 đến 10 bài báo</option>';
                                            echo '<option class="category_option--item" value="Từ 11 đến 15 bài báo">Từ 11 đến 15 bài báo</option>';
                                            echo '<option class="category_option--item" value="Trên 15 bài báo"selected>Trên 15 bài báo</option>';
                                            
                                            echo '</select>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia viết tạp chí khoa học Quốc tế</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="sltcQT" placeholder="Chỉ nhập số" id="" value="<?=$row['sltcQT']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia viết tạp chí khoa học cấp Nghành trong nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="sltcTN" placeholder="Chỉ nhập số" id="" value="<?=$row['sltcTN']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia viết tạp chí / tập san của trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="sltcT" placeholder="Chỉ nhập số" id="" value="<?=$row['sltcT']?>" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form> 
                            <?php }
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $slbaibao = $_POST['slbaibao'];
                                    $sltcQT = $_POST['sltcQT'];
                                    $sltcTN = $_POST['sltcTN'];
                                    $sltcT = $_POST['sltcT'];

                                    $sql = "UPDATE `bang34` SET `nam` = '$year', `slbaibao` = '$slbaibao', `sltcQT` = '$sltcQT', `sltcTN` = '$sltcTN' , `sltcT` = '$sltcT' WHERE `bang34`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang34.php"</script>';
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