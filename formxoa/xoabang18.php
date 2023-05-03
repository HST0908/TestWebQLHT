<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang18` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../Danhmuc/bang18.php"</script>';