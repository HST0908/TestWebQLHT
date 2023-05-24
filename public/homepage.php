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
    <title>Home Page</title>
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
                    <?php if($user['ten'] == "Phòng Tổ chức cán bộ") {?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang12.php" class="category_item--link"><h4 class="category_item--link-title">Danh sách cán bộ lãnh đạo chủ chốt</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang14.php" class="category_item--link"><h4 class="category_item--link-title">Danh sách đơn vị thuộc và trực thuộc</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang15.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê số lượng giảng viên và nghiên cứu viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang16.php" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê số lượng cán bộ quản lý, nhân viên">Thống kê số lượng cán bộ quản lý, nhân viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang17.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê số lượng cán bộ, giảng viên và nhân viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang18.php" class="category_item--link"><h4 class="category_item--link-title" title="">Thống kê, phân loại giảng viên theo trình độ</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang19.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại giảng viên cơ hữu theo độ tuổi</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang20.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại giảng viên cơ hữu theo mức độ thường xuyên sử dụng ngoại ngữ và tin học cho công tác giảng dạy và nghiên cứu</h4></a></div>
                    </div>
                    <?php } elseif($user['ten'] == "Phòng Đào Tạo"){?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang13.php" class="category_item--link"><h4 class="category_item--link-title">Các khoa đào tạo</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang21.php" class="category_item--link"><h4 class="category_item--link-title">Tổng số người học đăng ký dự thi vào CSGD, trúng tuyển và nhập học hệ chính quy</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang22.php" class="category_item--link"><h4 class="category_item--link-title">Tổng số người học đăng ký dự thi vào CSGD, trúng tuyển và nhập học hệ không chính quy</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang25.php" class="category_item--link"><h4 class="category_item--link-title">Thống kê số lượng người học tốt nghiệp </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang31.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng sách của CSGD được xuất bản</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang32.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng cán bộ cơ hữu của CSGD tham gia viết sách</h4></a></div>
                    </div>
                    <?php } elseif($user['ten'] == "Phòng Công tác sinh viên"){ ?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang23.php" class="category_item--link"><h4 class="category_item--link-title">Ký túc xá cho sinh viên</h4></a></div>
                    </div>
                    <?php }elseif($user['ten'] == "Phòng KH-HTQT"){ ?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang24.php" class="category_item--link"><h4 class="category_item--link-title">Sinh viên tham gia nghiên cứu khoa học</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang28.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ của nhà trường được nghiệm thu </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang29.php" class="category_item--link"><h4 class="category_item--link-title">Doanh thu từ nghiên cứu khoa học và chuyển giao công nghệ của CSGD</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang30.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng cán bộ cơ hữu của CSGD tham gia thực hiện đề tài khoa học </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang33.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng bài của các cán bộ cơ hữu của CSGD được đăng tạp chí</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang34.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng cán bộ cơ hữu của CSGD tham gia viết bài đăng tạp chí</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang35.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng báo cáo khoa học do cán bộ cơ hữu của CSGD báo cáo tại các hội nghị, hội thảo, được đăng toàn văn trong tuyển tập công trình hay kỷ yếu </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang36.php" class="category_item--link"><h4 class="category_item--link-title">Số lượng cán bộ cơ hữu của CSGD có báo cáo khoa học tại các hội nghị, hội thảo được đăng toàn văn trong tuyển tập công trình hay kỷ yếu</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang37.php" class="category_item--link"><h4 class="category_item--link-title">Số bằng phát minh, sáng chế được cấp </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang38.php" class="category_item--link"><h4 class="category_item--link-title">Nghiên cứu khoa học của sinh viên</h4></a></div>
                    </div>
                    <?php } elseif($user['ten'] == "Bộ phận QHDN-VLSV"){ ?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang26.php" class="category_item--link"><h4 class="category_item--link-title">Tình trạng tốt nghiệp của sinh viên đại học hệ chính quy</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang27.php" class="category_item--link"><h4 class="category_item--link-title">Tình trạng tốt nghiệp của sinh viên cao đẳng hệ chính quy</h4></a></div>
                    </div>
                    <?php } elseif($user['ten'] == "Phòng QTTB"){ ?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang39.php" class="category_item--link"><h4 class="category_item--link-title">Diện tích đất, diện tích sàn xây dựng</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang41.php" class="category_item--link"><h4 class="category_item--link-title">Tổng số thiết bị chính của trường</h4></a></div>
                    </div>
                    <?php }elseif($user['ten'] == "Thư viện"){ ?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang40.php" class="category_item--link"><h4 class="category_item--link-title">Tổng số đầu sách trong thư viện của nhà trường</h4></a></div>
                    </div>
                    <?php } elseif($user['ten'] == "Phòng KT-TC"){ ?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang42.php" class="category_item--link"><h4 class="category_item--link-title">Tổng kinh phí từ các nguồn thu của trường</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang22.php" class="category_item--link"><h4 class="category_item--link-title">Tổng thu học phí (chỉ tính hệ chính quy) </h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang43.php" class="category_item--link"><h4 class="category_item--link-title">Tổng chi cho hoạt động nghiên cứu khoa học, chuyển giao công nghệ và phục vụ cộng đồng</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang44.php" class="category_item--link"><h4 class="category_item--link-title">Tổng thu từ hoạt động nghiên cứu khoa học, chuyển giao công nghệ và phục vụ cộng đồng</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang46.php" class="category_item--link"><h4 class="category_item--link-title">Tổng chi cho hoạt động đào tạo</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang47.php" class="category_item--link"><h4 class="category_item--link-title">Tổng chi cho phát triển đội ngũ</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="../formnhap/nhapbang48.php" class="category_item--link"><h4 class="category_item--link-title">Tổng chi cho hoạt động kết nối doanh nghiệp, tư vấn và hỗ trợ việc làm</h4></a></div>
                    </div>
                    <?php } elseif($user['role'] == "2"){ ?>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê số lượng cán bộ quản lý, giảng viên và nhân viên của đơn vị thực hiện CTĐT">Thống kê số lượng cán bộ quản lý, giảng viên và nhân viên của đơn vị thực hiện CTĐT</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại giảng viên</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Quy đổi số lượng giảng viên của đơn vị thực hiện CTĐT</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại giảng viên cơ hữu theo trình độ, giới tính và độ tuổi</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title" title="Thống kê, phân loại giảng viên cơ hữu theo mức độ thường xuyên sử dụng ngoại ngữ và tin học cho công tác giảng dạy và nghiên cứu">Thống kê, phân loại giảng viên cơ hữu theo mức độ thường xuyên sử dụng ngoại ngữ và tin học cho công tác giảng dạy và nghiên cứu</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title" title="Người học bao gồm học sinh, sinh viên, học viên cao học và nghiên cứu sinh">Người học bao gồm học sinh, sinh viên, học viên cao học và nghiên cứu sinh</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Thống kê, phân loại số lượng người học theo học CTĐT</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title">Số sinh viên quốc tế theo học CTĐT</h4></a></div>
                    </div>
                    <div class="col l-3 m-4 c-12">
                        <div class="category_item"><a href="#" class="category_item--link"><h4 class="category_item--link-title" title="Người học của CTĐT có chỗ ở trong ký túc xá/tổng số người học có nhu cầu">Người học của CTĐT có chỗ ở trong ký túc xá/tổng số người học có nhu cầu</h4></a></div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="../assets/js/app.js"></script>
</html>