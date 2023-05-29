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
    <title>TỔNG SỐ NGƯỜI HỌC ĐĂNG KÝ DỰ THI VÀO CSGD, TRÚNG TUYỂN VÀ NHẬP HỌC TRONG 5 NĂM GẦN ĐÂY HỆ KHÔNG CHÍNH QUY</title>
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
                        <div class="container_header"><h3 class="heading_title"> TỔNG SỐ NGƯỜI HỌC ĐĂNG KÝ DỰ THI VÀO CSGD, TRÚNG TUYỂN VÀ NHẬP HỌC TRONG 5 NĂM GẦN ĐÂY HỆ KHÔNG CHÍNH QUY</h3></div>
                        <div class="toolbar">
                            <form name="dulieuex" id="dulieuex" action="../libs/exlbang22.php" method="post" class="gia111">
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
                                        <td class="bangxem-header">Đối tượng</td>
                                        <td class="bangxem-header">Số thí sinh dự tuyển (người)</td>
                                        <td class="bangxem-header">Số trúng tuyển (người)</td>
                                        <td class="bangxem-header">Tỉ lệ cạnh tranh</td>
                                        <td class="bangxem-header">Số nhập học thực tế (người)</td>
                                        <td class="bangxem-header">Điểm tuyển đầu vào (thang điểm 30)</td>
                                        <td class="bangxem-header">Điểm trung bình của người học được tuyển</td>
                                        <td class="bangxem-header">Số lượng sinh viên quốc tế nhập học (người)</td>
                                        <td class="bangxem-header">Năm học</td>
                                        <td class="bangxem-header">Thao tác</td>
                                    </tr>
                                    <?php
                                    if(isset($_POST['xem'])){
                                        $nambd = $_POST['nambd'];
                                        $namkt = $_POST['namkt'];
                                        $sql = "SELECT * FROM bang22 where namhoc between $nambd and $namkt ORDER BY namhoc DESC";
                                    }else{
                                        $sql = "SELECT * FROM bang22 order by namhoc desc";

                                    }
                                    $rs = mysqli_query($conn,$sql);
                                    $i = 0;
                                    while($row = mysqli_fetch_assoc($rs)){
                                        echo '<tr class="bangxem--title">';
                                            echo '<td>'.$i++.'</td>';
                                            echo '<td>'.$row['doituong'].'</td>';
                                            echo '<td align=center>'.$row['sothisinh'].'</td>';
                                            echo '<td align=center>'.$row['sotrungtuyen'].'</td>';
                                            echo '<td align=center>'.$row['sotrungtuyen']/$row['sothisinh'].'</td>';
                                            echo '<td align=center>'.$row['sonhaphoc'].'</td>';
                                            echo '<td align=center>'.$row['diemdauvao'].'</td>';
                                            echo '<td align=center>'.$row['diemtb'].'</td>';
                                            echo '<td align=center>'.$row['slsinhvienqt'].'</td>';
                                            echo '<td>'.$row['namhoc'].'</td>';
                                            echo '<td><label class="btnsua"><a href="../formsua/suabang22.php?id='.$row['id'].'">
                                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/nnbhwnej.json"
                                                    trigger="hover"
                                                    colors="primary:#eeca66"
                                                    style="width:35px;height:35px">
                                                </lord-icon></a></label>
                                                <label class="btnxoa"><a href="../formxoa/xoabang22.php?id='.$row['id'].'">
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