<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang38` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../Danhmuc/bang38.php"</script>';
?>