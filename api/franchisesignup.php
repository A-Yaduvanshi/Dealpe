<?php
include "connection.php";
$email = $_POST['email'];
$password = $_POST['password'];
$business_name = $_POST['business_name'];
$owner_name = $_POST['owner_name'];
$pan_no = $_POST['pan_no'];
// $update_password = $_GET['update_password'];
$sql = "select * from `franchisesignup` where email='$email'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $nums = mysqli_num_rows($result);
    if ($nums > 0) {
        echo "user already exist";
    } else {
        $sql = "INSERT INTO `franchisesignup`(`id`, `email`, `password`, `business_name`, `owner_name`, `business_email`, 
        `pan_no`, `type_of_business`, `address`, `landmark`, `colony`, `state`, `district`, `zip_code`, `owner_image`) VALUES 
        (NULL,'$email','$password','[value-4]','[value-5]',
        '[value-6]','[value-7]','[value-8]','[value-9]','[value-10]',
        '[value-11]','[value-12]','[value-13]','[value-14]','[value-15]')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo json_encode("signup successful");
        } else {
            die(mysqli_error($conn));
        }
    }
}
