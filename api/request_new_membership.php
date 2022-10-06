<?php 


include './connection.php';
session_start();
// $starting_date = $_GET['starting_date'];
$request_membership_plan = $_GET['membership_plan'];
$special_id = $_SESSION['c_user_id'];

$sql = "INSERT INTO `new_memberShip` (`id`, `c_id`, `c_msg`, `c_expirydate`, `approved`) VALUES (NULL, '".$special_id."', '".$request_membership_plan."', '', '0')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('Renewal is Send');</script>";
    echo "<script>window.location.href='../customer/customer-profile.php'</script>";
}
else{
    echo "<script>alert('Renewal is not Send');</script>";
    echo "<script>window.location.href='../customer/customer-profile.php'</script>";
}

?>
