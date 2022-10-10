<?php


include '../api/connection.php';

$card_num = $_GET['card_num'];
$name = $_GET['name'];


$sql = "DELETE FROM `membership_card` WHERE `membership_card`='" . $card_num . "' and `name`='" . $name . "'";

$query = mysqli_query($conn, $sql);
if ($query) {
	echo "<script>alert('Card is removed')</script>";
	echo "<script>window.location.href='./remove_membership_card.php'</script>";
	// header("location ../admin/remove_membership_card.php");
} else {
	echo "unsuccessful";
}
