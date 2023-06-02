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
    <title>CÁC KHOA ĐÀO TẠO CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM bang13 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">CÁC KHOA ĐÀO TẠO CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH</h3></div>
                        <div class="container_box">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Khoa/Viện đào tạo</div>
                                    <div class="container_box-input">                                                
                                    <?php 
                                        if($row['khoa'] ==  ("Cơ khí động lực")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực" selected>Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Cơ khí chế tạo")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo" selected>Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Điện")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện" selected>Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Điện tử")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử" selected>Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Tin")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin" selected>Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Kinh tế")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế" selected>Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Giáo dục đại cương")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương" selected>Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Lý luận chính trị")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị" selected>Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Ngoại ngữ")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ" selected>Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm">Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        if($row['khoa'] ==  ("Sư phạm")){ 
                                            echo '<select name="khoa" class="category_optionNhap">';
                                            echo '<option class="category_option--item" value="Cơ khí động lực">Cơ khí động lực</option>';
                                            echo '<option class="category_option--item" value="Cơ khí chế tạo">Cơ khí chế tạo</option>';
                                            echo '<option class="category_option--item" value="Điện">Điện</option>';
                                            echo '<option class="category_option--item" value="Điện tử">Điện tử</option>';
                                            echo '<option class="category_option--item" value="Tin">Tin</option>';
                                            echo '<option class="category_option--item" value="Kinh tế">Kinh tế</option>';
                                            echo '<option class="category_option--item" value="Giáo dục đại cương">Giáo dục đại cương</option>';
                                            echo '<option class="category_option--item" value="Lý luận chính trị">Lý luận chính trị</option>';
                                            echo '<option class="category_option--item" value="Ngoại ngữ">Ngoại ngữ</option>';
                                            echo '<option class="category_option--item" value="Sư phạm" selected>Sư phạm</option>';
                                            echo '</select>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ Đại học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">CTĐT</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ctdtdaihoc" placeholder="Chỉ nhập số" id="" value="<?= $row['ctdtdh'] ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số Sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svdaihoc" placeholder="Chỉ nhập số" id="" value="<?= $row['svdh'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ Sau đại học</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">CTĐT</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ctdtsaudaihoc" placeholder="Chỉ nhập số" id="" value="<?= $row['ctdtsaudh'] ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số Sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svsaudaihoc" placeholder="Chỉ nhập số" id="" value="<?= $row['svsaudh'] ?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hệ Khác</div>
                                    <div class="container_box-input"></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">CTĐT</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="ctdtkhac" placeholder="Chỉ nhập số" id="" value="<?= $row['ctdtkhac'] ?>" required></div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Số Sinh viên</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="svkhac" placeholder="Chỉ nhập số" id="" value="<?= $row['svkhac'] ?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $row['namhoc'] ?>" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $khoa = $_POST['khoa'];
                                    $ctdtdh = $_POST['ctdtdaihoc'];
                                    $svdh = $_POST['svdaihoc'];
                                    $ctdtsaudh = $_POST['ctdtsaudaihoc'];
                                    $svsaudh = $_POST['svsaudaihoc'];
                                    $ctdtkhac = $_POST['ctdtkhac'];
                                    $svkhac = $_POST['svkhac'];
                                    $year = $_POST['year'];
                                    $kn = mysqli_query($conn, "SELECT * FROM bang13 WHERE khoa = '$khoa' AND namhoc = '$year'");

                                    $sql = "UPDATE `bang13` SET `khoa` = '$khoa', `ctdtdh` = '$ctdtdh', `svdh` = '$svdh', `ctdtsaudh` = '$ctdtsaudh', `svsaudh` = '$svsaudh', `ctdtkhac` = '$ctdtkhac', `svkhac` = '$svkhac', `namhoc` = '$year' WHERE `bang13`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang13.php"</script>';
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