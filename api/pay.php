<?php 

$id = $_GET['id'];

include './connection.php';

$sql = "UPDATE `membership_card` SET`card_price`='0' WHERE `sales_person`= '$id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script> document.location.href = '../franchise/franchisedashboard.php'</script>";
}
else{
    
    echo "<script> alert('Data is Not Delete'); document.location.href = '../admin/franchisedashdata.php<' </script>";

}


?>