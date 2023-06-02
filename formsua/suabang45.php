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
    <title>TỔNG THU TỪ CÁC HOẠT ĐỘNG NGHIÊN CỨU KHOA HỌC, CHUYỂN GIAO CÔNG NGHỆ VÀ PHỤC VỤ CỘNG ĐỒNG</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
        $sql = "SELECT * FROM bang45 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">TỔNG THU TỪ CÁC HOẠT ĐỘNG NGHIÊN CỨU KHOA HỌC, CHUYỂN GIAO CÔNG NGHỆ VÀ PHỤC VỤ CỘNG ĐỒNG</h3></div>
                        <div class="container_box">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $row['nam'] ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tổng thu từ các hoạt động nghiên cứu khoa học, chuyển giao công nghệ và phục vụ cộng đồng</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="thuNCKH" placeholder="Tổng thu" id="" value="<?= $row['thuNCKH'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $thuNCKH = $_POST['thuNCKH'];
                                
                                    $sql = "UPDATE `bang45` SET `thuNCKH` = '$thuNCKH', `nam` = '$year' WHERE `bang45`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang45.php"</script>';
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