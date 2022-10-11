<?php

include '../api/connection.php';

session_start();

// $howManyCard = $_GET['sales_card_assign'];
$salesName = $_GET['sales_name'];
// $exiry_date = $_GET['exiry_date'];
$membership_card = $_GET['membership_card'];
$quantity = $_GET['quantity'];
// echo $_SESSION['Business_Name']; 

// $_SESSION['sess_user'] = $id;
//                       $_SESSION['Business_Name'] = $name;

// echo $howManyCard;	
echo $salesName;
for ($i = 1; $i <= $quantity; $i++) {

	$sql = "SELECT * FROM `membership_card` WHERE `sales_select`!=1 and `assign`='1' and`assign_name` = '" . $_SESSION['Business_Name'] . "'";
	// $sql_2 = "SELECT * FROM `membership_card` WHERE `asign_count`!=1 and `assign`=and `assign_name` = '".$_SESSION['Business_Name']."'";
	$query = mysqli_query($conn, $sql);
	while ($rowCheck = mysqli_fetch_array($query)) {
		$sql_update = "UPDATE `membership_card` set `assign`='0',`sale_count`='1',`franchise_id`='" . $_SESSION['sess_user'] . "', `sales_select`='1',`sales_person`='" . $salesName . "',`sale_assign_date`=CURRENT_TIMESTAMP() WHERE `membership_card`= '" . $membership_card . "'";

		echo "UPDATE `membership_card` set `sales_select`='1',`franchise_id`='" . $_SESSION['sess_user'] . "',`sales_person`='" . $salesName . "' WHERE `membership_card` = 
	'" . $rowCheck["membership_card"] . "'";

		// echo $sql_update . "<br>";
		mysqli_query($conn, $sql_update);
	}
	$membership_card++;
	if ($i == $quantity) {
		echo "<script>alert('Card is assign to sales')</script>";
		echo "<script>window.location.href='./franchisedashboard.php'</script>";
	}
}

// echo "UPDATE `membership_card` set `sales_select`='1',`sales_person`='".$salesName."' WHERE `membership_card` = '".$rowCheck["membership_card"]."'";



// echo "Working on";

// include '../api/connection.php';
// $franchise_name = $_GET['franchise_name'];
// $membership_card = $_GET['membership_card'];
// $exiry_date  = $_GET['exiry_date'];

// $sql = "SELECT * FROM `membership_card` WHERE `expiry_date` = '$exiry_date' and `assign` != 1";
// $query=mysqli_query($conn,$sql);


// $count = mysqli_num_rows($query);

// while($rowCheck = mysqli_fetch_array($query)){
// 	$sql_update = "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '".$rowCheck["membership_card"]."' AND `assign`!=1";
// 	echo $sql_update . "<br>";
// 	mysqli_query($conn,$sql_update);
// }

// // echo "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '$memberList' AND `assign`!=1";

// echo "<script>alert('Card is assign')</script>";
// echo "<script>window.location.href='./dashboard.php'</script>";
