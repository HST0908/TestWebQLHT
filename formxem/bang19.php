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
    <title>THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU THEO ĐỘ TUỔI (SỐ NGƯỜI)</title>
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
                        <div class="container_header"><h3 class="heading_title"> THỐNG KÊ, PHÂN LOẠI GIẢNG VIÊN CƠ HỮU THEO ĐỘ TUỔI (SỐ NGƯỜI)</h3></div>
                        <div class="toolbar">
                            <form name="dulieuex" id="dulieuex" action="../libs/exlbang19.php" method="post" class="gia111">
                                <input type="number" id="input1" value="" class="input_nam-in" name="nambd" placeholder="Nhập năm bắt đầu" required>
                                <input type="number" id="input2" value="" class="input_nam-in" name="namkt" placeholder="Nhập năm kết thúc" required>
                                <button class="btn btn_ex" name="ex"><span class="text">Xuất Excel</span><span class="icon"><i class="fa-solid fa-file-export"></i></span></a>
                                <button class="btn btn_xem" name="xem" id="xem" onclick="thaydoi()">xem</button>
                            </form>
                        </div>
                        <div class="container_box">
                            <table class="bang_xem" border="0">
                                <tbody class="bang_xem--nhieu">
                                    <tr>
                                        <th class="cot_bang_nhieu"  rowspan="2">Trình độ/ học vị</th>
                                        <th class="cot_bang_nhieu"  rowspan="2">Số lượng</th>
                                        <th class="cot_bang_nhieu" colspan="2">Phân loại theo giới tính</th>
                                        <th class="cot_bang_nhieu" colspan="5">Phân loại theo độ tuổi người</th>
                                        <th class="cot_bang_nhieu" rowspan="2">Năm học</th>
                                        <th class="cot_bang_nhieu" rowspan="2">Thao tác</th>
                                    </tr>
                                    <tr>
                                        <th class="cot_bang_nhieu">Nam</th>
                                        <th class="cot_bang_nhieu">Nữ</th>
                                        <th class="cot_bang_nhieu"> < 30 </th>
                                        <th class="cot_bang_nhieu">30-40</th>
                                        <th class="cot_bang_nhieu">41-50</th>
                                        <th class="cot_bang_nhieu">51-60</th>
                                        <th class="cot_bang_nhieu">>60</th>
                                    </tr>
                                    <?php
                                    if(isset($_POST['xem'])){
                                        $nambd = $_POST['nambd'];
                                        $namkt = $_POST['namkt'];
                                        $sql = "SELECT * FROM bang19 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
                                    }else{
                                        $sql = "SELECT * FROM bang19 order by namhoc desc";

                                    }
                                    $rs = mysqli_query($conn,$sql);
                                    $i = 0;
                                    while($row = mysqli_fetch_assoc($rs)){
                                        echo '<tr>';
                                            echo '<td align="center">'.$row['hocvi'].'</td>';
                                            echo '<td  align="center">'.$row['soluong'].'</td>';
                                            echo '<td  align="center">'.$row['nam'].'</td>';
                                            echo '<td  align="center">'.$row['nu'].'</td>';
                                            echo '<td  align="center">'.$row['bamuoi'].'</td>';
                                            echo '<td  align="center">'.$row['bonmuoi'].'</td>';
                                            echo '<td  align="center">'.$row['nammuoi'].'</td>';
                                            echo '<td  align="center">'.$row['saumuoi'].'</td>';
                                            echo '<td  align="center">'.$row['trensaumuoi'].'</td>';
                                            echo '<td  align="center">'.$row['namhoc'].'</td>';
                                            echo '<td  align="center"><label class="btnsua"><a href="../formsua/suabang19.php?id='.$row['id'].'">
                                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/nnbhwnej.json"
                                                    trigger="hover"
                                                    colors="primary:#eeca66"
                                                    style="width:35px;height:35px">
                                                </lord-icon></a></label>
                                                <label class="btnxoa"><a href="../formxoa/xoabang19.php?id='.$row['id'].'">
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