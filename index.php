<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <title>Đăng nhập</title>
</head>
<body>
<?php
    include './connect.php';
    include './controlers.php';
    if(isset($_POST['login'])){
        $user = $_POST['taikhoan'];
        $password = $_POST['matkhau'];
        $sql = "SELECT * FROM user WHERE username = '$user' AND password = MD5('$password')";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        $checkuser = mysqli_num_rows($result);
        if($checkuser == 0){
           echo '<script>alert("Tài khoản hoặc mật khẩu không đúng")</script>';
        }else{
            $_SESSION['user'] = $data;
            checkusers();
            // echo '<script>window.location.href = "controlers.php"</script>';
        }
    }
?>
    <div class="box">
        <span class="borderLiner"></span>
        <form action="" method="POST" role="form">
            <h2>Đăng nhập</h2>
            <div class="inputBox">
                <input name="taikhoan" type="text" value="" required="required">
                <span>Tài khoản</span>
                <i class="horizon"></i>
            </div>
            <div class="inputBox">
                <input name="matkhau" id="pass" class="input_mk" type="password" value="" required="required">
                <span>Mật khẩu</span>
                <i class="horizon"></i>
                <div id="eye" class="eye"><i class="fa-solid fa-eye"></i></div>
            </div>
            <input name="login" class="btn-dangnhap" type="submit" value="Đăng nhập">
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="assets/js/app.js"></script>
</html>