<?php
include "../api/connection.php";

session_start();


$password=$_GET['password'];
$C_password=$_GET['C_password'];
$custom_id = $_GET['custom_id'];

$sql="UPDATE `sales` SET `Password`='$password' WHERE `id`='".$custom_id."'";
$run=mysqli_query($conn,$sql);
if ($run) {
        echo "<script>alert('Password changed')</script>";
        echo "<script>window.location.href='./'</script>";
        // echo "password is change";
} else {
        echo "<script>alert('Email Not Found')</script>";
        echo "<script>window.location.href='./'</script>";
        // echo "password is not change";

}



?>