<?php

include '../api/connection.php';


$email = $_GET['email'];
$sql = "SELECT * FROM `sales` WHERE `Customer_email` = '$email'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

$msg = "please change your password http://localhost/Dealpe/Sales/Confirmpassword.php?custom_id=".$row['id'];
$msg = wordwrap($msg,70);
mail($email,"Please change your password",$msg);





?>