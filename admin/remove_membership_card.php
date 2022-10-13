 <?php
    include "../api/connection.php";
    $sql = "SELECT * FROM `membership_card` WHERE `assign_name` != ''  ";
    $query = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($query);
    $sql_2 = "SELECT * FROM `franchisesignup`";
    $membership_card = mysqli_query($conn, $sql_2);
    ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
     <!----======== CSS ======== -->
     <!-- <link rel="stylesheet" href="style.css"> -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
 </head>
 <style>
     /* ===== Google Font Import - Poppins ===== */
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
 </style>
<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
 <body>
<div class="container mt-5">
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr >
      <th class="th-sm">membership_card
      </th>
      <th class="th-sm">Franchise Business Name
      </th>
      <th class="th-sm">Months
      </th>
      <th class="th-sm">assign Date
      </th>
      <th class="th-sm">new membership_card</th>
      <th class="th-sm">Replace Button</th>
    </tr>
  </thead>
  <tbody>
  <?php
while ($row=mysqli_fetch_assoc($query)) {?>
    <tr>
    <td><?php echo $row['membership_card'] ?></td>
    <td><?php echo $row['assign_name'] ?></td>
    <td><?php echo $row['validity_date'] ?></td>
    <td><?php echo $row['assign_date'] ?></td>
<td><input placeholder="enter value" name="replace"></td>
<td><a href="./removeCard.php?id=<?php echo $res[0];?>">
<button class="btn btn-block bg-danger text-white">replace</button>
</a></td> 
</tr>
<?php }
  ?>
  </tbody>
</table>
</div> 
</body>
 </html>