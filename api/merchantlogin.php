<?php
include "connection.php";
session_start();
if (isset($_POST['submit'])) {
    if (
        !empty($_POST['email'])
        && !empty($_POST['password'])
    ) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from `merchant` where email='$email' and password='$password'";
        $select = mysqli_query($conn, $sql);
        if ($select) {
            $num = mysqli_num_rows($select);
            if ($num > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                    $dbusername = $row['email'];
                    $dbpassword = $row['password'];
                }

                if ($email == $dbusername && $password == $dbpassword) {
                    echo '<script>alert("login succussful")</script>';

                    $_SESSION['sess_user'] = $email;

                    // header("Location: ../merchant/merchent-dash.php");
                    echo "<script>alert('Login Approved')</script>";
                    echo "<script>window.location.href='../merchant/merchent-dash.php'</script>";
                } else {
                    echo "Invalid username or password!";
                }
            } else {
                header("Location: ../merchant/merchentlogin.html?error=no email found");
            }
        }
    } else {
        header("Location: ../merchant/merchentlogin.html?error=please insert email & password");
    }
} else {
    header("Location: ../merchent/merchentlogin.html?error=All feilds required");
}

?>

// if($result)
// {
// $nums=mysqli_num_rows($result);
// if($nums>0)
// {
// echo "login successful";

// }
// else{
// echo "invalid user";
// }
// }