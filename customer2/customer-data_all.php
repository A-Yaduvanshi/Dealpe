<?php

include "../api/connection.php";
$selectquery = "select * from customer";
$query = mysqli_query($conn, $selectquery);


?>

<!DOCTYPE html>
<head>
  <title>Sorting Tables w/ JavaScript</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
        @import url(https://fonts.googleapis.com/css?family=Exo+2:300,400,700);

body{font-family: 'Exo 2';font-size: 14px;color: #515151;}
.table{width: 1140px;margin: 0 auto;margin-top: 40px;border: 1px solid #c3c4c7;text-align: left;}

thead tr {background: #00b9ff;  color: #fff;}
tr:nth-child(even){color: inherit;background-color: #00000008;}

.table thead th{border-bottom: 1px solid #c3c4c7;}
.table th{padding: 6px 10px;background: #00000005;}
.table th input[type=checkbox]{width: 18px;height: 18px;}
.table th div{margin-bottom: 5px;}

.table th .action{font-size: 11px;}
.table th .action span{padding: 5px 0;color: #696969;}
.table th .action span:hover{color: #0480ff;cursor: pointer;}

.table th .name{text-transform: uppercase;}
.table th .UserName{font-size: 13px;}

.get-acrion{width: 25px;}
.column-image{width: 43px;}
.table th img{height: 53px;width: 43px;border-radius: 3px;}

@media screen and (max-width:1140px){.table{width: 100%;}}
  
</style>
<body>
    <a style="text-decoration:none;" href="customerregister.html">
    <h5 style="text-align:end;margin-left:10px;padding-top: 10px;">Add New Customer</h5></a>
    <!-- <a style="color:red;" href="customerregister.html">Add New Customer</a> -->
    <table class="table">
        <h1  class="text-center ml-10">customer data are given below</h1>
        <thead>
            <tr>
                <!-- <th class="get-acrion"><input type="checkbox"></th> -->
                <th>id</th>
                <th>owner_image</th>
                <th>Customer_Name</th>
                <th>Date_of_Birth</th>
                <th>Customer_Email</th>
                <th >Password</th>
                <th>Mobile_Number</th>
                <th>Gender</th>
                <th>Address</th>
               <!--  <th>LandMark</th>
                <th>Colony</th>
                <th>State</th>
                <th>District</th>
                <th>Pin_Code</th>
                <th>Occupation</th>
                 -->
            </tr>
        </thead>
       

<?php while ($res = mysqli_fetch_row($query)) { ?>
<tbody>
     <tr>
        <td class="text-center"><?php echo $res[0]; ?></td>
        <td  class="text-center"> <img src="<?php echo $res['15']; ?>" alt="Girl in a jacket" width="50" height="60"></td>
        <td class="text-center"><?php echo $res['1']; ?></td> 
        <td class="text-center"><?php echo $res['3']; ?></td>
        <td class="text-center"><?php echo $res['4']; ?></td>
        <td class="text-center"><?php echo $res['5']; ?></td>
        <td class="text-center"><?php echo $res['6']; ?></td>
       <!--  <!-- <td class="text-center"><?php echo $res['6']; ?></td> -->
        <td class="text-center"><?php echo $res['7']; ?></td>
        <td class="text-center"><?php echo $res['8']; ?></td>
        <td class="text-center"><?php echo $res['9']; ?></td>
        <td class="text-center"><?php echo $res['10']; ?></td>
        <td class="text-center"><?php echo $res['11']; ?></td>
        <td class="text-center"><?php echo $res['12']; ?></td>
        <td class="text-center"><?php echo $res['13']; ?></td>
        <td class="text-center"><?php echo $res['14']; ?></td> -->
    
        <!-- <td class="text-center"><?php echo $res['15']; ?></td> -->
        <td class="no-print">
            <!-- <a href="http://localhost/D/api/DeleteMerchant.php?id=<?php echo $res['id']; ?>" 
            class="btn btn-danger btn-icon btn-xs text-white" data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                    </path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></a> -->

        </td>
    </tr>


 <?php } ?>

 </tbody>

        <tfoot>
        </tfoot>
    </table>


  <script src="./src/tablesort.js"></script>
</body>
</html>