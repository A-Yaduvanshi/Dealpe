
<?php
include "../api/connection.php";
$name=$_GET['name'];
$card_no=$_GET['cards'];
$sql="UPDATE `testing` SET `name`='".$name."' WHERE `cards` IN(1,5,4,3)";

$run=mysqli_query($conn,$sql);
if ($run) {
    # code...
    echo "File IS RUnning";
}else{
    echo "File IS NOt Running";
}
?>