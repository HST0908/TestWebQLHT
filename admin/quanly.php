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
                        <div class="category_item"><a href="../formxem/bang12.php" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang13.php" class="category_item--link"><h4 class="category_item--link-title">Các khoa đào tạo </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang14.php" class="category_item--link"><h4 class="category_item--link-title" title="Danh sách đơn vị trực thuộc (Bao gồm các trung tâm nghiên cứu, Chi nhánh/ các cơ sở đơn vị)">Danh sách đơn vị trực thuộc (Bao gồm các trung tâm nghiên cứu, Chi nhánh/ các cơ sở đơn vị)</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang15.php" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê số lượng giảng viên và nghiên cứu viên">Thống kê số lượng giảng viên và nghiên cứu viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang16.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê số lượng cán bộ quản lý, nhân viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang17.php" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê số lượng cán bộ, giảng viên và nhân viên">Thống kê số lượng cán bộ, giảng viên và nhân viên </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang18.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại giảng viên theo trình độ</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang19.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại giáo viên cơ hữu theo độ tuổi(Số người)</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang20.php" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê, phân loại giảng viên cơ hữu theo mức độ thường xuyên sử dụng ngoại ngữ và tin học cho công tác giảng dạy và nghiên cứu">Thống kê, phân loại giảng viên cơ hữu theo mức độ thường xuyên sử dụng ngoại ngữ và tin học cho công tác giảng dạy và nghiên cứu</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang21.php" class="category_item--link"><h4 class="category_item--link-title" title="Tổng số người học đăng ký dự thi vào CSGD, trúng tuyển và nhập học trong 5 năm gần đây hệ chính quy">Tổng số người học đăng ký dự thi vào CSGD, trúng tuyển và nhập học trong 5 năm gần đây hệ chính quy</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang22.php" class="category_item--link"><h4 class="category_item--link-title"title="Tổng số người học đăng ký dự thi vào CSGD, trúng tuyển và nhập học trong 5 năm gần đây hệ không chính quy">Tổng số người học đăng ký dự thi vào CSGD, trúng tuyển và nhập học trong 5 năm gần đây hệ không chính quy</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang23.php" class="category_item--link"><h4 class="category_item--link-title">Ký túc xá cho sinh viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang24.php" class="category_item--link"><h4 class="category_item--link-title">Sinh viên tham gia nghiên cứu khoa học</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang25.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê số lượng người học tốt nghiệp trong 5 năm gần đây</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang26.php" class="category_item--link"><h4 class="category_item--link-title">Tình trạng tốt nghiệp của sinh viên đại học hệ chính quy</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang27.php" class="category_item--link"><h4 class="category_item--link-title">Tình trạng tốt nghiệp của sinh viên cao đẳng hệ chính quy</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang28.php" class="category_item--link"><h4 class="category_item--link-title">Tổng số lượng sinh viên từng năm</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang29.php" class="category_item--link"><h4 class="category_item--link-title" title="Doanh thu từ nghiên cứu khoa học và chuyển giao công nghệ của trường đại học Sư Phạm Kỹ Thuật Vinh trong 5 năm gần đây">Doanh thu từ nghiên cứu khoa học và chuyển giao công nghệ của trường đại học Sư Phạm Kỹ Thuật Vinh trong 5 năm gần đây</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang30.php" class="category_item--link"><h4 class="category_item--link-title" title="Số lượng cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh tham gia thực hiện đề tài khoa học trong 5 năm gần đây">Số lượng cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh tham gia thực hiện đề tài khoa học trong 5 năm gần đây</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang31.php" class="category_item--link"><h4 class="category_item--link-title" title="Số lượng sách của trường đại học Sư Phạm Kỹ Thuật Vinh được xuất bản trong 5 năm gần đây">Số lượng sách của trường đại học Sư Phạm Kỹ Thuật Vinh được xuất bản trong 5 năm gần đây</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang32.php" class="category_item--link"><h4 class="category_item--link-title" title="Số lượng cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh tham gia viết sách trong 5 năm gần đây">Số lượng cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh tham gia viết sách trong 5 năm gần đây</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang33.php" class="category_item--link"><h4 class="category_item--link-title" title="Số lượng bài của các cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh được đăng tạp chí trong 5 năm gần đây">Số lượng bài của các cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh được đăng tạp chí trong 5 năm gần đây</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang34.php" class="category_item--link"><h4 class="category_item--link-title" title="Số lượng cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh tham gia viết bài đăng tạp chí trong 5 năm gần đây">Số lượng cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh tham gia viết bài đăng tạp chí trong 5 năm gần đây</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formxem/bang35.php" class="category_item--link"><h4 class="category_item--link-title" title="Số lượng bài báo khoa học do cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh báo cáo tại các hội nghị, hội thảo được đăng toàn văn trong tuyển tập công trình hay kỉ yếu trong 5 năm gần đây">Số lượng bài báo khoa học do cán bộ cơ hữu của trường đại học Sư Phạm Kỹ Thuật Vinh báo cáo tại các hội nghị, hội thảo được đăng toàn văn trong tuyển tập công trình hay kỉ yếu trong 5 năm gần đây</h4></a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="../assets/js/app.js"></script>
</html>