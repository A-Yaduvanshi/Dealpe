<?php
include "connection.php";
// session_start();
$Customer_Name=$_POST['Customer_Name'];
$Date_of_Birth=$_POST['Date_of_Birth'];
$Customer_Email=$_POST['Customer_Email'];
$password=$_POST['password'];
$Mobile_Number=$_POST['Mobile_Number'];
$Gender=$_POST['Gender'];
$Address=$_POST['Address'];
$LandMark=$_POST['LandMark'];
$Colony=$_POST['Colony'];
$State=$_POST['State'];
$District=$_POST['District'];
$Pin_Code=$_POST['Pin_Code'];
$Occupation=$_POST['Occupation'];
$targetDir="../uploads/";
$fileName=$_FILES["owner_image"]["name"];
$targetFilePath = $targetDir . $fileName;
// move_uploaded_file($_FILES["owner_image"]["tmp_name"],$targetFilePath);
move_uploaded_file($_FILES["owner_image"]["tmp_name"], "../uploads/" . $_FILES["owner_image"]["name"]);
$main_image_address= 'http://localhost/dealpe/uploads/'.$fileName;
$special_id = uniqid();

echo $main_image_address;
$sql="INSERT INTO `customer` (`id`, `Customer_Name`, `special_id`, `Date_of_Birth`, `Customer_Email`, `Password`, `Mobile_Number`, `Gender`, `Address`, `LandMark`, `Colony`, `State`, `District`, `Pin_Code`, `Occupation`, `owner_image`, `member_ship_card`, `Earn_coins`, `card_expiry_date`, `View_complain`) VALUES (NULL, '$Customer_Name', '$special_id ', '$Date_of_Birth', '$Customer_Email', '$password', '$Mobile_Number', '$Gender', '$Address', '$LandMark', '$Colony', '$State', '$District', '$Pin_Code', '$Occupation', '$main_image_address', '', '0', '', '')";

session_start();

$query=mysqli_query($conn,$sql);
if($query)
{
    $sql_update_query = "UPDATE `customer` set `sale_id` = '".$_SESSION['sale_id']."' WHERE `special_id` = '$special_id';";
    mysqli_query($conn,$sql_update_query);
    // echo "data update successful";
     echo "<script>alert('account created')</script>";
echo "<script>window.location.href='../Sales/SaleDashboard.php'</script>";
}
else{
    echo "not inserted successfully";
}
?>