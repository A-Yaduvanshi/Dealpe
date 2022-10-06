<?php

include "../api/connection.php";
$selectquery = "SELECT * FROM `membership_card` WHERE `customer_select`=0;";
$query = mysqli_query($conn, $selectquery);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dealpay</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Cache-control" content="no-cache">

    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>

<body class="d-flex flex-column h-100p" onload="FreshworksWidget('hide', 'launcher');">
    <!-- navbar -->

    <!--BREADCRUM CONTAINER -->
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <img style="height: 150px;width: 150px;" src="../dealpaylogo.jpg">

                
                </nav>

            </div>
 <h2 style="color:#951010;font-weight: bold;" class="text-center">Total Card Unsold</h2>
 <a href="../admin/dashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:8px; border-radius: 10px; margin-bottom:10px">Go Home</button></a>
        </div>
    </div>
    </div>
    <!--BREADCRUM CONTAINER -->
    <!-- Main content -->
    <div class="container-fluid pd-x-0">
        <div data-label="Leave Applications" class="df-example demo-table mg-t-25">
            <div class="table-responsive">
                <table class="table tx-13 table-bordered 1.5px solid black" id="example1">
                    <thead>
                        <!-- <th class="text-center">S.No.</th> -->
                        <th class="text-center">membership_card</th>
                        <th class="text-center">membership_price</th>
                        <th class="text-center">expiry_date</th>
                        <th class="text-center">total_membership_assign</th>
                        <th class="text-center">date</th>
                        <th class="text-center">membership_offer</th>
                     <!--    <th class="text-center">Category</th>                        
                        <th class="text-center">Address</th>
                        <th class="text-center">Landmark</th>
                        <th class="text-center">Colony</th> -->
                        <!-- th class="text-center">State</th>
                        <th class="text-center">District</th>
                        <th class="text-center">Pin Code</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Agreement Ends DATE</th> -->
                    </thead>
                    <tbody>

                        <?php while ($res = mysqli_fetch_row($query)) { ?>

                            <tr>
                                <!-- <td class="text-center"><?php echo $res[0]; ?></td> -->
                                <td class="text-center"><?php echo $res['1']; ?></td> 
                                <td class="text-center"><?php echo $res['2']; ?></td>
                                <td class="text-center"><?php echo $res['3']; ?></td>
                                <td class="text-center"><?php echo $res['4']; ?></td>
                                <td class="text-center"><?php echo $res['5']; ?></td>
                                <td class="text-center"><?php echo $res['6']; ?></td>
                                <td class="text-center"><?php echo $res['7']; ?></td>
                
                            </tr>


                        <?php } ?>

                    </tbody>
                </table>
            </div>
         </div>
        </div>
    </div> 
  </div>
</div>
        </body>

        </html>