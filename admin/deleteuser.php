<?php
include '../connect.php';
$id = $_REQUEST['id'];
if($id == "1"){
    echo '<script>alert("Không thể xóa admin!");</script>';
    echo '<script>window.location.href = "quanlytk.php"</script>';
    }else{
        $query = "DELETE FROM `user` WHERE id = $id";
        $result = mysqli_query($conn, $query);
        echo '<script>window.location.href = "quanlytk.php"</script>';
    }