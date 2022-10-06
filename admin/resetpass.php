<?php
include "../api/connection.php";

session_start();
echo $_SESSION['sess_user'];
$password=$_GET['password'];
$C_password=$_GET['C_password'];

if ($password==$C_password) {
    $sql="UPDATE `franchisesignup` SET `Password`='$password' WHERE `Business_email`='".$_SESSION['sess_user']."'";
$run=mysqli_query($conn,$sql);
if ($run) {
    echo "<script>alert('Password changed')</script>";
    echo "<script>window.location.href='./franchisedashboard.php'</script>";
} else {
    echo "<script>alert('Email Not Found')</script>";
    echo "<script>window.location.href='./franchisedashboard.php'</script>";
}

} else {
    echo "<script>alert('Password not changed')</script>";
    echo "<script>window.location.href='./franchisedashboard.php'</script>";
}



?>