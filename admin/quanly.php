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
    <title>Quản lý</title>
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