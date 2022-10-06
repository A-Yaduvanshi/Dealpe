<?php
include "../connection.php";
$email=$_POST['email'];
$complain=$_POST['complain'];
$sql="INSERT INTO `customer`( `view_complain`) VALUES ('$complain') WHERE Customer_Email='$email'";
$query=mysqli_query($conn, $sql);
if ($query) {
    # code...
    echo"data insert";
} else {
    # code...
    echo"data  not insert";
}

?>