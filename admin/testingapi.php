<?php
include "../api/connection.php";

$cards = $_GET['cards'];

$name = $_GET['name'];

// $arr = array($cards);
$ids = implode(',', $cards);
$run="SELECT * FROM `testing` where `cards` IN($ids) ";
$data=mysqli_query($conn,$run);
$num=mysqli_num_rows($data);
echo $num;
if($num>0){
$sql = "UPDATE `testing` SET `name`='".$name."' WHERE `cards` IN($ids)";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Data update";
    echo "$ids";
}

}
// $sql = "INSERT INTO `testing`(`id`, `cards`, `name`, `date`) VALUES ('')";

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo $row['name'] . "<br>";
//     }
// } else {
//     echo "0 results";
// }


// $name = $_GET['name'];
// $card_no = $_GET['cards'];
// $sql = "UPDATE `testing` SET `name`='" . $name . "' WHERE `cards` IN()";

// $run = mysqli_query($conn, $sql);
// if ($run) {
//     # code...
//     echo "File IS RUnning";
// } else {
//     echo "File IS NOt Running";
// }

?>