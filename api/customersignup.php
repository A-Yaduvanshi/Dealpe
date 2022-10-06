<?php

include 'connection.php';
$email=$_GET['email'];
$password=$_GET['password'];
$sql= "select * from customer where email='$email'";
$select =mysqli_query($conn,$sql);
if($select)
{
    $num=mysqli_num_rows($select);
    if($num>0)
    {
        echo json_encode("user already exist");
    }
    else{
        $sql="insert into `customer`(email,password) values('$email','$password')";
        $select =mysqli_query($conn,$sql);
         if($select)
         {
            echo json_encode("signup successful");

         }
         else
         {
            die(mysqli_error($conn));
         }
    }
}

?>