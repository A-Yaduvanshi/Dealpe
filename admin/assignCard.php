<?php

// echo "Working on";

include '../api/connection.php';
$franchise_name = $_GET['franchise_name'];
$membership_card = $_GET['membership_card'];
$exiry_date  = $_GET['exiry_date'];

$sql = "SELECT * FROM `membership_card` WHERE `expiry_date` = '$exiry_date' and `assign` != 1 and `asign_count`!=1 and `membership_card`= '$membership_card'";
$query=mysqli_query($conn,$sql);


$count = mysqli_num_rows($query);

while($rowCheck = mysqli_fetch_array($query)){
	$sql_update = "UPDATE `membership_card` set `assign`='1',`assign_date`=current_timestamp(),`assign_name`='".$franchise_name."',`asign_count`='1' WHERE `membership_card` = '".$membership_card."' AND `assign`!=1 AND `asign_count`!=1";
	// echo $sql_update . "<br>";
	mysqli_query($conn,$sql_update);
}

// echo "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '$memberList' AND `assign`!=1";

echo "<script>alert('Card is assign')</script>";
echo "<script>window.location.href='./dashboard.php'</script>";


?>