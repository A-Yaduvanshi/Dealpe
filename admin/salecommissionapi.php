<?php
include "../api/connection.php";
$commission=$_GET['commission'];
$customer_name=$_GET['customer_name'];
$sql="UPDATE `sales` SET  `commission`='$commission' WHERE `Customer_name`='$customer_name'";
 $select=mysqli_query($conn,$sql);
 if($select)
 {
    echo " data update successfull"; 
 }
?>