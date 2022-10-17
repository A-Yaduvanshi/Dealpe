<?php
include "../api/connection.php";

$k = $_POST['name'];
// $k=trim($k);
session_start();
$franchise_name= $_SESSION['Business_Name'];
$id = $_SESSION['sess_user'];
$sql = "SELECT * FROM `sales` where `Customer_name`= '$k' and  `frachise_id`='" . $id . "'";
$res = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($res)) {
?>

    <thead>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Create Date</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $rows['id'] ?>
            </td>
            <td><?php echo $rows['Customer_name'] ?>
            </td>
            <td><?php echo $rows['Customer_email'] ?>
            </td>
            <td><?php echo $rows['gender'] ?>
            </td>
            <td><?php echo $rows['mobile_no'] ?>
            </td>
            <td><?php echo $rows['create_date'] ?>
            </td>
        </tr>
    </tbody>
<?php }
echo "Please select Business Name";
?>