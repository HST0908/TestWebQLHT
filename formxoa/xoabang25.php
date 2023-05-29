<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang25` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../formxem/bang25.php"</script>';