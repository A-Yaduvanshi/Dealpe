<?php
include "connection.php";
$business_name = $_POST['business_name'];
$owner_name = $_POST['owner_name'];
$business_email = $_POST['business_email'];
$password = $_POST['password'];
$select = $_POST['select'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$colony = $_POST['colony'];
$state = $_POST['state'];
$district = $_POST['district'];
$zip_code = $_POST['zip_code'];
$pan_no = $_POST['pan_no'];
$commision_given = $_POST['franchise_commision'];
$targetDir = "../uploads/";
$fileName = $_FILES["owner_image"]["name"];


$targetFilePath = $targetDir . $fileName;
move_uploaded_file($_FILES['owner_image']['tmp_name'], $targetFilePath);
$main_image_address = 'http://localhost/dealpe/uploads/' . $fileName;
echo $main_image_address;
// $sql="INSERT INTO `franchisesignup`(`id`, `Business_Name`, `owner_name`, `Business_email`,
//  `Password`, `selectt`, `Address`, `Landmark`, `Colony`, `State`, `District`, `Zip_code`, 
//  `Pan_number`,`commision_given` `Owner_image` ) VALUES (NULL,'$business_name','$owner_name','$business_email','$password','$select','$address','$landmark','$colony','$state','$district',
//  '$zip_code','$pan_no','$commision_given','$main_image_address')";


$sql = "INSERT INTO `franchisesignup` (`id`, `Business_Name`, `owner_name`, `Business_email`, `Password`, `selectt`, `Address`, `Landmark`, `Colony`, `State`, `District`, `Zip_code`, `Pan_number`, `Owner_image`, `membership_card`, `membership_date`, `commission`, `commision_given`, `3_month_card`, `6_month_card`, `total_card`, `total_6_month_card`, `total_3_month_card`) VALUES (NULL, '$business_name', '$owner_name', '$business_email', '$password', '$select', '$address', '$landmark', '$colony', '$state', '$district', '$zip_code', '$pan_no', '$main_image_address', NULL, NULL, '$commision_given', '0', '0', '0', '0', '0', '0')";

$query = mysqli_query($conn, $sql);
if ($select) {
  // echo $sql;
  echo "<script>alert('signup successful for frenchise')</script>";
  echo "<script>window.location.href='../franchise/franchisedashdata.php'</script>";
}












// //  $sql="UPDATE `franchisesignup` SET `business_name`='$business_name',`owner_name`='$owner_name',
// // `business_email`='$business_email',`pan_no`='$pan_no',`type_of_business`='$type_of_business',
// // `address`='$address',`landmark`='$landmark',`colony`='$colony',`state`='$state',
// // `district`='$district',`zip_code`='$zip_code',`owner_image`='$main_image_address'
// //  WHERE email='pintu@gmail.com' " ;
// $sql="INSERT INTO `franchisesignup`(`id`, `password`, `business_name`, `owner_name`,
//  `business_email`, `pan_no`, `type_of_business`, `address`, `landmark`, `colony`, `state`, `district`, `zip_code`,
//   `owner_image`)
//   VALUES (NULL,'$password','$business_name','$owner_name','$business_email','$pan_no','$type_of_business',
// '$address','$landmark','$colony','$state','$district','$','[value-14]')";
// $query=mysqli_query($conn,$sql);
// if($query)
// {
//     echo "data update successful";
// }
