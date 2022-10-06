<?php
include "../api/connection.php";
session_start();
$commission=$_GET['commission'];
$franchise=$_SESSION['sess_user'];
$customer=$_GET['customer_name'];
$sql="UPDATE `sales` SET  `commission`='$commission' WHERE frachise_id='$franchise'
 AND Customer_name='$customer' ";
$select=mysqli_query($conn,$sql);
if($select)
{
    echo "<script>alert('Sale Commission Set Update')</script>";
    echo "<script>window.location.href='../franchise/franchisedashboard.php'</script>";
}
?>