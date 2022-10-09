
<?php
include "../api/connection.php";
$cards = $_GET['cards'];
$name = $_GET['name'];
$arr = array($name);
$ids = implode(', ', $arr);
// $sql = "INSERT INTO `testing`(`id`, `cards`, `name`, `date`) VALUES ('')";
$sql = "UPDATE `testing` SET `cards`='" . $cards . "' WHERE `name` IN(' " . $ids . " ')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Data update";
}

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo $row['name'] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

?>