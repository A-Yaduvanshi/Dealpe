<?php
include "../api/connection.php";
$k=$_POST['id'];
$k=trim($k);
$sql="SELECT * FROM `membership_card` WHERE `assign_name`='{$k}'";
$run=mysqli_query($conn,$sql);

while($row=$fetch=mysqli_fetch_array($run)){


?>
<tr>
    <td><?php echo $row['id']?></td>
    <td class="no-print">

<a href="../admin/franchisecardupdate.php?id=<?php echo $row['id'];?>">
<button class="btn btn-block bg-danger text-white">Edit</button>
</a>
</td>
    
</tr>
<?php
}
echo $sql;
?>