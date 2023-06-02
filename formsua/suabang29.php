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
    <title>DOANH THU TỪ NGHIÊN CỨU KHOA HỌC VÀ CHUYỂN GIAO CÔNG NGHỆ CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH TRONG 5 NĂM GẦN ĐÂY</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $nh = $_REQUEST['nam'];
    $sql = "SELECT * FROM bang29 where nam = $nh";
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
                        <div class="container_header"><h3 class="heading_title">DOANH THU TỪ NGHIÊN CỨU KHOA HỌC VÀ CHUYỂN GIAO CÔNG NGHỆ CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH TRONG 5 NĂM GẦN ĐÂY</h3></div>
                        <div class="container_box">
                                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $nh ?:"" ?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Doanh thu từ NCKH và chuyển giao công nghệ (triệu VNĐ)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="doanhthu1" placeholder="Chỉ nhập số" id="" value="<?= $row['doanhthu'] ?:"" ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tỷ lệ doanh thu từ NCKH và chuyển giao công nghệ so với tổng kinh phí đầu vào của CSGD (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="text" name="doanhthu2" placeholder="Chỉ nhập số" id="" value="<?= $row['tiledoanhthu'] ?:"" ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tỷ số doanh thu từ NCKH và chuyển giao công nghệ trên cán bộ cơ hữu (triệu VNĐ/ người)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="doanhthu3" placeholder="Chỉ nhập số" id="" value="<?= $row['tisodoanhthu'] ?:"" ?>" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $dt1 = $_POST['doanhthu1'];
                                    $dt2 = $_POST['doanhthu2'];
                                    $dt3 = $_POST['doanhthu3'];
                                    $year = $_POST['year'];
                                    
                                    if($dt1 !="" || $dt1 != ($row['doanhthu']) || $dt2 !="" || $dt2 != ($row['tiledoanhthu'])|| $dt3 !="" || $dt3 != ($row['tisodoanhthu'])) {
                                        $sql1 ="UPDATE `bang29` SET `doanhthu` = '$dt1', `tiledoanhthu` = '$dt2', `tisodoanhthu` = '$dt3', `nam` = '$year' WHERE nam = $nh";
                                        $rs1 = mysqli_query($conn, $sql1);
                                        if ($result) {
                                            echo '<script>alert("Sửa thành công!");</script>';
                                            echo '<script>window.location.href = "../formxem/bang29.php"</script>';
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