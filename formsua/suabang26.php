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
    $nh = $_REQUEST['namhoc'];
    $sql = "SELECT * FROM bang26 WHERE namhoc = $nh";

    $sql1 = "SELECT * FROM bang26 WHERE tieuchi = '1 Số lượng sinh viên tốt nghiệp (người)' and namhoc='$nh'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $soluong1 = $row1['giatri'];

    $sql2 = "SELECT * FROM bang26 WHERE tieuchi = '2 Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)' and namhoc='$nh'";
    $result2 = mysqli_query($conn,$sql2);
    $row2  = mysqli_fetch_assoc($result2);
    $soluong2 = $row2['giatri'];

    $sql3 = "SELECT * FROM bang26 WHERE tieuchi = '3 Tỷ lệ sinh viên trả lời đã học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)' and namhoc='$nh'";
    $result3 = mysqli_query($conn,$sql3);
    $row3  = mysqli_fetch_assoc($result3);
    $soluong3 = $row3['giatri'];

    $sql4 = "SELECT * FROM bang26 WHERE tieuchi = '4 Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)' and namhoc='$nh'";
    $result4 = mysqli_query($conn,$sql4);
    $row4  = mysqli_fetch_assoc($result4);
    $soluong4 = $row4['giatri'];

    $sql5 = "SELECT * FROM bang26 WHERE tieuchi = '5 Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp' and namhoc='$nh'";
    $result5 = mysqli_query($conn,$sql5);
    $row5 = mysqli_fetch_assoc($result5);
    $soluong5 = $row5['giatri'];

    $sql6 = "SELECT * FROM bang26 WHERE tieuchi = '6 Sau 6 tháng tốt nghiệp' and namhoc='$nh'";
    $result6 = mysqli_query($conn,$sql6);
    $row6  = mysqli_fetch_assoc($result6);
    $soluong6 = $row6['giatri'];

    $sql7 = "SELECT * FROM bang26 WHERE tieuchi = '7 Sau 12 tháng tốt nghiệp' and namhoc='$nh'";
    $result7 = mysqli_query($conn,$sql7);
    $row7  = mysqli_fetch_assoc($result7);
    $soluong7 = $row7['giatri'];

    $sql8 = "SELECT * FROM bang26 WHERE tieuchi = '8 Tỷ lệ có việc làm trái ngành đào tạo (%)' and namhoc='$nh'";
    $result8 = mysqli_query($conn,$sql8);
    $row8  = mysqli_fetch_assoc($result8);
    $soluong8 = $row8['giatri'];

    $sql9 = "SELECT * FROM bang26 WHERE tieuchi = '9 Tỷ lệ tự tạo được việc làm (%)' and namhoc='$nh'";
    $result9 = mysqli_query($conn,$sql9);
    $row9 = mysqli_fetch_assoc($result9);
    $soluong9 = $row9['giatri'];

    $sql10 = "SELECT * FROM bang26 WHERE tieuchi = '10 Thu nhập bình quân/tháng của sinh viên có việc làm' and namhoc='$nh'";
    $result10 = mysqli_query($conn,$sql10);
    $row10  = mysqli_fetch_assoc($result10);
    $soluong10 = $row10['giatri'];

    $sql11 = "SELECT * FROM bang26 WHERE tieuchi = '11 Tỷ lệ sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%)' and namhoc='$nh'";
    $result11 = mysqli_query($conn,$sql11);
    $row11  = mysqli_fetch_assoc($result11);
    $soluong11 = $row11['giatri'];

    $sql12 = "SELECT * FROM bang26 WHERE tieuchi = '12 Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)' and namhoc='$nh'";
    $result12 = mysqli_query($conn,$sql12);
    $row12  = mysqli_fetch_assoc($result12);
    $soluong12 = $row12['giatri'];

    $sql13 = "SELECT * FROM bang26 WHERE tieuchi = '13 Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)' and namhoc='$nh'";
    $result13 = mysqli_query($conn,$sql13);
    $row13  = mysqli_fetch_assoc($result13);
    $soluong13 = $row13['giatri'];
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
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="slsvtn" placeholder="Chỉ nhập số" id="" value="<?=$soluong1?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">2. Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tilesvtn" placeholder="Chỉ nhập số" id="" value="<?=$soluong2?>" required></div>
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
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svtl1" placeholder="Chỉ nhập số" value="<?=$soluong3?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">3.2 Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svtl2" placeholder="Chỉ nhập số" value="<?=$soluong4?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">3.3 Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svtl3" placeholder="Chỉ nhập số" id="" value="<?=$soluong5?>"></div>
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
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tgtn1" placeholder="Chỉ nhập số" value="<?=$soluong6?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">- Sau 12 tháng tốt nghiệp</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tgtn2" placeholder="Chỉ nhập số" value="<?=$soluong7?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4.2 Tỷ lệ có việc làm trái ngành đào tạo (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tilevctrai" placeholder="Chỉ nhập số" value="<?=$soluong8?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4.3 Tỷ lệ tự tạo được việc làm (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiletaovc" placeholder="Chỉ nhập số" value="<?=$soluong9?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">4.4 Thu nhập bình quân/tháng của sinh viên có việc làm</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="thunhaptb" placeholder="Chỉ nhập số" value="<?=$soluong10?>" id=""></div>
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
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiledapung" placeholder="Chỉ nhập số" value="<?=$soluong11?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">5.2 Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="cobandapung" placeholder="Chỉ nhập số" value="<?=$soluong12?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">5.3 Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="tiledtlai" placeholder="Chỉ nhập số" value="<?=$soluong13?>" id=""></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" value="<?=$nh?>" id="" required></div>
                                </div>
                                
                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php
                                if(isset($_POST['sua'])){

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
                                    
                                    if($n1 !=""|| $n1 > $soluong1 ||$n1 > $soluong1 ){
                                        $sql1 ="UPDATE `bang26` SET `giatri` = '$n1', `namhoc` = '$year' WHERE tieuchi = '1 Số lượng sinh viên tốt nghiệp (người)'  and namhoc = '$nh'";
                                        $rs1 = mysqli_query($conn,$sql1);
                                    }
                                    if($n2 !=""|| $n2 > $soluong2 ||$n2 > $soluong2 ){
                                        $sql2 =" UPDATE `bang26` SET `giatri` = '$n2', `namhoc` = '$year' WHERE tieuchi = '2 Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)'  and namhoc = '$nh'";
                                        $rs2 = mysqli_query($conn,$sql2);
                                    }
                                    if($n3 !=""|| $n3 > $soluong3 ||$n3 > $soluong3 ){
                                       $sql3 =" UPDATE `bang26` SET `giatri` = '$n3', `namhoc` = '$year' WHERE tieuchi = '3 Tỷ lệ sinh viên trả lời đã học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)'  and namhoc = '$nh'";
                                       $rs3 = mysqli_query($conn,$sql3);
                                    }
                                    if($n4 !=""|| $n4 > $soluong4 ||$n4 > $soluong4 ){
                                       $sql4 =" UPDATE `bang26` SET `giatri` = '$n4', `namhoc` = '$year' WHERE tieuchi = '4 Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%)'  and namhoc = '$nh'";
                                       $rs4 = mysqli_query($conn,$sql4);
                                    }
                                    if($n5!=""|| $n5> $soluong5||$n5> $soluong5){
                                       $sql5 =" UPDATE `bang26` SET `giatri` = '$n5', `namhoc` = '$year' WHERE tieuchi = '5 Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp'  and namhoc = '$nh'";
                                       $rs5 = mysqli_query($conn,$sql5);
                                    }
                                    if($n6 !=""|| $n6 > $soluong6 ||$n6 > $soluong3 ){
                                       $sql6 =" UPDATE `bang26` SET `giatri` = '$n6', `namhoc` = '$year' WHERE tieuchi = '6 Sau 6 tháng tốt nghiệp'  and namhoc = '$nh'";
                                       $rs6 = mysqli_query($conn,$sql6);
                                    }
                                    if($n7 !=""|| $n7 > $soluong7 ||$n7 < $soluong7 ){
                                       $sql7 =" UPDATE `bang26` SET `giatri` = '$n7', `namhoc` = '$year' WHERE tieuchi = '7 Sau 12 tháng tốt nghiệp'  and namhoc = '$nh'";
                                       $rs7 = mysqli_query($conn,$sql7);
                                    }
                                    if($n8 !=""|| $n8 > $soluong8 ||$n8 < $soluong8 ){
                                       $sql8 =" UPDATE `bang26` SET `giatri` = '$n8', `namhoc` = '$year' WHERE tieuchi = '8 Tỷ lệ có việc làm trái ngành đào tạo (%)'  and namhoc = '$nh'";
                                       $rs8 = mysqli_query($conn,$sql8);
                                    }
                                    if($n9 !=""|| $n9 > $soluong9 ||$n9 < $soluong9 ){
                                       $sql9 =" UPDATE `bang26` SET `giatri` = '$n9', `namhoc` = '$year' WHERE tieuchi = '9 Tỷ lệ tự tạo được việc làm (%)'  and namhoc = '$nh'";
                                       $rs9 = mysqli_query($conn,$sql9);
                                    }
                                    if($n10 !=""|| $n10 > $soluong10 ||$n10 < $soluong3 ){
                                       $sql10 =" UPDATE `bang26` SET `giatri` = '$n10', `namhoc` = '$year' WHERE tieuchi = '10 Thu nhập bình quân/tháng của sinh viên có việc làm'  and namhoc = '$nh'";
                                       $rs10 = mysqli_query($conn,$sql10);
                                    }
                                    if($n11 !=""|| $n11 > $soluong11 ||$n11 < $soluong11 ){
                                       $sql11 =" UPDATE `bang26` SET `giatri` = '$n11', `namhoc` = '$year' WHERE tieuchi = '11 Tỷ lệ sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%)'  and namhoc = '$nh'";
                                       $rs11 = mysqli_query($conn,$sql11);
                                    }
                                    if($n12 !=""|| $n12 > $soluong12 ||$n12 < $soluong12 ){
                                       $sql12 =" UPDATE `bang26` SET `giatri` = '$n12', `namhoc` = '$year' WHERE tieuchi = '12 Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)'  and namhoc = '$nh'";
                                       $rs12 = mysqli_query($conn,$sql12);
                                    }
                                    if($n13 !=""|| $n13 > $soluong13 ||$n13 < $soluong13 ){
                                       $sql13 =" UPDATE `bang26` SET `giatri` = '$n13', `namhoc` = '$year' WHERE tieuchi = '13 Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)'  and namhoc = '$nh'";
                                       $rs13 = mysqli_query($conn,$sql13);
                                    }
                                    if ($rs1) {
                                        echo '<script>alert("Sửa thành công!");</script>';
                                        echo '<script>window.location.href = "../formxem/bang26.php"</script>';
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