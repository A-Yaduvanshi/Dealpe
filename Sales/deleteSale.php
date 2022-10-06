<?php 

$id = $_GET['id'];

include '../api/connection.php';


$sql = "DELETE FROM `sales` WHERE `id` = '$id'";
$query = mysqli_query($conn,$sql);


if($query){
	echo "<script>alert('Data is Deleted')</sctipt>";
	header("Location: ./total_sales.php");
}
else{
	echo "<script>alert('Data is not deelted')</script>";
}


?>