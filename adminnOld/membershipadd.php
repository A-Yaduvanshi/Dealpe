<?php 


include '../api/connection.php';

$membership_name = $_GET['membership_name'];
$membership_price = $_GET['membership_price'];
$membership_expiry = $_GET['membership_expiry'];
$membership_offer = $_GET['membership_offer'];

// $sql ="INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `expiry_date`, `total_membership_assign`, `date`) VALUES (NULL, 'broze_price', '200', '7/August/2022', '',";


$sql = "INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `expiry_date`, `total_membership_assign`, `date`, `membership_offer`) 
VALUES (NULL, '$membership_name', '$membership_price', '$membership_expiry', '$membership_offer', current_timestamp(), '25')";

$query = mysqli_query($conn,$sql);


if($query){
echo "INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `expiry_date`, `total_membership_assign`, `date`, `membership_offer`) 
VALUES (NULL, '$membership_name', '$membership_price', '$membership_expiry', '$membership_offer', current_timestamp(), '25')";
	// echo "<script>alert('Data is Inseted')</script>";
}
else{
	// echo "<script>alert('Data is not inserted')</script>";
}

?>