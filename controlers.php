<?php
function checkusers(){
    $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
    $role = $user['role'];
    $ten = $user['ten'];
    if($role = '1'){
        header('location:./admin/quanly.php');
    }
}