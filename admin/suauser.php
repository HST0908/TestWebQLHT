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
    <title>Quản lý tài khoản</title>
</head>
<body>
    <?php
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    // phần header
    include_once "../public/header.php";
    $id = $_REQUEST['id'];
        $sql = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($conn,$sql);
    ?>

    <div class="contain grid lager wide">
        <div class="row">
            <!-- phần menu -->
            <?php include_once "../public/menu.php"; ?>
            <!-- phần thân -->
            <div class="col l-10 m-12 c-12 app__content" >
                <div class="row">
                    <div class="baophu">
                        <div class="containuser">
                            <div class="hopchua">
                            <?php while($row = mysqli_fetch_assoc($result)){?>
                                <span class="containuser_title">Sửa Tài khoản</span>
                                <form action="" name="suauser" method="post">
                                    <span class="hopchua_title" >Tài khoản</span>
                                    <input class="containuser_title--input" type="text" name="taikhoan" value="<?=$row['username'] ?>"  required="required" placeholder="Nhập tài khoản">
                                    <span class="hopchua_title" >tên</span>
                                    <input class="containuser_title--input" value="<?=$row['ten'] ?>" type="text" readonly>
                                    <span class="hopchua_title" >Mật khẩu</span>
                                    <input class="containuser_title--input" type="password" name="matkhau" value=""  required="required" placeholder="Nhập mật khẩu mới">
                                    <span class="hopchua_title" >Nhập lại mật khẩu</span>
                                    <input class="containuser_title--input" type="password" name="matkhau2" value=""  required="required" placeholder="Nhập lại mật khẩu">
                                    <span class="hopchua_title" >Quyền</span>
                                    <?php if($row['role']=="1"){
                                        echo'<select class="category_option" name="role">';
                                        echo'<option class="category_option--item" value="1" selected>admin</option>';
                                        echo'<option class="category_option--item" value="2">Đơn vị chủ trì</option>';
                                        echo'<option class="category_option--item" value="3">Đơn vị phối hợp</option>';
                                        echo'</select>';}
                                    if($row['role']=="2"){
                                        echo'<select class="category_option" name="role">';
                                        echo'<option class="category_option--item" value="1">admin</option>';
                                        echo'<option class="category_option--item" value="2" selected>Đơn vị chủ trì</option>';
                                        echo'<option class="category_option--item" value="3">Đơn vị phối hợp</option>';
                                        echo'</select>';}
                                    if($row['role']=="3"){
                                        echo'<select class="category_option" name="role">';
                                        echo'<option class="category_option--item" value="1">admin</option>';
                                        echo'<option class="category_option--item" value="2">Đơn vị chủ trì</option>';
                                        echo'<option class="category_option--item" value="3" selected>Đơn vị phối hợp</option>';
                                        echo'</select>';}?>
                                    <input type="submit" name="sua" class="btn btnsua1" value="Sửa">
                                </form>
                                <?php } 
                                    if (isset($_POST['sua'])) {

                                        $user = $_POST['taikhoan'];
                                        $pass = $_POST['matkhau'];
                                        $pass2 = $_POST['matkhau2'];
                                        $role = $_POST['role'];

                                        if ($user=="" || $pass=="" || $pass2=="") {
                                            echo '<script>alert("nhập đầy đủ các trường!");</script>';
                                        }
                                         else {
                                            if($pass == $pass2){
                                                $sql = "UPDATE `user` SET `username` = '$user', `password` = MD5('$pass'), `role` = '$role' WHERE `user`.`id` = $id";
                                                $result = mysqli_query($conn, $sql);
                                                if ($result) {
                                                    echo '<script>alert("Sửa thành công!");</script>';
                                                    echo '<script>window.location.href = "quanlytk.php"</script>';
                                                }
                                            }else {
                                                echo '<script>alert("mật khẩu không trùng khớp");</script>';
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
    </div>
</body>
</html>