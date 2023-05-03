<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang32` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../Danhmuc/bang32.php"</script>';
?>