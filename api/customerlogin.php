 <?php
 include "connection.php";
 $email=$_GET['email'];
 $password=$_GET['password'];
 $sql="select * from customer where email='$email' and password='$password'";
 $select=mysqli_query($conn,$sql);
 if($select)
 {
    $nums=mysqli_num_rows($select);
    if($nums>0)
    {
    echo json_encode("login successful");

    }
 }
 ?>