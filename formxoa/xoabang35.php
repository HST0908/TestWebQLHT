<?php
include '../connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `bang35` WHERE id = $id";
$result = mysqli_query($conn, $query);
echo '<script>window.location.href = "../formxem/bang35.php"</script>';
?>