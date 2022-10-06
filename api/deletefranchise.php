<?php 

$id = $_GET['id'];

include './connection.php';

$sql = "DELETE FROM `franchisesignup` WHERE `id` = '$id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script> document.location.href = '../admin/franchisedashdata.php</script>";
}
else{
    
    echo "<script> alert('Data is Not Delete'); document.location.href = '../admin/franchisedashdata.php<' </script>";

}


?>