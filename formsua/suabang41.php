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
    <title>TỔNG SỐ THIẾT BỊ CHÍNH CỦA TRƯỜNG</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
        $sql = "SELECT * FROM bang41 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">TỔNG SỐ THIẾT BỊ CHÍNH CỦA TRƯỜNG</h3></div>
                        <div class="container_box">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$row['nam']?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tên phòng / Giảng đường / Lab</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="text" name="tenphong" placeholder="Nhập tên phòng" id="" value="<?=$row['tenphong']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số lượng phòng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="soluong" placeholder="Chỉ nhập số" id="" value="<?=$row['soluong']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Thiết bị</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="text" name="thietbi" placeholder="" id="" value="<?=$row['thietbi']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Đối tượng sử dụng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="doituongsd" placeholder="" id="" value="<?=$row['doituongsd']?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Diện tích</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dientich" placeholder="Chỉ nhập số" id="" value="<?=$row['dientich']?>" required></div>
                                </div>
                                <!-- tách -->
                                
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                    <?php 
                                            if($row['sohuu']=="X"){
                                                echo '<select class="category_option" name="hinhthucsd">';
                                                echo '<option class="category_option--item" value="Sở hữu" selected>Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                            }
                                            if($row['lienket']=="X"){
                                                echo '<select class="category_option" name="hinhthucsd">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết" selected>Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                            }
                                            if($row['thue']=="X"){
                                                echo '<select class="category_option" name="hinhthucsd">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê" selected>Thuê</option>';
                                                echo '</select>';
                                            }
                                        ?>
                                    </div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $tenphong = $_POST['tenphong'];
                                    $soluong = $_POST['soluong'];
                                    $thietbi = $_POST['thietbi'];
                                    $doituongsd = $_POST['doituongsd'];
                                    $dientich = $_POST['dientich'];
            
                                if($_POST['hinhthucsd'] =="Sở hữu"){$sohuu = "X";$lienket = "";$thue = "";}
                                if($_POST['hinhthucsd'] =="Liên kết"){$sohuu = "";$lienket = "X";$thue = "";}
                                if($_POST['hinhthucsd'] =="Thuê"){$sohuu = "";$lienket = "";$thue = "X";}
                                
                                    $sql = "UPDATE `bang41` SET `nam` = '$year', `tenphong` = '$tenphong', `soluong` = '$soluong' , `thietbi` = '$thietbi', `doituongsd` = '$doituongsd',  `dientich` = '$dientich', `sohuu` = '$sohuu' , `lienket` = '$lienket', `thue` = '$thue' WHERE `bang41`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang41.php"</script>';
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