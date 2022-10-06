<?php
include "connection.php";
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1px'><tr>
  <th>ID</th>
  <th>email</th>
  <th>password</th>
  <th>Customer_Name</th>
  <th>Date_of_Birth</th>
  <th>Customer_Email</th>
  <th>Mobile_Number</th>
  <th>Gender</th>
  <th>Occupation</th>
  <th>Address</th>
  <th>landmark</th>
  <th>colony</th>
  <th>state</th>
  <th>district</th>
  <th>Pin_Code</th>
  <th>owner_image</th>
  
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["password"]."</td>
    <td>".$row["Customer_Name"]."</td>
    <td>".$row["Date_of_Birth"]."</td>
    <td>".$row["Customer_Email"]."</td>
    <td>".$row["Mobile_Number"]."</td>
    <td>".$row["Gender"]."</td>
    <td>".$row["Occupation"]."</td>
    <td>".$row["Address"]."</td>
    <td>".$row["LandMark"]."</td>
    <td>".$row["Colony"]."</td>
    <td>".$row["State"]."</td>
    <td>".$row["District"]."</td>
    <td>".$row["Pin_Code"]."</td>
    <td><img src='".$row["owner_image"]."' height='100px'\></td>
    </tr>"; 
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>