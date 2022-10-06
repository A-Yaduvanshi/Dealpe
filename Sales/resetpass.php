<?php
include "../api/connection.php";

session_start();
echo $_SESSION['id'];
$password=$_GET['password'];
$C_password=$_GET['C_password'];

if ($password==$C_password) {
    $sql="UPDATE `sales` SET `Password`='$password' WHERE `Customer_email`='".$_SESSION['id']."'";
    $run=mysqli_query($conn,$sql);
    if ($run) {
        echo "<script>alert('Password changed')</script>";
        echo "<script>window.location.href='./SaleDashboard.php'</script>";
    } else {
        echo "<script>alert('Email Not Found')</script>";
        echo "<script>window.location.href='./SaleDashboard.php'</script>";
    }
} else {
    echo "<script>alert('Password not changed')</script>";
    echo "<script>window.location.href='./SaleDashboard.php'</script>";
}



?>