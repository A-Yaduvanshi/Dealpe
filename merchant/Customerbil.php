<?php
//  include "franchiseprofile.php";
include "../api/connection.php";
session_start();
$special_id=$_GET['special_id'];

$total_bill = $_GET['total_bill'];
$transaction = $_GET['transaction'];
$name = $_GET['name'];
// $date=$_GET['date'];
$card_num=$_GET['card_num'];

$sql = "SELECT * FROM `merchant` WHERE `email` = '".$_SESSION['sess_user']."'";
$query = mysqli_query($conn,$sql);

$fetch = mysqli_fetch_assoc($query);


// echo $fetch['dealpay_discount'];

$discount = $total_bill*$fetch['dealpay_discount']/100;
$amount=$total_bill-$discount;
$special_id=$_GET['special_id'];
$sql = "SELECT * FROM `customer` WHERE `special_id` = '".$special_id."'";
$query = mysqli_query($conn,$sql);

$row =  mysqli_fetch_assoc($query);
$s_id=$row['special_id'];
$sql_2="INSERT INTO `bill` (`id`, `transaction`, `name`, `amount`, `card_num`, `date_time`, `special_id`) VALUES (NULL, '$transaction', '$name', '$amount', '$card_num', current_timestamp(), '$s_id')";

$query_2=mysqli_query($conn,$sql_2);



 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="customerbill.css">

    <title>customer bill</title>
</head>

<body>
    <div class="my-5 page" size="A4">
        <div class="p-5">
            <section class="top-content bb d-flex justify-content-between">
                <div class="logo">
                    <img style="height:140px ; width:140px;" src="../dealpaylogo.jpg" alt="filesadja" class="img-fluid">
                </div>
                <div class="top-left">
                    <div class="graphic-path">
                        <!-- <p>Invoice</p> -->
                    </div>
                    <div class="position-relative">
                        <!-- <p>Invoice No. <span>XXXX</span></p> -->
                    </div>
                </div>
            </section>

            <section class="store-user mt-5">
                <div class="col-10">
                    <div class="row bb pb-3">
                        <div class="col-7">
                            <p>Supplier,</p>
                            <h2>DealPe</h2>
                            <!-- <p class="address"> 123 india, <br> noida <br>uttar pradesh </p> -->
                            <!-- <div class="txn mt-2">TXN: XXXXXXX</div> -->
                        </div>
                        <div class="col-5">
                            <p>Client,</p>
                            <!-- <h2>Nitesh</h2> -->
                          <h2> <?php echo $row['Customer_Name'];?><h4>
                         Address:  <?php echo $row['Address'];?>
                            
                            <!-- <p class="address"> 123 india, <br> noida <br>uttar pradesh </p> -->
                            <!-- <div class="txn mt-2">TXN: XXXXXXX</div> -->
                        </div>
                    </div>
                    <div class="row extra-info pt-3">
                        <!-- <div class="col-7">
                            <p>Payment Method: <span>Cash</span></p>
                        </div> -->
                        <div class="col-5">
                            <!-- <p>Deliver Date: <span>10-04.2021</span></p> -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-area mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Item Description</td>
                            <td>Price</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <!-- <img class="mr-3 img-fluid" src="face.png" alt="Product 01"> -->
                                    <div class="media-body">
                                        <p class="mt-0 title">Total Bill</p>
                                        
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $total_bill ?></td>
                            <td>1</td>
                            <td><?php echo $total_bill ?></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <!-- <img class="mr-3 img-fluid" src="Mobile (1).png" alt="Product 02"> -->
                                    <div class="media-body">
                                        <p class="mt-0 title">Dealpay Discount</p>
                                        
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $discount; ?></td>
                            <td>1</td>
                            <td><?php echo $total_bill-$discount; ?></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="balance-info">
                <div class="row">
                    <div class="col-8">
                        <!-- <p class="m-0 font-weight-bold"> Note: </p>
                        <p>hii hlw  how r you you r bill</p> -->
                    </div>
                    <div class="col-4">
                        <table class="table border-0 table-hover">
                            <tr>
                                <td>Sub Total:</td>
                                <td><?php echo $total_bill-$discount; ?></td>
                            </tr>
                            <tfoot>
                                <tr>
                                    <td>Total amount:</td>
                                    <td><?php echo $total_bill-$discount; ?></td>
                                </tr>
                            </tfoot>
                        </table>

                        <!-- Signature -->
                        <div class="col-12">
                            <img src="signature.png" class="img-fluid" alt="">
                            <p class="text-center m-0"> Director Signature </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cart BG -->
            <img src="cart.jpg" class="img-fluid cart-bg" alt="">

            <!-- <footer>
                <hr>
                <p class="m-0 text-center">
                    View THis Invoice Online At - <a href="#!"> invoice/dealpe.com/#868 </a>
                </p>
                <div class="social pt-3">
                    <span class="pr-2">
                        <i class="fas fa-mobile-alt"></i>
                        <span>0123456789</span>
                    </span>
                    <span class="pr-2">
                        <i class="fas fa-envelope"></i>
                        <span>me@dealpe.com</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-facebook-f"></i>
                        <span>/nitesh.7264</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-youtube"></i>
                        <span>/adarsh</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-github"></i>
                        <span>/example</span>
                    </span>
                </div>
            </footer> -->
        </div>
    </div>










</body></html>