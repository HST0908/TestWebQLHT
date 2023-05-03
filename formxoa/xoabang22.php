<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang22` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../Danhmuc/bang22.php"</script>';