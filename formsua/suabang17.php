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
    <title>THỐNG KÊ SỐ LƯỢNG CÁN BỘ, GIẢNG VIÊN VÀ NHÂN VIÊN (GỌI CHUNG LÀ CÁN BỘ) CỦA CSGD THEO GIỚI TÍNH</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang17 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ SỐ LƯỢNG CÁN BỘ, GIẢNG VIÊN VÀ NHÂN VIÊN </br>(GỌI CHUNG LÀ CÁN BỘ) CỦA CSGD THEO GIỚI TÍNH</h3></div>
                        <div class="container_box">
                            <?php 
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Phân loại</div>
                                    <div class="container_box-input">
                                    <?php if($row['phanloai'] ==  ("trong biên chế")){ 
                                        echo '<select name="phancap" class="category_optionNhap">';
                                        echo '<optgroup label="Cán bộ cơ hữu">';
                                        echo '<option value="trong biên chế" class="category_option--item" selected>Cán bộ trong biên chế</option>';
                                        echo '<option value="hợp đồng dài hạn">Cán bộ hợp đồng dài hạn</option>';
                                        echo '<optgroup label="Các cán bộ khác">';
                                        echo '<option value="hợp đồng ngắn hạn">Cán bộ hợp đồng ngắn hạn</option>';
                                        echo '</select>';
                                        }
                                        if($row['phanloai'] ==  ("hợp đồng dài hạn")){
                                        echo '<select name="phancap" class="category_optionNhap">';
                                        echo '<optgroup label="Cán bộ cơ hữu">';
                                        echo '<option value="trong biên chế" class="category_option--item">Cán bộ trong biên chế</option>';
                                        echo '<option value="hợp đồng dài hạn" selected>Cán bộ hợp đồng dài hạn</option>';
                                        echo '<optgroup label="Các cán bộ khác">';
                                        echo '<option value="hợp đồng ngắn hạn">Cán bộ hợp đồng ngắn hạn</option>';
                                        echo '</select>';
                                        }
                                        if($row['phanloai'] ==  ("hợp đồng ngắn hạn")){
                                            echo '<select name="phancap" class="category_optionNhap">';
                                            echo '<optgroup label="Cán bộ cơ hữu">';
                                            echo '<option value="trong biên chế" class="category_option--item">Cán bộ trong biên chế</option>';
                                            echo '<option value="hợp đồng dài hạn">Cán bộ hợp đồng dài hạn</option>';
                                            echo '<optgroup label="Các cán bộ khác">';
                                            echo '<option value="hợp đồng ngắn hạn" selected>Cán bộ hợp đồng ngắn hạn</option>';
                                            echo '</select>';
                                            } ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ nam</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slnam" placeholder="Chỉ nhập số" id="" value="<?= $row['nam'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng cán bộ nữ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slnu" placeholder="Chỉ nhập số" id="" value="<?= $row['nu'] ?>" required></div>
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

                                    $phancap = $_POST['phancap'];
                                    $slnam = $_POST['slnam'];
                                    $slnu = $_POST['slnu'];
                                    $year = $_POST['year'];

                                    
                                    $sql = "UPDATE `bang17` SET `phanloai` = '$phancap', `nam` = '$slnam', `nu` = '$slnu', `namhoc` = '$year' WHERE `bang17`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang17.php"</script>';
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