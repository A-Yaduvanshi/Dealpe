<?php

session_start();

include "./connection.php";
$sale_id = uniqid();
$customer_name=$_GET['customer_name'];
$date_of_birth=$_GET['date_of_birth'];
$customer_email=$_GET['customer_email'];
$password=$_GET['password'];
$gender=$_GET['gender'];
$occupation=$_GET['occupation'];
$address=$_GET['address'];
$landmark=$_GET['landmark'];
$colony=$_GET['colony'];
$state=$_GET['state'];
$disrict=$_GET['disrict'];
$mobile=$_GET['mobile'];
$pin_code=$_GET['pin_code'];
 $targetDir = "../uploads/";
$fileName = $_FILES["main_image"]["name"];
echo $fileName;
$targetFilePath = $targetDir . $fileName;
move_uploaded_file($_FILES['main_image']['tmp_name'],$targetFilePath);
$main_image_address= 'http://localhost/dealpe/uploads/'.$fileName;
$sale_id = $_GET['sale_id'];


$sql ="INSERT INTO `sales` (`id`, `sale_id`, `Customer_name`, `Date_of_birth`, 
`Customer_email`, `Password`, `gender`, `Occupation`, `Address`, `Landmark`, `Colony`,
 `state`, `Distict`, `mobile_no`, `pin_code`, `Owner_image`)
  VALUES (NULL, '$sale_id', '$customer_name', '$date_of_birth',
   '$customer_email', '$password', '$gender', '$occupation', '$address', '$landmark',
   '$colony', '$state', '$disrict', '$mobile', '$pin_code','$main_image_address')";

// $sql="INSERT INTO `sales` (`id`, `Customer_name`, `Date_of_birth`, `Customer_email`,
//  `Password`, `gender`, `Occupation`, `Address`, `Landmark`, `Colony`, `state`, `Distict`,
//   `mobile_no`, `pin_code`, `Owner_image`,'sale_id') VALUES (NULL, '$customer_name', '$date_of_birth', 
//   '$customer_email', '$password', '$gender', '$occupation', '$address', '$landmark', '$colony', 
//   '$state', '$disrict', '$mobile', '$pin_code', '$main_image_address','$user_id')";


$query=mysqli_query($conn,$sql);

    if($query)
    {

    $run_add_data = "UPDATE `sales` SET `frachise_id` = '".$_SESSION['sess_user']."' 
    WHERE `Customer_email` = '".$customer_email."'";

    mysqli_query($conn,$run_add_data);


     header("Location: ../franchise/franchisedashboard.php");
    }
