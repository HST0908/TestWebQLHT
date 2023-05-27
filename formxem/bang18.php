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
    <title>THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN THEO TRÌNH ĐỘ</title>
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
                    <div class="container">
                        <div class="container_header"><h3 class="heading_title"> THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN THEO TRÌNH ĐỘ</h3></div>
                        <div class="toolbar">
                            <form name="dulieuex" id="dulieuex" action="../libs/exlbang18.php" method="post" class="gia111">
                                <input type="number" id="input1" value="" class="input_nam-in" name="nambd" placeholder="Nhập năm bắt đầu" required>
                                <input type="number" id="input2" value="" class="input_nam-in" name="namkt" placeholder="Nhập năm kết thúc" required>
                                <button class="btn btn_ex" name="ex"><span class="text">Xuất Excel</span><span class="icon"><i class="fa-solid fa-file-export"></i></span></a>
                                <button class="btn btn_xem" name="xem" id="xem" onclick="thaydoi()">xem</button>
                            </form>
                        </div>
                        <div class="container_box">
                            <table class="bang_xem" border="0">
                                <tbody class="than_bang_xem">
                                    <tr class="bangxem--title">
                                        <td class="bangxem-header">STT</td>
                                        <td class="bangxem-header">Trình độ, học vị, chức danh</td>
                                        <td class="bangxem-header">GV trong biên chế trực tiếp giảng dạy</td>
                                        <td class="bangxem-header">GV hợp đồng dài hạn trực tiếp giảng dạy</td>
                                        <td class="bangxem-header">Giảng viên kiêm nhiệm là cán bộ quản lý</td>
                                        <td class="bangxem-header">Giảng viên thỉnh giảng trong nước</td>
                                        <td class="bangxem-header">Giảng viên thỉnh giảng quốc tế</td>
                                        <td class="bangxem-header">Tổng số</td>
                                        <td class="bangxem-header">Năm học</td>
                                        <td class="bangxem-header">Thao tác</td>
                                    </tr>
                                    <?php
                                    if(isset($_POST['xem'])){
                                        $nambd = $_POST['nambd'];
                                        $namkt = $_POST['namkt'];
                                        $sql = "SELECT * FROM bang18 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
                                    }else{
                                        $sql = "SELECT * FROM bang18 order by namhoc desc";

                                    }
                                    $rs = mysqli_query($conn,$sql);
                                    $i = 0;
                                    while($row = mysqli_fetch_assoc($rs)){
                                        $a= $row['gvbienche'];
                                        $b= $row['gvhopdong'];
                                        $c= $row['gvquanly'];
                                        $d= $row['gvthinhgiang'];
                                        $e= $row['gvthinhgiangqt'];
                                        $tong = $a+$b+$c+$d+$e;
                                        echo '<tr class="bangxem--title">';
                                            echo '<td>'.$i++.'</td>';
                                            echo '<td>'.$row['chucdanh'].'</td>';
                                            echo '<td  align=center>'.$row['gvbienche'].'</td>';
                                            echo '<td  align=center>'.$row['gvhopdong'].'</td>';
                                            echo '<td  align=center>'.$row['gvquanly'].'</td>';
                                            echo '<td  align=center>'.$row['gvthinhgiang'].'</td>';
                                            echo '<td  align=center>'.$row['gvthinhgiangqt'].'</td>';
                                            echo '<td  align=center>'.$tong.'</td>';
                                            echo '<td  align=center>'.$row['namhoc'].'</td>';
                                            echo '<td><label class="btnsua"><a href="../formxoa/xoabang17.php?id='.$row['id'].'">
                                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/nnbhwnej.json"
                                                    trigger="hover"
                                                    colors="primary:#eeca66"
                                                    style="width:35px;height:35px">
                                                </lord-icon></a></label>
                                                <label class="btnxoa"><a href="../formsua/suabang17.php?id='.$row['id'].'">
                                                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                <lord-icon
                                                src="https://cdn.lordicon.com/exkbusmy.json"
                                                trigger="hover"
                                                colors="outline:#121331,primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef"
                                                style="width:35px;height:35px">
                                            </lord-icon></label>
                                            </a>
                                            </td>';
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
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