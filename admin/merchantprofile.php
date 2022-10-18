<?php
include "../api/connection.php";
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$fetch_sql = "SELECT * FROM `merchant` WHERE `email`='".$email."' AND `password`='".$mobile_no."'";
$fetch_file = mysqli_query($conn, $fetch_sql);
$fetch_data = mysqli_fetch_assoc($fetch_file);
$fetch_num = mysqli_num_rows($fetch_file);
if ($fetch_num==0) {
if ($bussinessacategory=='Hospital') {
  $password = $_POST['password'];
  $bussinessname = $_POST['bussinessname'];
  $merchant_Operator - $_POST['operator'];
  // $Create_date=current_timestamp();
  $discount = $_POST['discount'];
  $aggrement = $_POST['aggrement_date'];
  $bussinessaddress = $_POST['Address'];
  $landmark = $_POST['landmark'];
  $colony = $_POST['colony'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $pincode = $_POST['pincode'];
  $dob = $_POST['dob'];
  $lab=$_POST['lab_name'];
  $sub_lab=$_POST['lab_cat'];
  $bussinessacategory = $_POST['category'];
  $working_day = $_POST['working_day'];
  $commision_type = $_POST['given_commision'];
  $days = $_POST['days'];
  $starting_time = $_POST['start_time'];
  $end_time = $_POST['end_time'];
  $targetDir = "../uploads/";
  $fileName = $_FILES["owner_image"]["name"];
  $targetFilePath = $targetDir . $fileName;
  move_uploaded_file($_FILES['owner_image']['tmp_name'], $targetFilePath);
  $main_image_address = 'http://localhost/Dealpe/uploads/' . $fileName;
  echo $main_image_address;
  $sql2 = "INSERT INTO `merchant`(`id`, `email`, `password`, `bussinessname`, `owner_name`, `mobile_no`, ` category`, `sub_lab`
  , `lab_name`, `LandMark`, `address`, `Colony`, `State`, `District`, `Pin Code`, `dealpay_discount`, `agreement ends Date`, `days`, 
  `starting_time`, `end_time`) 
  VALUES (NULL,'$email','$password','$bussinessname','$merchant_Operator','$mobile_no','$bussinessacategory','','[value-10]','[value-11]',
  '[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]')";
  $select = mysqli_query($conn, $sql2);
  if ($select) {
    echo "<script>alert('Merchent Registration Successfull')</script>";
    echo "<script>window.location.href='../admin/dashboard.php'</script>";
  } else {
    echo "<script>alert('Merchent Registration not Successfull')</script>";
    echo "<script>window.location.href='../admin/dashboard.php'</script>";
  }
} elseif (condition) {
  # code...
} else{
  $password = $_POST['password'];
$bussinessname = $_POST['bussinessname'];
$merchant_Operator - $_POST['operator'];
// $Create_date=current_timestamp();
$discount = $_POST['discount'];
$aggrement = $_POST['aggrement_date'];
$bussinessaddress = $_POST['Address'];
$landmark = $_POST['landmark'];
$colony = $_POST['colony'];
$state = $_POST['state'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$dob = $_POST['dob'];
$lab=$_POST['lab_name'];
$sub_lab=$_POST['lab_cat'];
$bussinessacategory = $_POST['category'];
$working_day = $_POST['working_day'];
$commision_type = $_POST['given_commision'];
$days = $_POST['days'];
$starting_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$targetDir = "../uploads/";
$fileName = $_FILES["owner_image"]["name"];
$targetFilePath = $targetDir . $fileName;
move_uploaded_file($_FILES['owner_image']['tmp_name'], $targetFilePath);
$main_image_address = 'http://localhost/Dealpe/uploads/' . $fileName;
echo $main_image_address;
$sql2 = "INSERT INTO `merchant`(`id`, `email`, `password`, `bussinessname`, `owner_name`, `mobile_no`,  ` category`, `sub_lab`,
 `lab_name`, `LandMark`, `address`, `Colony`, `State`, `District`, `Pin Code`, `dealpay_discount`, `agreement ends Date`, `days`, 
 `starting_time`, `end_time`) VALUES (NULL,'$email','$password','$bussinessname','$merchant_Operator','$mobile_no','$bussinessacategory',
 '$sub_lab','$lab','$landmark','$bussinessaddress','$colony','$state','$district','$pincode','$discount','$aggrement','$days',
 '$starting_time','$end_time')";
$select = mysqli_query($conn, $sql2);
if ($select) {
  echo "<script>alert('Merchent Registration Successfull')</script>";
  echo "<script>window.location.href='../admin/dashboard.php'</script>";
} else {
  echo "<script>alert('Merchent Registration not Successfull')</script>";
  echo "<script>window.location.href='../admin/dashboard.php'</script>";
}
}

} else {
  echo "<script>alert('Email Or Mobile already in database')</script>";
  echo "<script>window.location.href='../admin/merchantregistration.html'</script>";
}
