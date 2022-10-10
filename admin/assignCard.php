<?php

// echo "Working on";

include '../api/connection.php';
$franchise_name = $_GET['franchise_name'];
$membership_card = $_GET['membership_card'];
// $exiry_date  = $_GET['exiry_date'];
$quantity=$_GET['quantity'];

// while($rowCheck = mysqli_fetch_array($query)){
	// $rowCheck = mysqli_fetch_array($query);
	// echo $rowCheck;
for ($i=1; $i <=$quantity ; $i++) { 
	echo $i;
	$sql = "SELECT * FROM `membership_card` WHERE `assign` != 1 and `asign_count`!=1 and `membership_card`= '$membership_card'";
$query=mysqli_query($conn,$sql);


$count = mysqli_num_rows($query);
	// $sql_1="INSERT INTO `membership_card`(`assign`,`assign_name`,`assign_date`,`asign_count`) VALUES ('1','".$franchise_name."',current_timestamp(),'1') WHERE `assign`='0', AND`asign_count`='0'";
	while($rowCheck = mysqli_fetch_array($query)){	
	$sql_update = "UPDATE `membership_card` set `assign`='1',`assign_date`=current_timestamp(),`assign_name`='".$franchise_name."',`asign_count`='1' WHERE `membership_card` = '".$membership_card."' AND `assign`!=1 AND `asign_count`!=1";
		// echo $sql_update . "<br>";
		mysqli_query($conn,$sql_update);
	}
	$membership_card++;
}

// echo "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '$memberList' AND `assign`!=1";

echo "<script>alert('Card is assign')</script>";
echo "<script>window.location.href='./dashboard.php'</script>";


?>