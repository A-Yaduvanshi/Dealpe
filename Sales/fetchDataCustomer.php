<?php
include "../api/connection.php";
$k = $_POST['name'];
// $k=trim($k);
session_start();
$sql = "SELECT * FROM `customer` where `Customer_Name`= '$k' and  `sale_id`='" . $_SESSION['sale_id'] . "'";
$res = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($res)) {
?>
    <thead>
        <tr><th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Create Date</th></tr>
        
    </thead>
    <tbody>
        <tr>
            <td><?php echo $rows['id'] ?>
            </td>
            <td><?php echo $rows['Customer_Name'] ?>
            </td>
            <td><?php echo $rows['Customer_Email'] ?>
            </td>
            <td><?php echo $rows['Gender'] ?>
            </td>
            <td><?php echo $rows['Mobile_Number'] ?>
            </td>
            <td><?php echo $rows['create_date'] ?>
            </td>
        </tr>
    </tbody>
<?php }
echo "Please select Business Name";
?>