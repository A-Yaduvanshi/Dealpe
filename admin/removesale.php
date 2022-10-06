<?php 


include '../api/connection.php';

$id = $_GET['id'];


$sql = "DELETE FROM `customer` WHERE id=$id";

$query = mysqli_query($conn,$sql);
if($query)
{
	echo "successfull";

}
else 
{
	echo"unsuccessful";
}


?