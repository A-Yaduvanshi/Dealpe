<?php
include "../api/connection.php";
$business_email = $_POST['business_email'];
$mobile = $_POST['mobile'];

$fetch_sql = "SELECT * FROM `franchisesignup` WHERE `Business_email`='".$business_email."' OR `Mobile`='".$mobile."'";
$fetch_file = mysqli_query($conn, $fetch_sql);
$fetch_data = mysqli_fetch_assoc($fetch_file);
$fetch_num = mysqli_num_rows($fetch_file);


if ($fetch_num > 0) {
  echo "<script>alert('Email Or Mobile already in database')</script>";
  echo "<script>window.location.href='../admin/frenchregis.html'</script>";
} else {
  session_start();
  $admin_id = $_SESSION['sess_user'];
  $business_name = $_POST['business_name'];
  $owner_name = $_POST['owner_name'];

  $password = $_POST['password'];

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
}
