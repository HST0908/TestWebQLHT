<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang37` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../formxem/bang37.php"</script>';
?>