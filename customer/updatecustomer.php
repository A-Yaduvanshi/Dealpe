<?php
include "../api/connection.php";
session_start();

echo $_SESSION['c_user_id'];
$email=$_GET['email'];
$address=$_GET['address'];
$mobile=$_GET['mobile'];

$sql="UPDATE `customer` SET `Customer_Email`='$email',`Mobile_Number`='$mobile',`Address`='$address' WHERE `membership_card`='".$_SESSION['c_user_id']."'";
$run=mysqli_query($conn,$sql);
if ($run) {
    
echo "<script>alert('Data Update')</script>";
echo "<script>window.location.href='./customer-profile.php'</script>";

} else {
    
echo "<script>alert('Data not updated')</script>";
echo "<script>window.location.href='./Editprofile.php'</script>";

}

?>