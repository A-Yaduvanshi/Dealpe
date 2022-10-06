<?php
include "../api/connection.php";
$commission=$_GET['commission'];
$business_name=$_GET['business_name'];
$sql="UPDATE `franchisesignup` SET  `commision_given`='$commission'
 WHERE `Business_Name`='$business_name'";
 $select=mysqli_query($conn,$sql);
 if($select)
 {
   //  echo " Commision update"; 
    echo "<script>alert('Commission update')</script>";
echo "<script>window.location.href='./franchisecommission.php'</script>";
 }
?>