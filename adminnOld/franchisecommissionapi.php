<?php
include "../api/connection.php";
$commission=$_GET['commission'];
$business_name=$_GET['business_name'];
$sql="UPDATE `franchisesignup` SET  `commission`='$commission'
 WHERE `Business_Name`='$business_name'";
 $select=mysqli_query($conn,$sql);
 if($select)
 {
    echo " data update successfull"; 
 }
?>