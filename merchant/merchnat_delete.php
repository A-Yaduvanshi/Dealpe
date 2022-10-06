<?php 

$id = $_GET['id'];

include '../api/connection.php';


$sql = "DELETE FROM `merchant` WHERE `id` = '$id'";
$query = mysqli_query($conn,$sql);


if($query){
	echo "<script>alert('Data is Deleted')</sctipt>";
	header("Location: ./mers.php");
}
else{
	echo "<script>alert('Data is not deelted')</script>";
}


?>