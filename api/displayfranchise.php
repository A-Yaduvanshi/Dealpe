<?php
include "connection.php";
$sql = "SELECT * FROM franchisesignup";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1px'><tr>
  <th>ID</th>
  <th>email</th>
  <th>password</th>
  <th>confirm_password</th>
  <th>business_name</th>
  <th>owner_name</th>
  <th>business_email</th>
  <th>pan_no</th>
  <th>type_of_business</th>
  <th>address</th>
  <th>landmark</th>
  <th>colony</th>
  <th>state</th>
  <th>district</th>
  <th>zip_code</th>
  <th>owner_image</th>
  
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["password"]."</td>
    <td>".$row["confirmpassword"]."</td>
    <td>".$row["business_name"]."</td>
    <td>".$row["owner_name"]."</td>
    <td>".$row["business_email"]."</td>
    <td>".$row["pan_no"]."</td>
    <td>".$row["type_of_business"]."</td>
    <td>".$row["address"]."</td>
    <td>".$row["landmark"]."</td>
    <td>".$row["colony"]."</td>
    <td>".$row["state"]."</td>
    <td>".$row["district"]."</td>
    <td>".$row["zip_code"]."</td>
    <td><img src='".$row["owner_image"]."' height='100px'\></td>
    </tr>"; 
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>