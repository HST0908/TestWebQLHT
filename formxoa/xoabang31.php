<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang31` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../formxem/bang31.php"</script>';
?>