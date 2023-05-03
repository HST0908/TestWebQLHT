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
    <title>TÌNH TRẠNG TỐT NGHIỆP CỦA SINH VIÊN ĐẠI HỌC HỆ CHÍNH QUY</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
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
                        <div class="container_header"><h3 class="heading_title">TÌNH TRẠNG TỐT NGHIỆP CỦA SINH VIÊN ĐẠI HỌC HỆ CHÍNH QUY</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Các tiêu chí</div>
                                    <div class="container_box-input">
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">1. Số lượng sinh viên tốt nghiệp (người)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsvtn" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">2. Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tilesvtn" placeholder="Chỉ nhập số" id="" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">3. Đánh giá của sinh viên tốt nghiệp về chất lượng đào tạo của nhà trường:</div>
                                    <div class="container_box-input">A. Nhà trường không điều tra về vấn đề này → chuyển xuống câu 4</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title"></div>
                                    <div class="container_box-input">B. Nhà trường có điều tra về vấn đề này → điền các thông tin dưới đây</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">3.1 Tỷ lệ sinh viên trả lời đã học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svtl1" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">3.2 Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svtl2" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">3.3 Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svtl3" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4. Sinh viên có việc làm trong năm đầu tiên sau khi tốt nghiệp:</div>
                                    <div class="container_box-input">A. Nhà trường không điều tra về vấn đề này → chuyển xuống câu 5</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title"></div>
                                    <div class="container_box-input">B. Nhà trường có điều tra về vấn đề này → điền các thông tin dưới đây</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4.1 Tỷ lệ có việc làm đúng ngành đào tạo (%)</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">- Sau 6 tháng tốt nghiệp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tgtn1" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">- Sau 12 tháng tốt nghiệp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tgtn2" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4.2 Tỷ lệ có việc làm trái ngành đào tạo (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tilevctrai" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4.3 Tỷ lệ tự tạo được việc làm (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiletaovc" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4.4 Thu nhập bình quân/tháng của sinh viên có việc làm</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="thunhaptb" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">5. Đánh giá của nhà sử dụng về sinh viên tốt nghiệp có việc làm đúng ngành đào tạo:</div>
                                    <div class="container_box-input">A. Nhà trường không điều tra về vấn đề này → chuyển xuống kết thúc bảng này</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title"></div>
                                    <div class="container_box-input">B. Nhà trường có điều tra về vấn đề này → điền các thông tin dưới đây</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">5.1 Tỷ lệ sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiledapung" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">5.2 Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="cobandapung" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">5.3 Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiledtlai" placeholder="Chỉ nhập số" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" required></div>
                                </div>
                                
                                <input class="btnNhap" type="submit" value="Nhập" name="Nhap">
                            </form>
                            <?php
                                if(isset($_POST['Nhap'])){

                                    $n1 = $_POST['slsvtn'];
                                    $n2 = $_POST['tilesvtn'];
                                    $n3 = $_POST['svtl1'];
                                    $n4 = $_POST['svtl2'];
                                    $n5 = $_POST['svtl3'];
                                    $n6 = $_POST['tgtn1'];
                                    $n7 = $_POST['tgtn2'];
                                    $n8 = $_POST['tilevctrai'];
                                    $n9 = $_POST['tiletaovc'];
                                    $n10 = $_POST['thunhaptb'];
                                    $n11 = $_POST['tiledapung'];
                                    $n12 = $_POST['cobandapung'];
                                    $n13 = $_POST['tiledtlai'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang27 WHERE namhoc = '$year'");

                                    if(mysqli_num_rows($kn) > 0){
                                        echo '<script>alert("Dữ liệu của năm '.$year.' đã tồn tại!");</script>';
                                    }elseif($n1 !=""){

                                    $sql ="INSERT INTO `bang27` (`id`, `tieuchi`, `giatri`, `namhoc`) VALUES (NULL, 'Số lượng sinh viên tốt nghiệp (người)', '$n1', '$year'), 
                                    (NULL, 'Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)', '$n2', '$year'),
                                    (NULL, 'Tỷ lệ sinh viên trả lời đã học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)', '$n3', '$year'),
                                    (NULL, 'Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)', '$n4', '$year'),
                                    (NULL, 'Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp', '$n5', '$year'), 
                                    (NULL, 'Sau 6 tháng tốt nghiệp', '$n6', '$year'), 
                                    (NULL, 'Sau 12 tháng tốt nghiệp', '$n7', '$year'),
                                    (NULL, 'Tỷ lệ có việc làm trái ngành đào tạo (%)', '$n8', '$year'), 
                                    (NULL, 'Tỷ lệ tự tạo được việc làm (%)', '$n9', '$year'), 
                                    (NULL, 'Thu nhập bình quân/tháng của sinh viên có việc làm', '$n10', '$year'), 
                                    (NULL, 'Tỷ lệ sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%)', '$n11', '$year'),
                                    (NULL, 'Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)', '$n12', '$year'),
                                    (NULL, 'Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)', '$n13', '$year')";
                                        $result = mysqli_query($conn, $sql);
                                        if($result){
                                            echo '<script>alert("Nhập thành công!");</script>';
                                            echo '<script>window.location.href = "../public/homepage.php"</script>';
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