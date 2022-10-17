<?php
include '../api/connection.php';
$submit = $_POST['submit'];
if (isset($submit)) {
	if (!empty($_POST['id']) && !empty($_POST['franchise_name']) && !empty($_POST['membership_card']) && !empty($_POST['quantity'])) {
		$id = $_POST['id'];
$salesName = $_POST['sales_name'];
$membership_card = $_POST['membership_card'];
$quantity = $_POST['quantity'];
		$check = "SELECT * FROM `sales` WHERE `id`='" . $id . "' AND `Customer_name`='" . $salesName . "'";
		$query_run = mysqli_query($conn, $check);
		$numrows = mysqli_num_rows($query_run);
		// echo $numrows;
		if ($numrows != 0 && $numrows < 2) {
			session_start();
			echo $_SESSION['sess_user'];
			for ($i = 1; $i <= $quantity; $i++) {
				// echo $i;
				$sql = "SELECT * FROM `membership_card` WHERE `assign` != 1 and `asign_count`!=1 and `membership_card`= '$membership_card'";
				$query = mysqli_query($conn, $sql);
				$count = mysqli_num_rows($query);
				// $sql_1="INSERT INTO `membership_card`(`assign`,`assign_name`,`assign_date`,`asign_count`) VALUES ('1','".$franchise_name."',current_timestamp(),'1') WHERE `assign`='0', AND`asign_count`='0'";
				while ($rowCheck = mysqli_fetch_array($query)) {
					$sql_update = "UPDATE `membership_card` set `assign`='1',`F_id`='" . $id . "',`admin_id`= '" . $_SESSION['sess_user'] . "',`assign_date`=current_timestamp(),`assign_name`='" . $franchise_name . "',`asign_count`='1' WHERE `membership_card` = '" . $membership_card . "' AND `assign`!=1 AND `asign_count`!=1";
					// echo $sql_update . "<br>";
					mysqli_query($conn, $sql_update);
				}
				$membership_card++;
			}
			// echo "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '$memberList' AND `assign`!=1";
			echo "<script>alert('$quantity Card is assign $franchise_name')</script>";
			echo "<script>window.location.href='./dashboard.php'</script>";
		} else { ?>
			<script>
				alert(`Franchise ID And Franchise Business Name Doesn't exits`);
				window.location.href = './assign_card_franchise.php';
			</script>
<?php
		}
	}
} else {
	echo "<script>alert('Please Fill ALl Fields')</script>";
	// echo "<script>window.location.href='./assign_card_franchise.php'</script>";
}
////////////////////////////////

session_start();
$id = $_POST['id'];
$salesName = $_GET['sales_name'];
$membership_card = $_GET['membership_card'];
$quantity = $_POST['quantity'];
// echo $salesName;
for ($i = 1; $i <= $quantity; $i++) {
	$sql = "SELECT * FROM `membership_card` WHERE `sales_select`!=1 and `assign`='1' and`assign_name` = '" . $_SESSION['Business_Name'] . "'";
	// $sql_2 = "SELECT * FROM `membership_card` WHERE `asign_count`!=1 and `assign`=and `assign_name` = '".$_SESSION['Business_Name']."'";
	$query = mysqli_query($conn, $sql);
	while ($rowCheck = mysqli_fetch_array($query)) {
		$sql_update = "UPDATE `membership_card` set `assign`='0',`sale_count`='1',`franchise_id`='" . $_SESSION['sess_user'] . "', `sales_select`='1',`sales_person`='" . $salesName . "',`sale_assign_date`=CURRENT_TIMESTAMP() WHERE `membership_card`= '" . $membership_card . "'";
	// 	echo "UPDATE `membership_card` set `sales_select`='1',`franchise_id`='" . $_SESSION['sess_user'] . "',`sales_person`='" . $salesName . "' WHERE `membership_card` = 
	// '" . $rowCheck["membership_card"] . "'";
		// echo $sql_update . "<br>";
		mysqli_query($conn, $sql_update);
	}
	$membership_card++;
	if ($i == $quantity) {
		echo "<script>alert('Card is assign to sales')</script>";
		echo "<script>window.location.href='./franchisedashboard.php'</script>";
	}
}
