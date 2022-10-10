<?php


include '../api/connection.php';

// $membership_name = $_GET['membership_name'];
$membership_price = $_GET['membership_price'];
$membership_expiry = $_GET['membership_expiry'];
// $membership_offer = $_GET['membership_offer'];
$card_number = $_GET['card_number'];
$quantity = $_GET['quantity'];


for ($i = 1; $i <= $quantity; $i++) {
	$sql = "INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `validity_date`, `total_membership_assign`, `date`) 
	VALUES (NULL, '$card_number', '$membership_price', '$membership_expiry', 
	'$membership_offer', current_timestamp())";
	$query = mysqli_query($conn, $sql);
	$card_number++;

	if ($i == $quantity) {
		echo "<script>alert(`$quantity Cards is Generated`)</script>";
		echo "<script>window.location.href='./dashboard.php'</script>";
	}
	// else{
	// echo "<script>alert('Card is not Generated')</script>";
	// 	echo "<script>window.location.href='./dashboard.php'</script>";	
	// }
}



// $sql ="INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `expiry_date`, `total_membership_assign`, `date`) VALUES (NULL, 'broze_price', '200', '7/August/2022', '',";

// for($i=0;$i<=$membership_name;$i++){
	// $card_number= rand(1111111111,9999999999);
	// $sql = "INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `expiry_date`, `total_membership_assign`, `date`, `membership_offer`) 
	// VALUES (NULL, '$card_number', '$membership_price', '$membership_expiry', '$membership_offer', current_timestamp(), '$membership_offer')";
	// $query = mysqli_query($conn,$sql);
// 	if($i == $membership_name){
// if($query){

// echo "INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `expiry_date`, `total_membership_assign`, `date`, `membership_offer`) 
// 	VALUES (NULL, '$card_number', '$membership_price', '$membership_expiry', '$membership_offer', current_timestamp(), '$membership_offer')";

// 	echo "<script>alert('Card is Generated')</script>";
// 	echo "<script>window.location.href='./dashboard.php'</script>";
// }
// else{
// 	echo "<script>alert('Data is not inserted')</script>";
// }
// 	}

// }

// $sql = "INSERT INTO `membership_card` (`id`, `membership_card`, `membership_price`, `expiry_date`, `total_membership_assign`, `date`, `membership_offer`) 
// VALUES (NULL, '$membership_name', '$membership_price', '$membership_expiry', '$membership_offer', current_timestamp(), '$membership_offer')";

// $query = mysqli_query($conn,$sql);


// if($query){
// 	echo "<script>alert('Data is Inseted')</script>";
// }
// else{
// 	echo "<script>alert('Data is not inserted')</script>";
// }
