<?php
// echo "Working on";
include '../api/connection.php';
$submit = $_POST['submit'];
if (isset($submit)) {
	if (!empty($_POST['id']) && !empty($_POST['franchise_name']) && !empty($_POST['membership_card']) ) {
		$franchise_name = $_POST['franchise_name'];
		$id = $_POST['id'];
		$membership_card = $_POST['membership_card'];
		
		$check = "SELECT * FROM `franchisesignup` WHERE `id`='" . $id . "' AND `Business_Name`='" . $franchise_name . "'";
		$query_run = mysqli_query($conn, $check);
		$numrows = mysqli_num_rows($query_run);
		// echo $numrows;
		if ($numrows != 0 && $numrows < 2) {
			session_start();
			echo $_SESSION['sess_user'];
			$ids = implode(',', $membership_card);
// $run="SELECT * FROM `testing` where `cards` IN($ids) ";
$run="SELECT * FROM `membership_card` WHERE `assign` != 1 and `asign_count`!=1 and `membership_card` IN($ids)";
$data=mysqli_query($conn,$run);
$num=mysqli_num_rows($data);
echo $num;
if($num>0){
	// while ($rowCheck = mysqli_fetch_array($data)) {
		$sql_update = "UPDATE `membership_card` set `assign`='1',`F_id`='" . $id . "',`admin_id`= '" . $_SESSION['sess_user'] . "',`assign_date`=current_timestamp(),`assign_name`='" . $franchise_name . "',`asign_count`='1' WHERE `membership_card` IN($ids) AND `assign`!=1 AND `asign_count`!=1";
		// echo $sql_update . "<br>";
		mysqli_query($conn, $sql_update);
	// }
	// $membership_card++;
// echo "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '$memberList' AND `assign`!=1";
echo "<script>alert(`$num Card is assign $franchise_name`)</script>";
echo "<script>window.location.href='./dashboard.php'</script>";
}
				// $sql = "SELECT * FROM `membership_card` WHERE `assign` != 1 and `asign_count`!=1 and `membership_card`= '$membership_card'";
				// $query = mysqli_query($conn, $sql);
				// $count = mysqli_num_rows($query);
				// $sql_1="INSERT INTO `membership_card`(`assign`,`assign_name`,`assign_date`,`asign_count`) VALUES ('1','".$franchise_name."',current_timestamp(),'1') WHERE `assign`='0', AND`asign_count`='0'";
				
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
