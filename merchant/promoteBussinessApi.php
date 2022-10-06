<?php 

include '../api/connection.php';

session_start();

echo $_SESSION['sess_user_2'];

$sql = "SELECT * FROM `merchant` WHERE `email` = '".$_SESSION['sess_user_2']."'";
$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($query);

echo $row['email']; 


// $email =  $row['email'];
// $name = $row['bussinessname'];
// $mobile_no = $row['mobile_no'];


$sql = "INSERT INTO `promote_my_bussiness` (`id`, `merchant_id`, `merchant_phone`, `merchant_email`) VALUES (NULL, '".$row['bussinessname']."', '".$row['mobile_no']."', '".$row['email']."');";

$query = mysqli_query($conn,$sql);

if($query){
	    echo "<script>alert('Successfully promoted!.we call you soon')</script>";
        echo "<script>window.location.href='./merchent-dash.php'</script>";
}

?>