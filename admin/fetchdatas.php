<?php
include "../api/connection.php";

$k = $_POST['name'];
// $k=trim($k);
$sql = "SELECT * FROM `franchisesignup` where `Business_Name`= '$k'";
$res = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($res)) {
?>

    <thead>
        <th>id</th>
        <th>Business_Name</th>
        <th>owner_name</th>
        <th>Business_email</th>
        <th>Mobile</th>
        <th>Pan_number</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $rows['id'] ?>
            </td>
            <td><?php echo $rows['Business_Name'] ?>
            </td>
            <td><?php echo $rows['owner_name'] ?>
            </td>
            <td><?php echo $rows['Business_email'] ?>
            </td>
            <td><?php echo $rows['Mobile'] ?>
            </td>
            <td><?php echo $rows['Pan_number'] ?>
            </td>
        </tr>
    </tbody>
<?php }
echo "Please select Business Name";
?>