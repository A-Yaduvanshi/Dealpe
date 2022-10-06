<?php
session_start();
unset($_SESSION['sess_user']);
session_destroy();

// echo "<script>alert('Login Successfull')</script>";
echo "<script>window.location.href='../admin/index.php'</script>";
    
// header("location: ../admin/index.php");
