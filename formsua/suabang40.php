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
    <title>TỔNG SỐ ĐẦU SÁCH TRONG THƯ VIỆN CỦA NHÀ TRƯỜNG</title>
</head>
<body>
<?php 
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $id = $_REQUEST['id'];
        $sql = "SELECT * FROM bang40 WHERE id = $id";
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
                        <div class="container_header"><h3 class="heading_title">TỔNG SỐ ĐẦU SÁCH TRONG THƯ VIỆN CỦA NHÀ TRƯỜNG</h3></div>
                        <div class="container_box">
                            <?php 
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <form action="" method="post" class="formNhap">
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Năm học</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="2000" type="number" name="year" placeholder="2023" id="" value="<?=$row['nam']?>" required></div>
                                </div>

                                <div class="container_box-content">
                                    <div class="container_box-content-title">Khối ngành</div>
                                    <div class="container_box-input">
                                    <?php 
                                    if($row['khoinganh']=="Khối nghành I"){
                                    echo '<select class="category_option" name="khoinganh">';
                                        echo '<option class="category_option--item" value="Khối nghành I" selected>Khối nghành I</option>';
                                        echo '<option class="category_option--item" value="Khối nghành II">Khối nghành II</option>';
                                        echo '<option class="category_option--item" value="Khối nghành III">Khối nghành III</option>';
                                        echo '<option class="category_option--item" value="Khối nghành IV">Khối nghành IV</option>';
                                        echo '<option class="category_option--item" value="Khối nghành V">Khối nghành V</option>';
                                        echo '<option class="category_option--item" value="Khối nghành VI">Khối nghành VI</option>';
                                        echo '<option class="category_option--item" value="Khối nghành VII">Khối nghành VII</option>';
                                        echo '<option class="category_option--item" value="Các môn chung">Các môn chung</option>';
                                        
                                    echo '</select>';
                                    }

                                    if($row['khoinganh']=="Khối nghành II"){
                                    echo '<select class="category_option" name="khoinganh">';
                                        echo '<option class="category_option--item" value="Khối nghành I" >Khối nghành I</option>';
                                        echo '<option class="category_option--item" value="Khối nghành II" selected>Khối nghành II</option>';
                                        echo '<option class="category_option--item" value="Khối nghành III">Khối nghành III</option>';
                                        echo '<option class="category_option--item" value="Khối nghành IV">Khối nghành IV</option>';
                                        echo '<option class="category_option--item" value="Khối nghành V">Khối nghành V</option>';
                                        echo '<option class="category_option--item" value="Khối nghành VI">Khối nghành VI</option>';
                                        echo '<option class="category_option--item" value="Khối nghành VII">Khối nghành VII</option>';
                                        echo '<option class="category_option--item" value="Các môn chung">Các môn chung</option>';
                                        
                                    echo '</select>';
                                    }
                                    if($row['khoinganh']=="Khối nghành III"){
                                        echo '<select class="category_option" name="khoinganh">';
                                            echo '<option class="category_option--item" value="Khối nghành I">Khối nghành I</option>';
                                            echo '<option class="category_option--item" value="Khối nghành II">Khối nghành II</option>';
                                            echo '<option class="category_option--item" value="Khối nghành III" selected>Khối nghành III</option>';
                                            echo '<option class="category_option--item" value="Khối nghành IV">Khối nghành IV</option>';
                                            echo '<option class="category_option--item" value="Khối nghành V">Khối nghành V</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VI">Khối nghành VI</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VII">Khối nghành VII</option>';
                                            echo '<option class="category_option--item" value="Các môn chung">Các môn chung</option>';
                                            
                                        echo '</select>';
                                    }

                                            
                                    if($row['khoinganh']=="Khối nghành IV"){
                                        echo '<select class="category_option" name="khoinganh">';
                                            echo '<option class="category_option--item" value="Khối nghành I">Khối nghành I</option>';
                                            echo '<option class="category_option--item" value="Khối nghành II">Khối nghành II</option>';
                                            echo '<option class="category_option--item" value="Khối nghành III">Khối nghành III</option>';
                                            echo '<option class="category_option--item" value="Khối nghành IV" selected>Khối nghành IV</option>';
                                            echo '<option class="category_option--item" value="Khối nghành V">Khối nghành V</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VI">Khối nghành VI</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VII">Khối nghành VII</option>';
                                            echo '<option class="category_option--item" value="Các môn chung">Các môn chung</option>';
                                            
                                        echo '</select>';
                                    }
                                    if($row['khoinganh']=="Khối nghành V"){
                                        echo '<select class="category_option" name="khoinganh">';
                                            echo '<option class="category_option--item" value="Khối nghành I">Khối nghành I</option>';
                                            echo '<option class="category_option--item" value="Khối nghành II">Khối nghành II</option>';
                                            echo '<option class="category_option--item" value="Khối nghành III">Khối nghành III</option>';
                                            echo '<option class="category_option--item" value="Khối nghành IV">Khối nghành IV</option>';
                                            echo '<option class="category_option--item" value="Khối nghành V" selected>Khối nghành V</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VI">Khối nghành VI</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VII">Khối nghành VII</option>';
                                            echo '<option class="category_option--item" value="Các môn chung">Các môn chung</option>';
                                            
                                        echo '</select>';
                                    }
                                    if($row['khoinganh']=="Khối nghành VI"){
                                        echo '<select class="category_option" name="khoinganh">';
                                            echo '<option class="category_option--item" value="Khối nghành I">Khối nghành I</option>';
                                            echo '<option class="category_option--item" value="Khối nghành II">Khối nghành II</option>';
                                            echo '<option class="category_option--item" value="Khối nghành III">Khối nghành III</option>';
                                            echo '<option class="category_option--item" value="Khối nghành IV">Khối nghành IV</option>';
                                            echo '<option class="category_option--item" value="Khối nghành V">Khối nghành V</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VI" selected>Khối nghành VI</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VII">Khối nghành VII</option>';
                                            echo '<option class="category_option--item" value="Các môn chung">Các môn chung</option>';
                                            
                                        echo '</select>';
                                    }
                                    if($row['khoinganh']=="Khối nghành VII"){
                                        echo '<select class="category_option" name="khoinganh">';
                                            echo '<option class="category_option--item" value="Khối nghành I">Khối nghành I</option>';
                                            echo '<option class="category_option--item" value="Khối nghành II">Khối nghành II</option>';
                                            echo '<option class="category_option--item" value="Khối nghành III">Khối nghành III</option>';
                                            echo '<option class="category_option--item" value="Khối nghành IV">Khối nghành IV</option>';
                                            echo '<option class="category_option--item" value="Khối nghành V">Khối nghành V</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VI">Khối nghành VI</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VII" selected>Khối nghành VII</option>';
                                            echo '<option class="category_option--item" value="Các môn chung">Các môn chung</option>';
                                            
                                        echo '</select>';
                                    }
                                    if($row['khoinganh']=="Các môn chung"){
                                        echo '<select class="category_option" name="khoinganh">';
                                            echo '<option class="category_option--item" value="Khối nghành I">Khối nghành I</option>';
                                            echo '<option class="category_option--item" value="Khối nghành II">Khối nghành II</option>';
                                            echo '<option class="category_option--item" value="Khối nghành III">Khối nghành III</option>';
                                            echo '<option class="category_option--item" value="Khối nghành IV">Khối nghành IV</option>';
                                            echo '<option class="category_option--item" value="Khối nghành V">Khối nghành V</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VI">Khối nghành VI</option>';
                                            echo '<option class="category_option--item" value="Khối nghành VII">Khối nghành VII</option>';
                                            echo '<option class="category_option--item" value="Các môn chung" selected>Các môn chung</option>';
                                            
                                        echo '</select>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Đầu sách</div>
                                    <div class="container_box-input"><input class="content_input--item--input" min="0" type="number" name="dausach" placeholder="Chỉ nhập số" id="" value="<?=$row['dausach']?>" required></div>
                                </div>
                                <!-- tách -->
                                <div class="container_box-content">
                                    <div class="container_box-content-title">Bản sách</div>
                                    <div class="container_box-input"><input class="content_input--item--input" type="number" name="bansach" placeholder="Chỉ nhập số" id="" value="<?=$row['bansach']?>" required></div>
                                </div>
                                <!-- tách -->

                                <input class="btnNhap" type="submit" value="Sửa" name="sua">
                            </form>
                            <?php }
                                if(isset($_POST['sua'])){

                                    $year = $_POST['year'];
                                    $khoinganh = $_POST['khoinganh'];
                                    $dausach = $_POST['dausach'];
                                    $bansach = $_POST['bansach'];
                                
                                    $sql = "UPDATE `bang40` SET `nam` = '$year', `khoinganh` = '$khoinganh', `dausach` = '$dausach', `bansach` = '$bansach' WHERE `bang40`.`id` = $id";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo "<script>alert('Sửa thành công');</script>";
                                        echo '<script>window.location.href = "../formxem/bang40.php"</script>';
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