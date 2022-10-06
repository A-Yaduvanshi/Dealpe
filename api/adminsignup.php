<?php
include "./connection.php";
if (isset($_POST["submit"])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="select * from `admin` where email='$email'";
        $select=mysqli_query($conn,$sql);
        if($select)
        {
            $num=mysqli_num_rows($select);
            if($num>0)
            {
              echo '<script>alert("Emailid Already Used")</script>';
              header("Location: ../admin/login.php");
             
            }
            else{
                $sql2="INSERT into `admin`(`id`,`email`,`password`) values (NULL,'$email','$password')";
                $select =mysqli_query($conn,$sql2);
                if($select)
                {
                    echo '<script>alert("signup successful")</script>';
                    
                    header("Location: ../admin/login.php");  
          
                }
                else
                {
                    die(mysqli_error($conn));
                }
            }
        }        
    } else {
        header("Location: ../admin/login.php?error=insert email And password");
    }
    
} else {
    header("Location: ../admin/login.php?error=All Feilds Required");
}


?>