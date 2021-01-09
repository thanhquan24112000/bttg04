<?php
require 'ketnoi.php';
$sql = "DELETE from user where userid = '" . $_GET['id'] . "'";
if(!mysqli_query($conn,$sql)){
    die('loi'.mysqli_error(mysqli_query($conn,$sql)));
}
else {
    header('location:xem.php');
}
?>