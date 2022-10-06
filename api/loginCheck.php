<?php

include './connection.php';

$membership_number = $_POST['membership_number'];



$sql = "SELECT * FROM `customer` WHERE `membership_card` = '" . $membership_number . "'";


$query = mysqli_query($conn, $sql);

$row = mysqli_num_rows($query);

// echo $membership_number;
echo $row;

if ($row != 0 && $row < 2) {

	session_start();

	$_SESSION['c_user_id'] = $membership_number;
	// echo "<script>window.location.href='../customer/customer-profile.php</script>";
	header("location: ../customer/customer-profile.php");
} else {
	echo "<script>alert('Membership is not found');</script>";

	echo "<script>window.location.href='../customer/'</script>";
}
