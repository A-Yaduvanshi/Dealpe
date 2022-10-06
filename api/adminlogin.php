<?php
include "connection.php";
if (isset($_POST["submit"])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from `admin` where email='$email' and password='$password'";
        $select = mysqli_query($conn, $sql);
        if ($select) {
            $num = mysqli_num_rows($select);
            if ($num > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                    $dbusername = $row['email'];
                    $dbpassword = $row['password'];
                }

                if ($email == $dbusername && $password == $dbpassword) {
                    session_start();
                    $_SESSION['sess_user'] = $email;
                    echo '<script>alert("login succussful")</script>';
                    header("Location: ../admin/dashboard.php");
                    // $_SESSION['user_type'] = $email;
                } else {
                    header("location: ../admin/index.php?error=Incorect User name or password");
                }
            } else {
                header("location: ../admin/index.php?error=Insert email or password");
            }
        }
    } else {
        header("location: ../admin/index.php?error=Insert email or password");
    }
} else {
    header("location: ../admin/index.php?error=All Feilds is Required");
}
