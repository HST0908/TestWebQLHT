<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang47` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../Danhmuc/bang47.php"</script>';
?>