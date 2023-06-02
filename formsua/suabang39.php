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
    <title>DIỆN TÍCH ĐẤT, DIỆN TÍCH SÀN XÂY DỰNG</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $nh = $_REQUEST['nam'];

        $sql = "SELECT * FROM bang39 WHERE noidung = 'Tổng diện tích đất trường' and nam='$nh'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $dttruong = $row['dientich'];
       

        $sql1 = "SELECT * FROM bang39 WHERE noidung = 'Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu' and nam='$nh'";
        $result1 = mysqli_query($conn,$sql1);
        $row1  = mysqli_fetch_assoc($result1);
        $dt21 = $row1['dientich'];
       

        $sql2 = "SELECT * FROM bang39 WHERE noidung = 'Thư viện, trung tâm học liệu' and nam='$nh'";
        $result2 = mysqli_query($conn,$sql2);
        $row2  = mysqli_fetch_assoc($result2);
        $dt22 = $row2['dientich'];
       

        $sql3 = "SELECT * FROM bang39 WHERE noidung = 'Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập' and nam='$nh'";
        $result3 = mysqli_query($conn,$sql3);
        $row3  = mysqli_fetch_assoc($result3);
        $dt23 = $row3['dientich'];

        $sql4 = "SELECT * FROM bang39 where nam='$nh'";
        $rs = mysqli_query($conn,$sql4);
      
        $sql5 = "SELECT * FROM bang39 where nam='$nh'";
        $rs1 = mysqli_query($conn,$sql5);

        $sql6 = "SELECT * FROM bang39 where nam='$nh'";
        $rs2 = mysqli_query($conn,$sql6);

        $sql7 = "SELECT * FROM bang39 where nam='$nh'";
        $rs3 = mysqli_query($conn,$sql7);
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
                        <div class="container_header"><h3 class="heading_title">DIỆN TÍCH ĐẤT, DIỆN TÍCH SÀN XÂY DỰNG</h3></div>
                        <div class="container_box">
                            <form action="" method="post" class="formNhap">

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tổng diện tích đất trường</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dttruong" placeholder="Chỉ nhập số" id="" value="<?=$dttruong?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                    <?php
                                            while($row =  mysqli_fetch_assoc($rs)){
                                                if($row['sohuu']==("X") && $row['noidung']==("Tổng diện tích đất trường")){
                                                    echo '<select class="category_option" name="hinhthucsd">';
                                                echo '<option class="category_option--item" value="Sở hữu" selected>Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['lienket']=="X" && $row['noidung']==("Tổng diện tích đất trường")){
                                                    echo '<select class="category_option" name="hinhthucsd">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết" selected>Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['thue']=="X" && $row['noidung']==("Tổng diện tích đất trường")){
                                                    echo '<select class="category_option" name="hinhthucsd">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê" selected>Thuê</option>';
                                                echo '</select>';
                                                }
                                            }
                                            
                                        ?>
                                    </div>
                                </div>

                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Tổng diện tích sàn xây dựng phục vụ đào tạo</div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="dt21" placeholder="Chỉ nhập số" id="" value="<?=$dt21?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                    <?php
                                            while($row =  mysqli_fetch_assoc($rs1)){
                                                if($row['sohuu']==("X") && $row['noidung']==("Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu")){
                                                    echo '<select class="category_option" name="hinhthucsd1">';
                                                echo '<option class="category_option--item" value="Sở hữu" selected>Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['lienket']=="X" && $row['noidung']==("Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu")){
                                                    echo '<select class="category_option" name="hinhthucsd1">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết" selected>Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['thue']=="X" && $row['noidung']==("Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu")){
                                                    echo '<select class="category_option" name="hinhthucsd1">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê" selected>Thuê</option>';
                                                echo '</select>';
                                                }
                                            }
                                            
                                        ?>
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Thư viện, trung tâm học liệu</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="dt22" placeholder="Chỉ nhập số" id="" value="<?=$dt22?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                    <?php
                                            while($row =  mysqli_fetch_assoc($rs2)){
                                                if($row['sohuu']==("X") && $row['noidung']==("Thư viện, trung tâm học liệu")){
                                                    echo '<select class="category_option" name="hinhthucsd2">';
                                                echo '<option class="category_option--item" value="Sở hữu" selected>Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['lienket']=="X" && $row['noidung']==("Thư viện, trung tâm học liệu")){
                                                    echo '<select class="category_option" name="hinhthucsd2">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết" selected>Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['thue']=="X" && $row['noidung']==("Thư viện, trung tâm học liệu")){
                                                    echo '<select class="category_option" name="hinhthucsd2">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê" selected>Thuê</option>';
                                                echo '</select>';
                                                }
                                            }
                                            
                                        ?>
                                    </div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="dt23" placeholder="Chỉ nhập số" id="" value="<?=$dt23?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Hình thức sử dụng</div>
                                    <div class="container_box-input">
                                    <?php
                                            while($row =  mysqli_fetch_assoc($rs3)){
                                                if($row['sohuu']==("X") && $row['noidung']==("Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập")){
                                                    echo '<select class="category_option" name="hinhthucsd3">';
                                                echo '<option class="category_option--item" value="Sở hữu" selected>Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['lienket']=="X" && $row['noidung']==("Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập")){
                                                    echo '<select class="category_option" name="hinhthucsd3">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết" selected>Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê">Thuê</option>';
                                                echo '</select>';
                                                }
                                                elseif($row['thue']=="X" && $row['noidung']==("Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập")){
                                                    echo '<select class="category_option" name="hinhthucsd3">';
                                                echo '<option class="category_option--item" value="Sở hữu">Sở hữu</option>';
                                                echo '<option class="category_option--item" value="Liên kết">Liên kết</option>';
                                                echo '<option class="category_option--item" value="Thuê" selected>Thuê</option>';
                                                echo '</select>';
                                                }
                                            }
                                            
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?= $nh?>" required></div>
                                </div>

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $dttruong = $_POST['dttruong'];
                                    $dt21 = $_POST['dt21'];
                                    $dt22 = $_POST['dt22'];
                                    $dt23 = $_POST['dt23'];
                
                                    if($_POST['hinhthucsd'] =="Sở hữu"){$sohuu = "X";$lienket = "";$thue = "";}
                                    if($_POST['hinhthucsd'] =="Liên kết"){$sohuu = "";$lienket = "X";$thue = "";}
                                    if($_POST['hinhthucsd'] =="Thuê"){$sohuu = "";$lienket = "";$thue = "X";}
                
                                    if($_POST['hinhthucsd1'] =="Sở hữu"){$sohuu1 = "X";$lienket1 = "";$thue1 = "";}
                                    if($_POST['hinhthucsd1'] =="Liên kết"){$sohuu1 = "";$lienket1 = "X";$thue1 = "";}
                                    if($_POST['hinhthucsd1'] =="Thuê"){$sohuu1 = "";$lienket1 = "";$thue1 = "X";}
                
                                    if($_POST['hinhthucsd2'] =="Sở hữu"){$sohuu2 = "X";$lienket2 = "";$thue2 = "";}
                                    if($_POST['hinhthucsd2'] =="Liên kết"){$sohuu2 = "";$lienket2 = "X";$thue2 = "";}
                                    if($_POST['hinhthucsd2'] =="Thuê"){$sohuu2 = "";$lienket2 = "";$thue2 = "X";}
                
                                    if($_POST['hinhthucsd3'] =="Sở hữu"){$sohuu3 = "X";$lienket3 = "";$thue3 = "";}
                                    if($_POST['hinhthucsd3'] =="Liên kết"){$sohuu3 = "";$lienket3 = "X";$thue3 = "";}
                                    if($_POST['hinhthucsd3'] =="Thuê"){$sohuu3 = "";$lienket3 = "";$thue3 = "X";}

                                    if ($dttruong ==""or $dt21==""or $dt22==""or$dt23==""or $year=="") {
                                        echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                    }else{
                                        if($dttruong !="") {
                                            $sql ="UPDATE `bang39` SET `dientich` = '$dttruong', `sohuu`='$sohuu', `lienket`='$lienket', `thue`='$thue',`nam` = '$year' WHERE `bang39`.`noidung` = 'Tổng diện tích đất trường' and nam = $nh";
                                            $result = mysqli_query($conn, $sql); 
                                        }
                                        if($dt21 !="") {
                                            $sql1 ="UPDATE `bang39` SET `dientich` = '$dt21', `sohuu`='$sohuu1', `lienket`='$lienket1', `thue`='$thue1',`nam` = '$year' WHERE `bang39`.`noidung` = 'Hội trường, giảng đường, các phòng học các loại phòng đa năng, phòng làm việc của giáo sư, phó giáo sư, giảng viên cơ hữu' and nam = $nh";
                                            $result = mysqli_query($conn, $sql1);
                                        }
                                        if($dt22 !="") {
                                            $sql2 ="UPDATE `bang39` SET `dientich` = '$dt22', `sohuu`='$sohuu2', `lienket`='$lienket2', `thue`='$thue2',`nam` = '$year' WHERE `bang39`.`noidung` = 'Thư viện, trung tâm học liệu' and nam = $nh";
                                            $result = mysqli_query($conn, $sql2);
                                        }
                                        if($dt23 !="") {
                                            $sql3 ="UPDATE `bang39` SET `dientich` = '$dt23', `sohuu`='$sohuu3', `lienket`='$lienket3', `thue`='$thue3',`nam` = '$year' WHERE `bang39`.`noidung` = 'Trung tâm nghiên cứu, phòng thí nghiệm, thực nghiệm, cơ sở thực hành, thực tập, luyện tập' and nam = $nh";
                                            $result = mysqli_query($conn, $sql3);
                                            if ($result) {
                                                echo '<script>alert("Sửa thành công!");</script>';
                                                echo '<script>window.location.href = "../formxem/bang39.php"</script>';
                                            }
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