<?php 
include_once "../connect.php";
$user = (isset($_SESSION['user']))?$_SESSION['user']:'';
?>

<div class="header">
        <div class="header__navbar grid lager wide">
            <!-- logo -->
            <div class="row">
                <ul class=" header__navbar-list">
                    <li class=" header__navbar--logo">
                        <div>
                            <img class="logo_anh" src="../assets/img/logo.jpg" alt="logo">
                            <label for="inputcheck" class="menu__header"><i class="fa-solid fa-bars"></i></label>
                            <span class="logo_ten"> ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH</span>
                        </div>
                    </li>
                </ul>
                <!-- menu mobile -->
                <input type="checkbox" name="" id="inputcheck" class="input_check" hidden>
                <label for="inputcheck" class="menu-mobile-overlay"></label>
                <div class="nav_menu-mobile">
                    <label for="inputcheck" class="close_menu-mobile">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </label>
                    <ul class="nav_menu-mobile--list">
                        <?php 
                    if($user['ten'] == "Admin"){
                        echo '
                        <li id="home1" class="nav_menu-mobile--list__active">
                            <i class="fa-solid fa-house"></i>
                            <a href="../admin/quanly.php">Home</a>
                        </li>
                        
                        <li id="quanly1">
                            <i class="fa-sharp fa-solid fa-gears"></i>
                            <a href="../admin/quanlytk.php">Quản lý tài khoản</a>
                        </li>';
                    }else{
                        echo'
                        <li id="home1" class="nav_menu-mobile--list__active">
                        <i class="fa-solid fa-house"></i>
                        <a href="../public/homepage.php">Home</a>
                        </li>
                        ';
                    }
                        echo'
                        <li id="quanly">
                        <i class="fa-solid fa-key"></i>
                        <a href="../public/doimk.php">Đổi mật khẩu</a> 
                        </li>
                        <li id="thoat1">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <a href="../logout.php">Đăng xuất</a>
                        </li>';
                        ?>
                    </ul>
                </div>
            </div>
            <!-- tên người dùng -->
            <div class="header__qt">
                <ul>
                    <li><i class="fa-solid fa-user"></i></li>
                    <li><Span><?= $user['ten'] ?></Span></li>
                </ul>
            </div>
        </div>
    </div>