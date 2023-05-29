<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang20` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../formxem/bang20.php"</script>';