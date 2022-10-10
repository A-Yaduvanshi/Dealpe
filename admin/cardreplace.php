<?php
include "../api/connection.php";

$id=$_GET['id'];

$card=$_GET['card'];

$sql="UPDATE `membership_card` SET `membership_card`='".$card."',`date`=current_timestamp() WHERE `id`='".$id."'";
$run=mysqli_query($conn,$sql);
if ($run) {
    # code...
    echo "File Run";
}
?>