<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang14` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../Danhmuc/bang14.php"</script>';