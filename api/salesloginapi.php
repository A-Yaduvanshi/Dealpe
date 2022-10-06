<?php
include "./connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `sales` WHERE `Customer_email` ='".$email."' and `Password` = '".$password."'";
$select = mysqli_query($conn, $sql);

$num = mysqli_num_rows($select);
$id = mysqli_fetch_assoc($select);

// echo json_encode($id);


// echo $num;

// echo $id['Customer_name'];


if ($num > 0 && $num <2) {
    session_start();
            $_SESSION['id']=$email;
            $_SESSION['sale_id']=$id['id'];
            $_SESSION['customer_name']=$id['Customer_name'];
            // echo $id['id'];
            echo "<script>alert('Login Successfull')</script>";
            echo "<script>window.location.href='../Sales/SaleDashboard.php'</script>";
            // header("Location: ../Sales/SaleDashboard.php");
}
else{
            echo "<script>alert('Login is not Successfull')</script>";
            echo "<script>window.location.href='../Sales/'</script>";
}


// if (isset($_POST['submit'])) {
//     if (
//         !empty($_POST['email'])
//         && !empty($_POST['password'])
//     ) {
//         $email = $_POST['email'];
//         $password = $_POST['password'];

//         $sql = "select * from `sales` where sale_email='$email' and Password='$password'";
//         $select = mysqli_query($conn, $sql);
//         if ($select) {
//             $num = mysqli_num_rows($select);
//             echo $email;
//             if ($num > 0 && $num <2) {
//                 while ($row = mysqli_fetch_assoc($select)) {
//                     $dbusername = $row['sale_email'];
//                     $dbpassword = $row['Password'];
//                 }

//                 if ($email == $dbusername && $password == $dbpassword) {
//                     echo '<script>alert("login succussful")</script>';
//                     $_SESSION['sess_user']=$email; 
//                     header("Location: ../Sales/SaleDashboard.php");
//                 } else {
//                     echo "Invalid username or password!";
//                 }
//             } else {
//                 header("Location: ../Sales/index.php?error=no email found");
//             }
//         }
//     } else {
//         header("Location: ../Sales/index.php?error=please insert email & password");
//     }
// } else {
//     header("Location: ../Sales/index.php?error=All feilds required");
// }

?>
