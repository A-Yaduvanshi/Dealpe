<?php
include "../api/connection.php";
// $id=$_GET['id'];
$merchant=$_GET['merchant'];
$how_much_card=$_GET['how_much_card'];
$expiry=$_GET['expiry'];
$sql="INSERT INTO `renew_stock` (`id`, `merchant`, `how_much`, `expiry`) 
VALUES (NULL, '$merchant', '$how_much_card', '$expiry')";
$query=mysqli_query($conn,$sql);
if($query){
 echo '<script>alert("Renew Stock Request Send")</script>';
 echo  "<script>window.location.href='../franchise/franchisedashboard.php'</script>";
}else{
echo "data not inserted successfully";
}?>