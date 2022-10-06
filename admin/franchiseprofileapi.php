<?php
include "../api/connection.php";
session_start();
$admin_id = $_SESSION['sess_user'];
$business_name = $_POST['business_name'];
$owner_name = $_POST['owner_name'];
$business_email = $_POST['business_email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$dob = $_POST['dob'];
// $colony=$_POST['colony'];
$state = $_POST['state'];
$district = $_POST['district'];
$zip_code = $_POST['zip_code'];
$pan_no = $_POST['pan_no'];
$commision_given = $_POST['franchise_commision'];
$targetDir = "../uploads/";
$fileName = $_FILES["owner_image"]["name"];
$targetFilePath = $targetDir . $fileName;
move_uploaded_file($_FILES['owner_image']['tmp_name'], $targetFilePath);
$main_image_address = 'http://localhost/Dealpe/uploads/' . $fileName;
echo $main_image_address;
// $sql="INSERT INTO `franchisesignup`(`id`, `Business_Name`, `owner_name`, `Business_email`,
//  `Password`, `selectt`, `Address`, `Landmark`, `Colony`, `State`, `District`, `Zip_code`, 
//  `Pan_number`,`commision_given` `Owner_image` ) VALUES (NULL,'$business_name','$owner_name','$business_email','$password','$select','$address','$landmark','$colony','$state','$district',
//  '$zip_code','$pan_no','$commision_given','$main_image_address')";
// $sql = "INSERT INTO `franchisesignup` (`id`, `Business_Name`, `owner_name`, `Business_email`, `Password`, `selectt`, `Address`, 
// `Landmark`, `Colony`, `State`, `District`, `Zip_code`, `Pan_number`, `Owner_image`, `membership_card`, `membership_date`, `commission`, 
// `commision_given`, `3_month_card`, `6_month_card`, `total_card`, `total_6_month_card`, `total_3_month_card`) VALUES (NULL, 
// '$business_name', '$owner_name', '$business_email', '$password', '$select', '$address', '$landmark', '$colony', '$state',
//  '$district', '$zip_code', '$pan_no', '$main_image_address', NULL, NULL, '$commision_given', '0', '0', '0', '0', '0', '0')";
$sql = "INSERT INTO `franchisesignup`(`id`, `Business_Name`, `owner_name`, `Business_email`, `Password`, `dob`, `Mobile`, `Pan_number`, 
`Address`, `State`, `District`, `Zip_code`, `Owner_image`, `membership_card`, `membership_date`, 
`commission`, `Admin_id`, `date`, `6_month_card`, `total_card`, `total_6_month_card`, `total_3_month_card`)
 VALUES (NULL,'$business_name','$owner_name','$business_email','$password','$dob','$mobile','$pan_no',
 '$address','$state','$district','$zip_code','$main_image_address',NULL,NULL,
 '$commision_given','" . $admin_id . "',current_timestamp(),'0','0','0','0')";
$query = mysqli_query($conn, $sql);
if ($query) {
  // echo $sql;

  echo "<script>alert('signup successful for frenchise')</script>";
  echo "<script>window.location.href='../admin/dashboard.php'</script>";
} else {
  echo "<script>alert('signup Failed for frenchise')</script>";
  echo "<script>window.location.href='../admin/dashboard.php'</script>";
}
