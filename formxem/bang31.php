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
    <title>SỐ LƯỢNG SÁCH CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC XUẤT BẢN TRONG 5 NĂM GẦN ĐÂY</title>
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
                        <div class="container_header"><h3 class="heading_title">SỐ LƯỢNG SÁCH CỦA TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH ĐƯỢC XUẤT BẢN TRONG 5 NĂM GẦN ĐÂY</h3></div>
                        <div class="toolbar">
                            <form name="dulieuex" id="dulieuex" action="../libs/exlbang31.php" method="post" class="gia111">
                                <input type="number" id="input1" value="" class="input_nam-in" name="nambd" placeholder="Nhập năm bắt đầu" required>
                                <input type="number" id="input2" value="" class="input_nam-in" name="namkt" placeholder="Nhập năm kết thúc" required>
                                <button class="btn btn_ex" name="ex"><span class="text">Xuất Excel</span><span class="icon"><i class="fa-solid fa-file-export"></i></span></a>
                                <button class="btn btn_xem" name="xem" id="xem" onclick="thaydoi()">xem</button>
                            </form>
                        </div>
                        <div class="container_box">
                            <table class="bang_xem" border="0">
                                <tbody class="than_bang_xem">
                                    
                                    <?php
                                    if(isset($_POST['xem'])){
                                        $nambd = $_POST['nambd'];
                                        $namkt = $_POST['namkt'];
                                        $sql1 = "SELECT * FROM bang31 where nam between $nambd and $namkt ORDER BY nam DESC";
                                        $result = mysqli_query($conn, $sql1);

                                        $sql = "select loaisach,";
                                            $i = $nambd;
                                            while ($i < $namkt) {
                                                $sql = $sql . " sum(if(nam=$i,soluong,0)) as 'năm $i',";
                                                $i++;
                                            }
                                            $sql = $sql . " sum(if(nam=$i,soluong,0))as 'năm $i'";
                                            $sql = $sql . " FROM bang31 where nam between $nambd and $namkt GROUP BY loaisach";
                                            echo "<tr class='bangxem--title'>";
                                            echo "<td><strong>Phân loại đề tài</strong></td>";
                                            $j = $nambd;
                                            while ($j <= $namkt) {
                                                echo " <td align='center'><strong> Năm $j </strong></td>";

                                                $j++;
                                            }
                                            echo " </tr class='bangxem--title'>";
                                            $kq = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($kq)) {

                                                echo "<tr class='bangxem--title'>";
                                                echo "<td>" . $row['loaisach'] . "</td>";
                                                //echo "<td align='center'>$row[1]</td>";
                                                $i = 1;
                                                for ($j = $nambd; $j <= $namkt; $j++) {
                                                    echo "<td align='center'><b>$row[$i]</b></td>";
                                                    $i++;
                                                }

                                                echo "</tr>	";
                                            }

                                            echo "</tr>	";
                                    }else{
                                        $sql = "SELECT * FROM bang31 order by nam desc";
                                        echo'<tr class="bangxem--title">
                                            <td class="bangxem-header">Loại sách</td>
                                            <td class="bangxem-header">Số lượng</td>
                                            <td class="bangxem-header">Năm học</td>
                                            <td class="bangxem-header">Thao tác</td>
                                        </tr>';
                                        $rs = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($rs)){
                                            echo '<tr class="bangxem--title">';
                                                echo '<td>'.$row['loaisach'].'</td>';
                                                echo '<td>'.$row['soluong'].'</td>';
                                                echo '<td>'.$row['nam'].'</td>';
                                                echo '<td><label class="btnsua"><a href="../formsua/suabang31.php?nam='.$row['nam'].'">
                                                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/nnbhwnej.json"
                                                        trigger="hover"
                                                        colors="primary:#eeca66"
                                                        style="width:35px;height:35px">
                                                    </lord-icon></a></label>
                                                    <label class="btnxoa"><a href="../formxoa/xoabang31.php?id='.$row['id'].'">
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
                                    }?>
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