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
    <title>SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA THỰC HIỆN ĐỀ TÀI KHOA HỌC TRONG 5 NĂM GẦN ĐÂY</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang30 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG CÁN BỘ CƠ HỮU CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH THAM GIA THỰC HIỆN ĐỀ TÀI KHOA HỌC TRONG 5 NĂM GẦN ĐÂY</h3></div>
                        <div class="container_box">
                            <?php while($row = mysqli_fetch_assoc($result)){?>
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$row['nam']?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng đề tài</div>
                                    <div class="container_box-input">
                                    <?php if($row['sldetai']=="Từ 1 đến 3 đề tài"){
                                            echo '<select class="category_optionNhap" name="sldetai">';
                                                echo '<option class="category_option--item" value="Từ 1 đến 3 đề tài" selected>Từ 1 đến 3 đề tài</option>';
                                                echo '<option class="category_option--item" value="Từ 3 đến 6 đề tài ">Từ 3 đến 6 đề tài</option>';
                                                echo '<option class="category_option--item" value="Trên 6 đề tài">Trên 6 đề tài</option>';
                                             
                                                echo '</select>';
                                            }

                                            if($row['sldetai']=="Từ 3 đến 6 đề tài"){
                                                echo '<select class="category_optionNhap" name="sldetai">';
                                                    echo '<option class="category_option--item" value="Từ 1 đến 3 đề tài" selected>Từ 1 đến 3 đề tài</option>';
                                                    echo '<option class="category_option--item" value="Từ 3 đến 6 đề tài ">Từ 3 đến 6 đề tài</option>';
                                                    echo '<option class="category_option--item" value="Trên 6 đề tài">Trên 6 đề tài</option>';
                                                 
                                                    echo '</select>';
                                                }

                                                if($row['sldetai']=="Trên 6 đề tài"){
                                                    echo '<select class="category_optionNhap" name="sldetai">';
                                                        echo '<option class="category_option--item" value="Từ 1 đến 3 đề tài" selected>Từ 1 đến 3 đề tài</option>';
                                                        echo '<option class="category_option--item" value="Từ 3 đến 6 đề tài ">Từ 3 đến 6 đề tài</option>';
                                                        echo '<option class="category_option--item" value="Trên 6 đề tài">Trên 6 đề tài</option>';
                                                     
                                                        echo '</select>';
                                                    }
                                        ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Sô lượng cán bộ tham gia đề tài cấp Nhà nước</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slcbNN" placeholder="Chỉ nhập số" id="" value="<?=$row['slcbNN']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia đề tài cấp Bộ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="slcbB" placeholder="Chỉ nhập số" id="" value="<?=$row['slcbB']?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ tham gia đề tài cấp Trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slcbT" placeholder="Chỉ nhập số" id="" value="<?=$row['slcbT']?>" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $sldetai = $_POST['sldetai'];
                                    $slcbNN = $_POST['slcbNN'];
                                    $slcbB = $_POST['slcbB'];
                                    $slcbT = $_POST['slcbT'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang30 WHERE  sldetai = '$sldetai' and nam = '$year'");

                                    $sql = "UPDATE `bang30` SET `nam` = '$year', `sldetai` = '$sldetai', `slcbNN` = '$slcbNN', `slcbB` = '$slcbB' , `slcbT` = '$slcbT' WHERE `bang30`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang30.php"</script>';
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