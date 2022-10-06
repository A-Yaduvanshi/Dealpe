<?php 
include '../api/connection.php';
$franchise_name = $_GET['franchise_name'];
$membership_card = $_GET['membership_card'];
$exiry_date  = $_GET['exiry_date'];
$sql = "UPDATE `franchisesignup` set `membership_card` = '$membership_card',
`membership_date` = '$exiry_date' WHERE `Business_Name` = '$franchise_name'";

$query = mysqli_query($conn,$sql);
if($query)
{
	echo " Thank you have successfully assign the card to the customer";
	// header("location: ../customer/customerdata.html");

}
else { 
	echo"unsuccessful";
}

?>