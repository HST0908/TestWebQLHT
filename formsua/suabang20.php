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
    <title> THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang20 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU THEO MỨC ĐỘ THƯỜNG XUYÊN SỬ DỤNG NGOẠI NGỮ VÀ TIN HỌC CHO CÔNG TÁC GIẢNG DẠY VÀ NGHIÊN CỨU </h3></div>
                        <div class="container_box">
                                <?php while($row = mysqli_fetch_assoc($result)){ ?> 
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tần suất sử dụng</div>
                                    <div class="container_box-input">
                                        <?php if($row['tansuatsd']=="Luôn sử dụng"){
                                            echo'<select class="category_optionNhap" name="tansuatsd">';
                                                echo'<option class="category_option--item" value="Luôn sử dụng" selected>Luôn sử dụng (trên 80% thời gian của công việc)</option>';
                                                echo'<option class="category_option--item" value="Thường sử dụng">Thường sử dụng (trên 60-80% thời gian của công việc)</option>';
                                                echo'<option class="category_option--item" value="Đôi khi sử dụng">Đôi khi sử dụng (trên 40-60% thời gian của công việc)</option>';
                                                echo'<option class="category_option--item" value="Ít khi sử dụng">Ít khi sử dụng (trên 20-40% thời gian của công việc)</option>';
                                                echo'<option class="category_option--item" value="Hiếm khi sử dụng">Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)</option>';
                                                echo'</select>';
                                            }
                                            if($row['tansuatsd']=="Thường sử dụng"){
                                                echo'<select class="category_optionNhap" name="tansuatsd">';
                                                    echo'<option class="category_option--item" value="Luôn sử dụng">Luôn sử dụng (trên 80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Thường sử dụng" selected>Thường sử dụng (trên 60-80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Đôi khi sử dụng">Đôi khi sử dụng (trên 40-60% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Ít khi sử dụng">Ít khi sử dụng (trên 20-40% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Hiếm khi sử dụng">Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)</option>';
                                                    echo'</select>';
                                                }
                                            if($row['tansuatsd']=="Đôi khi sử dụng"){
                                                echo'<select class="category_optionNhap" name="tansuatsd">';
                                                    echo'<option class="category_option--item" value="Luôn sử dụng">Luôn sử dụng (trên 80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Thường sử dụng">Thường sử dụng (trên 60-80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Đôi khi sử dụng" selected>Đôi khi sử dụng (trên 40-60% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Ít khi sử dụng">Ít khi sử dụng (trên 20-40% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Hiếm khi sử dụng">Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)</option>';
                                                    echo'</select>';
                                                }
                                            if($row['tansuatsd']=="Ít khi sử dụng"){
                                                echo'<select class="category_optionNhap" name="tansuatsd">';
                                                    echo'<option class="category_option--item" value="Luôn sử dụng">Luôn sử dụng (trên 80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Thường sử dụng">Thường sử dụng (trên 60-80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Đôi khi sử dụng">Đôi khi sử dụng (trên 40-60% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Ít khi sử dụng" selected>Ít khi sử dụng (trên 20-40% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Hiếm khi sử dụng">Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)</option>';
                                                    echo'</select>';
                                                }
                                            if($row['tansuatsd']=="Hiếm khi sử dụng"){
                                                echo'<select class="category_optionNhap" name="tansuatsd">';
                                                    echo'<option class="category_option--item" value="Luôn sử dụng">Luôn sử dụng (trên 80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Thường sử dụng">Thường sử dụng (trên 60-80% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Đôi khi sử dụng">Đôi khi sử dụng (trên 40-60% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Ít khi sử dụng">Ít khi sử dụng (trên 20-40% thời gian của công việc)</option>';
                                                    echo'<option class="category_option--item" value="Hiếm khi sử dụng" selected>Hiếm khi sử dụng hoặc không sử dụng (0-20% thời gian của công việc)</option>';
                                                    echo'</select>';
                                                }
                                            ?>
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tỷ lệ (%) giảng viên cơ hữu sử dụng ngoại ngữ và tin học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                 <!-- tách -->
                                 <div class="container_box-content">
                                    <div class="container_box-content-title">Ngoại ngữ</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tilengoaingu" placeholder="Chỉ nhập số" id="" value="<?=$row['gvngoaingu']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tin học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiletinhoc" placeholder="Chỉ nhập số" id="" value="<?=$row['gvtinhoc']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$row['namhoc']?>" required></div>
                                </div>
                                

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $tansuat = $_POST['tansuatsd'];
                                    $ngoaingu = $_POST['tilengoaingu'];
                                    $tinhoc = $_POST['tiletinhoc'];
                                    $year = $_POST['year'];
                                    
                                    $sql ="UPDATE `bang20` SET `tansuatsd` = '$tansuat', `gvngoaingu` = '$ngoaingu', `gvtinhoc` = '$tinhoc', `namhoc` = '$year' WHERE `bang20`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        echo '<script>alert("Sửa thành công!");</script>';
                                        echo '<script>window.location.href = "../formxem/bang20.php"</script>';
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