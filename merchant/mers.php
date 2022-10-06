<?php

include "../api/connection.php";
$selectquery = "select * from merchant";
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
 <h2 style="color:#951010;font-weight: bold;" class="text-center">Merchant Data</h2>
            <a  href="./merchantregistration.html " class="btn btn-primary button">Add New Merchant</a>
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
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Business Name</th>
                        <th class="text-center">mobile No.</th>
                        <th class="text-center">Email Id</th>
                        <th class="text-center">password</th>
                        <th class="text-center">Starting Time</th>
                        <th class="text-center">End Time</th>
                        <th class="text-center">Category</th>                        
                        <th class="text-center">Address</th>
                        <th class="text-center">Landmark</th>
                        <th class="text-center">Colony</th>
                        <th class="text-center">State</th>
                        <th class="text-center">District</th>
                        <th class="text-center">Pin Code</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Agreement Ends DATE</th>
                        <th class="text-center">Remove</th>
                    </thead>
                    <tbody>

                        <?php while ($res = mysqli_fetch_row($query)) { ?>

                            <tr>
                                <td class="text-center"><?php echo $res['0']; ?></td>
                                <td class="text-center"><?php echo $res['3']; ?></td> 
                                <td class="text-center"><?php echo $res['5']; ?></td>
                                <td class="text-center"><?php echo $res['1']; ?></td>
                                <td class="text-center"><?php echo $res['2']; ?></td>
                                <td class="text-center"><?php echo $res['17']; ?></td>
                                <td class="text-center"><?php echo $res['18']; ?></td>
                                <td class="text-center"><?php echo $res['7']; ?></td>
                                <td class="text-center"><?php echo $res['9']; ?></td>
                                <td class="text-center"><?php echo $res['8']; ?></td>
                                <td class="text-center"><?php echo $res['10']; ?></td>
                                <td class="text-center"><?php echo $res['11']; ?></td>
                                <td class="text-center"><?php echo $res['12']; ?></td>
                                <td class="text-center"><?php echo $res['13']; ?></td>
                                <td class="text-center"><?php echo $res['14']; ?></td>
                                <td class="text-center"><?php echo $res['15']; ?></td>
                                
                                <td class="no-print">

                                    <a href="./merchnat_delete.php?id=<?php echo $res[0];?>">
                                    <button class="btn btn-block bg-danger text-white">Delete</button>
                                    </a>
                                    <!-- <a href="http://localhost/dealpayAmannUpdate/deal/merchant/merchnat_delete.php?id=<?php echo $res['id']; ?>" 
                                      class="btn btn-danger btn-icon btn-xs text-white" data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>
 -->
                                </td>
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