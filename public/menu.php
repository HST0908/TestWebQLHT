<div class="col l-2 m-0 c-0">
    <div class="nav_menu">
        <div class="nav_menu--icon">
            <i class="fa-solid fa-bars"></i><span>Menu</span>
        </div>
        <ul class="nav_menu--list">
        <?php 
            if($user['ten'] == "Admin"){
                echo '
                <li id="home">
                    <i class="fa-solid fa-house"></i>
                    <a href="quanly.php">Home</a>
                </li>';
            }else{
                echo '
                <li id="home">
                    <i class="fa-solid fa-house"></i>
                    <a href="#">Home</a>
                </li>';
            }
            
            echo '
                <li id="matkhau">
                <i class="fa-solid fa-key"></i>
                <a href="#">Đổi mật khẩu</a> 
                </li>';
            
            if($user['role'] == "1"){
                echo '
                <li id="quanly">
                <i class="fa-sharp fa-solid fa-gears"></i>
                <a href="../admin/quanlytk.php">Quản lý tài khoản</a> 
                </li>';
            } ?>
            
            <li id="thoat">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="../logout.php">Đăng xuất</a>
            </li>
        </ul>
    </div>
</div>