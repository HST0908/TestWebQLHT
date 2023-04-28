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
    <title>Quản lý tài khoản</title>
</head>
<body>
    <?php
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    // phần header
    include_once "../public/header.php";
    ?>
        include_once "../public/header.php";
    ?>
    <div class="contain grid lager wide">
        <div class="row">
            <!-- phần menu -->
            <?php include_once "../public/menu.php"; ?>
            <!-- phần thân -->
            <div class="col l-10 m-12 c-12 app__content" >
                <div class="row">
                    <table class="table">
                        <tbody class="table_body">
                            <tr class="table_body--title">
                                <td class="table_body-header">Tài khoản</td>
                                <td class="table_body-header">Tên</td>
                                <td class="table_body-header">Quyền</td>
                                <td class="table_body-header">Thao tác</td>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM user";
                            $rs = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($rs)){
                                echo '<tr class="table_body--title">';
                                    echo '<td>'.$row['username'].'</td>';
                                    echo '<td>'.$row['ten'].'</td>';
                                    if($row['role']=="1"){
                                        echo '<td>admin</td>';
                                    }
                                    if($row['role']=="2"){
                                        echo '<td>Đơn vị chủ trì</td>';
                                    }
                                    if($row['role']=="3"){
                                        echo '<td>Đơn vị phối hợp</td>';
                                    }
                                    echo '<td><label class="btnsua"><a href="suauser.php?id='.$row['id'].'">
                                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                        <lord-icon
                                            src="https://cdn.lordicon.com/nnbhwnej.json"
                                            trigger="hover"
                                            colors="primary:#eeca66"
                                            style="width:35px;height:35px">
                                        </lord-icon></a></label>
                                        <label class="btnxoa"><a href="deleteuser.php?id='.$row['id'].'">
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
</body>
</html>