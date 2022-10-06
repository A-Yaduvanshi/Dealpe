<?php 

session_start();
include '../api/connection.php';

$customer_name = $_GET['customer_name'];
$membership_name = $_GET['membership_name'];
$exiry_date = $_GET['exiry_date'];


$sql = "UPDATE `sales` SET `membership_card` = '$membership_name',`membership_expiry_date` = '$exiry_date' WHERE `Customer_Name` = '$customer_name'";

if(mysqli_query($conn,$sql)){
	echo "Card is Assign";
}
else{
	echo "Card is not Assign";
}

?>