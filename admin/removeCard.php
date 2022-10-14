<?php


include '../api/connection.php';

$card_num = $_GET['card_num'];
$name = $_GET['name'];
$new_card=$_GET['new_card'];
$id=$_GET['id'];


$sql = "UPDATE `membership_card` SET `membership_card`='".$new_card."',`date`=current_timestamp() WHERE `membership_card`='".$card_num."' AND `assign_name`='".$name."' AND`id`='".$id."'";

$query = mysqli_query($conn, $sql);
if ($query) {
	echo "<script>alert('Card is removed')</script>";
	echo "<script>window.location.href='./remove_membership_card.php'</script>";
	// header("location ../admin/remove_membership_card.php");
} else {
	echo "unsuccessful";
}
