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
    <title>DIỆN TÍCH ĐẤT, DIỆN TÍCH SÀN XÂY DỰNG</title>
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
                        <div class="container_header"><h3 class="heading_title"> DIỆN TÍCH ĐẤT, DIỆN TÍCH SÀN XÂY DỰNG</h3></div>
                        <div class="toolbar">
                            <form name="dulieuex" id="dulieuex" action="../libs/exlbang39.php" method="post" class="gia111">
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
                                        <th class="cot_bang_nhieu" rowspan="2">Năm</th>
                                        <th class="cot_bang_nhieu" rowspan="2">Nội dung</th>
                                        <th class="cot_bang_nhieu" rowspan="2">Diện tích</th>
                                        <th class="cot_bang_nhieu" colspan="3">Hình thức sử dụng</th>
                                        <th class="cot_bang_nhieu" rowspan="2">Thao tác</th>
                                    </tr>
                                    <tr>
                                        <th class="cot_bang_nhieu">Sở hữu</th>
                                        <th class="cot_bang_nhieu">Liên kết</th>
                                        <th class="cot_bang_nhieu">Thuê</th>
                                    </tr>
                                    <?php
                                    if(isset($_POST['xem'])){
                                        $nambd = $_POST['nambd'];
                                        $namkt = $_POST['namkt'];
                                        $sql = "SELECT * FROM bang39 where nam between $nambd and $namkt ORDER BY nam DESC";
                                    }else{
                                        $sql = "SELECT * FROM bang39 order by nam desc";

                                    }
                                    $rs = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_assoc($rs)){
                                        echo '<tr class="anbot">';
                                            echo '<td align="center">'.$row['nam'].'</td>';
                                            echo '<td align="center">'.$row['noidung'].'</td>';
                                            echo '<td align="center">'.$row['dientich'].' m<sup>2</sup>'.'</td>';
                                            echo '<td align="center">'.$row['sohuu'].'</td>';
                                            echo '<td align="center">'.$row['lienket'].'</td>';
                                            echo '<td align="center">'.$row['thue'].'</td>';
                                            echo '<td align="center"><label class="btnsua"><a href="../formsua/suabang39.php?nam='.$row['nam'].'">
                                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/nnbhwnej.json"
                                                    trigger="hover"
                                                    colors="primary:#eeca66"
                                                    style="width:35px;height:35px">
                                                </lord-icon></a></label>
                                                <label class="btnxoa"><a href="../formxoa/xoabang39.php?id='.$row['id'].'">
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