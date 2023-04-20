<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Quản lý</title>
</head>
<body>
    <div class="header">
        <div class="header__navbar grid lager wide">
            
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
                        <li id="home1" class="nav_menu-mobile--list__active">
                            <i class="fa-solid fa-house"></i>
                            <a href="#">Home</a>
                        </li>
                        <li id="quanly1">
                            <i class="fa-sharp fa-solid fa-gears"></i>
                            <a href="#">Quản lý tài khoản</a>
                        </li>
                        <li id="thoat1">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <a href="../logout.php">Thoát</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- tên người dùng -->
            <div class="header__qt">
                <ul>
                    <li><i class="fa-solid fa-user"></i></li>
                    <li><Span>Admin</Span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contain grid lager wide">
        <div class="row">
            <!-- phần menu -->
            <div class="col l-2 m-0 c-0">
                <div class="nav_menu">
                    <div class="nav_menu--icon">
                        <i class="fa-solid fa-bars"></i><span>Menu</span>
                    </div>
                    <ul class="nav_menu--list">
                        <li id="home">
                            <i class="fa-solid fa-house"></i>
                            <a href="#">Home</a>
                        </li>
                        <li id="quanly">
                            <i class="fa-sharp fa-solid fa-gears"></i>
                            <a href="#">Quản lý tài khoản</a>
                        </li>
                        <li id="thoat">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <a href="../logout.php">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- phần thân -->
            <div class="col l-10 m-12 c-12 app__content" >
                <div class="row">
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Các khoa đào tạo </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách đơn vị thuộc và trực thuộc </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê số lượng giảng viên và nghiên cứu viên">Thống kê số lượng giảng viên và nghiên cứu viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Thống kê số lượng cán bộ quản lý, nhân viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê số lượng cán bộ, giảng viên và nhân viên">Thống kê số lượng cán bộ, giảng viên và nhân viên </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại giảng viên theo trình độ</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="../assets/js/app.js"></script>
</html>