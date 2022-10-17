<?php
include "connection.php";
session_start();
if (isset($_POST['submit'])) {
    if (
        !empty($_POST['email']) && !empty($_POST['password'])
    ) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from `franchisesignup` where `Business_email`='" . $email . "' and `Password`='" . $password . "'";
        $result = mysqli_query($conn, $sql);
        $res = mysqli_fetch_row($result);
        $id =  $res[0];
        $business = $res[1];
        $name = $res[2];
        if ($result) {
            $nums = mysqli_num_rows($result);
            if ($nums > 0 && $nums < 2) {
                $_SESSION['sess_email'] = $email;
                $_SESSION['sess_user'] = $id;
                $_SESSION['Business_Name'] = $business;
                $_SESSION['owener_Name'] = $name;
                
                echo "<script>alert('Login Successfull')</script>";
                echo "<script>window.location.href='../franchise/franchisedashboard.php'</script>";
            } else {
                
                echo "<script>alert('Invalid Email & password')</script>";
                echo "<script>window.location.href='../franchise/index.html'</script>";
            }
        }
    } else {
        echo "<script>alert('Insert Email & password')</script>";
        echo "<script>window.location.href='../franchise/index.html'</script>";
    }
} else {
    // header("Location : ../franchise/index.html?error= All Field Required");
    echo "<script>alert('All Field Required')</script>";
    echo "<script>window.location.href='../franchise/index.html'</script>";
}
