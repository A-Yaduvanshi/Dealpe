<!-- include "mydbCon.php";

$id = $_POST['id'];

$selectquery = "select * from merchant WHERE id = '" . $id . "'";

$result = mysqli_query($dbCon,$query);

$cust = mysqli_fetch_array($result);

if($cust) {

echo json_encode($cust);

} else {

echo "Error: " . $sql . "" . mysqli_error($dbCon);

}

?> -->
<?php
include "connection.php";
$id = $_POST['id'];
$selectquery = "select * from merchant WHERE id = '" . $id . "'";
$query = mysqli_query($conn, $selectquery);
if ($query) {
    echo json_encode($query);
    //  echo "<br>";
    // $nums = mysqli_num_rows($query);
    // if ($nums == 0) {
    //     echo "no record";
    // } else {
    //     echo $nums;
    //     echo "<table border='2'>";
    //     echo "<tr>";
    //     echo "<th>id</th>";
    //     echo "<th>email</th>";
    //     echo "<th>password</th>";
    //     echo "<th>bussinessname</th>";
    //     echo "<th>mobile_no</th>";
    //     echo "<th>email_id</th>";
    //     echo "<th>Bussiness_Address</th>";
    //     echo "<th>bussinesscategory</th>";
    //     echo "<th> businessworking houre</th>";
    //     echo "<th> dealpay_discount</th>";
    //     echo "<th>agreement ends Date</th>";
    //     echo "</tr>";
    //     while ($res = mysqli_fetch_array($query)) {

    //         echo "<table border='1'>";
    //         echo "<tr>";
    //         echo "<td>" . $res['id'] . "</td>";
    //         echo "<td>" . $res['email'] . "</td>";
    //         echo "<td>" . $res['password'] . "</td>";
    //         echo "<td>" . $res['bussinessname'] . "</td>";
    //         echo "<td>" . $res['mobile_no'] . "</td>";
    //         echo "<td>" . $res['email_id'] . "</td>";
    //         echo "<td>" . $res['Bussiness_Address'] . "</td>";
    //         echo "<td>" . $res['bussiness category'] . "</td>";
    //         echo "<td>" . $res['bussiness working houre'] . "</td>";
    //         echo "<td>" . $res['dealpay_discount'] . "</td>";
    //         echo "<td>" . $res['agreement ends Date'] . "</td>";

    //         echo "</tr>";
    //     }
    //     echo "<table>";
    // }
} else {
    echo "no data found";
}
?>