<?php 

include "../api/connection.php";
   $email = $_POST['email'];
        $password = $_POST['password'];
        $bussinessname = $_POST['bussinessname'];
        $mobile_no = $_POST['mobile_no'];
        $bussinessaddress = $_POST['Address'];
        $landmark = $_POST['landmark'];
        $colony = $_POST['colony'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $pincode = $_POST['pincode'];
        $dob = $_POST['dob'];
        $bussinessacategory = $_POST['category'];
        $workinghoure = "Null";
        $commision_type = $_POST['given_commision'];
$days=$_POST['days'];
        $starting_time = $_POST['starting_time'];
        $end_time = $_POST['end_time'];

 $sql2 = "INSERT INTO `merchant`(`id`, `email`, `password`, `bussinessname`,
            `Date of Birth`, `mobile_no`, `Working Hour's`, ` category`,
             `LandMark`, `address`, `Colony`, `State`, `District`, 
             `Pin Code`, `dealpay_discount`, `agreement ends Date`,`starting_time` , `end_time` , `days`) VALUES 
             (NULL,'$email','$password','$bussinessname',
             '$dob','$mobile_no','$workinghoure','$bussinessacategory','$landmark','$bussinessaddress',
             '$colony','$state','$district','$pincode','$commision_type','','$starting_time','$end_time','$days')";
            $select = mysqli_query($conn, $sql2);

            if($select){
                  echo "<script>alert('Merchent Registration Successfull')</script>";
            echo "<script>window.location.href='../admin/dashboard.php'</script>";
            }
            else{
              echo "<script>alert('Merchent Registration not Successfull')</script>";
            echo "<script>window.location.href='../admin/dashboard.php'</script>";
            
            }

?>