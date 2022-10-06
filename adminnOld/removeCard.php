<?php 


include '../api/connection.php';

$franchise_name = $_GET['franchise_name'];


$sql = "UPDATE `franchisesignup` set `membership_card` = '',`membership_date` = '' WHERE `Business_Name` = '$franchise_name'";

$query = mysqli_query($conn,$sql);
if($query)
{
	echo "successfull";

}
else 
{
	echo"unsuccessful";
}


?>