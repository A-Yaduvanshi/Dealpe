<?php 

include '../api/connection.php';

session_start();

$membership_card_number = $_GET['membership_card_number'];
$customerName = $_GET['customer_name'];
$exiry_date = $_GET['exiry_date'];
$sql_5="SELECT * FROM `sales`";

if($exiry_date == '3 months'){
$date = new DateTime(date("d-m-Y")); 
	$date->modify("+90 day"); 
	$exiry_date=$date->format("d-m-Y");
}
else if($exiry_date == '6 months'){
	$date = new DateTime(date("d-m-Y")); 
	$date->modify("+180 day"); 
	$exiry_date=$date->format("d-m-Y");
}




$sql = "UPDATE `membership_card` SET `customer_name` = '".$customerName."',`customer_select`=1, `sales_select` = '0' ,`customer_assign_date`= current_timestamp() WHERE `membership_card` = '".$membership_card_number."'";	

$query = mysqli_query($conn,$sql);

$sql_2 = "UPDATE `customer` SET `membership_card` = '".$membership_card_number."',`membership_expiry` = '".$exiry_date."' WHERE `Customer_Name` = '".$customerName."' and `sale_id` = '".$_SESSION['sale_id']."'";

if(mysqli_query($conn,$sql_2)){

	// echo "UPDATE `customer` SET `membership_card` = '".$membership_card_number."',`membership_expiry` = '".$exiry_date."' WHERE `Customer_Name` = '".$customerName."' and `sale_id` = '".$_SESSION['sale_id']."'";

	echo "<script>alert('Card is assign to customer')</script>";
    echo "<script>window.location.href='./SaleDashboard.php'</script>";
}
else{
	echo "<script>alert('Card is not assign to customer')</script>";
    echo "<script>window.location.href='./SaleDashboard.php'</script>";
}



// $sql = "SELECT * FROM `membership_card` WHERE `sales_select`!=1 and `assign_name` = '".$_SESSION['Business_Name']."'";
// $query=mysqli_query($conn,$sql);
// while($rowCheck = mysqli_fetch_array($query)){
// 	$sql_update = "UPDATE `membership_card` set `sales_select`='1',`sales_person`='$salesName' WHERE `membership_card` = '".$rowCheck["membership_card"]."'";
// 	echo $sql_update . "<br>";
// 	mysqli_query($conn,$sql_update);
// }

// echo "<script>alert('Card is assign to sales')</script>";
// echo "<script>window.location.href='./franchisedashboard.php'</script>";


// echo "Working on";

// include '../api/connection.php';
// $franchise_name = $_GET['franchise_name'];
// $membership_card = $_GET['membership_card'];
// $exiry_date  = $_GET['exiry_date'];

// $sql = "SELECT * FROM `membership_card` WHERE `expiry_date` = '$exiry_date' and `assign` != 1";
// $query=mysqli_query($conn,$sql);


// $count = mysqli_num_rows($query);

// while($rowCheck = mysqli_fetch_array($query)){
// 	$sql_update = "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '".$rowCheck["membership_card"]."' AND `assign`!=1";
// 	echo $sql_update . "<br>";
// 	mysqli_query($conn,$sql_update);
// }

// // echo "UPDATE `membership_card` set `assign`='1',`assign_name`='$franchise_name' WHERE `membership_card` = '$memberList' AND `assign`!=1";

// echo "<script>alert('Card is assign')</script>";
// echo "<script>window.location.href='./dashboard.php'</script>";



?>
