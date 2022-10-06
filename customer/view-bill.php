<?php

include '../api/connection.php';
session_start();
$sql = "SELECT * FROM `bill` WHERE `card_num` = '" . $_SESSION['c_user_id'] . "'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

// echo json_encode($row);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Bills</title>
    <style>
        /* 
  Inspired from 
  Settings - Daily UI 007
  by Dillon Morris
  https://dribbble.com/shots/4290939-Settings-Daily-UI-007
*/

        body {
            height: 100px;
        }

        h2 {
            font-weight: bolder;
            color: #898dbf;
        }

        form {
            width: 550px;
        }

        form * {
            font-weight: bold;
        }

        form label {
            font-size: 18px;
            color: #8f9096;
        }

        form .form-control,
        form .form-control:focus {
            border-color: transparent;
            border-bottom-color: #bebcc1;
            box-shadow: none;
        }

        form .btn {
            border-radius: 0px;
            border-color: transparent;
        }

        .btn.btn-default {
            background: #ebebeb;
            color: #8f9096;
        }

        .btn.btn-primary {
            background: #6c63ff;
            color: white;
        }

        .sidebar {
            height: 100vh !important;
            bottom: 0;
            padding-left: 20px;
            font-size: 1.3rem;
            background: #6c63ff;
        }

        @media screen and (max-width:940px) {
            .sidebar {
                font-size: 1rem;
                padding-left: 0px;
            }
        }


        .sidebar .nav-link {
            margin-bottom: 20px;
            color: #dddce5;
        }

        .nav-link.active {
            color: #fff;
        }

        .main>.row {
            height: 100%;
        }

        @media screen and (max-width:768px) {
            .content {
                padding-left: 50px;
                width: 100%;
                padding-top: 200px;
                padding-bottom: 50px;
            }

            form {
                width: 100%;
                margin: auto;
            }

        }

        .menu {
            position: absolute;
            right: 10%;
            top: 30px;
            margin: auto;
            display: none;
            cursor: pointer;
            z-index: 5;
            height: 33px;
            width: 30px;
        }

        .bar,
        .bar:after,
        .bar:before {
            width: 30px;
            height: 3px;
            background: #6c63ff;
            transition: all 0.2s;
        }

        .bar {
            position: relative;
        }

        .bar:after {
            position: absolute;
            content: '';
            left: 0;
            top: 10px;
            transition: top 0.2s 0.2s, transform 0.2s;
        }

        .bar:before {
            position: absolute;
            content: '';
            left: 0;
            bottom: 10px;
            transition: bottom 0.2s 0.2s, transform 0.2s;
        }

        .bar.animate {
            background: transparent;
        }

        .bar.animate:after {
            top: 0;
            transform: rotate(45deg);
            transition: top 0.2s, transform 0.2s 0.2s;
            background: #fff;
        }

        .bar.animate:before {
            bottom: 0;
            transform: rotate(-45deg);
            transition: bottom 0.2s, transform 0.2s 0.2s;
            background: #fff;
        }

        .expand-menu {
            position: absolute;
            z-index: 10;
            height: 100%;
            width: 100%;
            background: #6c63ff;
            transition: width 0.5s;
            width: 0%;
        }

        .expand-menu .nav-link {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
            color: #dddce5;
            font-size: 1.5rem;
            display: none;
            opacity: 0;
            transition: all 0.5s;
        }

        .expand-menu .nav-link.animate {
            display: block;
        }

        .expand-menu .nav-link.animate-show {
            opacity: 1;
        }

        .expand-menu .nav-link.active {
            color: #fff;
        }

        .expand-menu.animate {
            width: 100%;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div class="container-fluid main" style="height:100vh;padding-left:0px;">

        <div class="d-block d-md-none menu">

            <div class="bar"></div>

        </div>

        <div class="expand-menu nav flex-column">
            <a style="font-weight: bold;" href="#" class="nav-link active mt-auto"><img style="width: 50px;height:50px;" src="../dealpaylogo.jpg"> Customer</a>
            <a href="../customer/customer-profile.php" class="nav-link active mt-auto">Customer Profile</a>
            <a href="#" class="nav-link">View Bill</a>


            <a href="#" class="nav-link mb-auto">Request Membership Renew</a>
            <a href="../customer/Editprofile.php" class="nav-link mb-auto">Edit Profile</a>
        </div>

        <div class="row align-items-center" style="height:100%">

            <div class="col-md-3 d-none d-md-block" style="height:100%">

                <div class="container-fluid nav sidebar flex-column">
                    <a style="font-weight: bold;font-size:32px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" href="#" class="nav-link active "><img style="width: 50px;height:50px;" src="../dealpaylogo.jpg"> Customer</a>

                    <a href="./customer-profile.php" class="nav-link active ">Customer Profile</a>
                    <a href="./view-bill.php" class="nav-link">View Bill</a>



                    <!-- <a href="#" class="nav-link"> Coin Balence History</a> -->
                    <!-- <a href="#" class="nav-link">Redeem Coins</a> -->
                    <a href="./Request-Membership-Renew.php" class="nav-link ">Request Membership Renew</a>
                    <a href="../customer/Editprofile.php" class="nav-link mb-auto">Edit Profile</a>



                </div>

            </div>


            <div class="col-md-9" style="padding-bottom: 500px;">
                <a href=""> <button style="background-color: #6c63ff;float: right;">Go Home</button></a>
                <h1 style=" color:brown;font-weight:bold;font-size:50px;text-decoration:underline;text-align:center;">Transaction History</h1>

                <table>
                    <tr>
                        <th>Transaction</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Card Number</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td><?php try {
                                echo $row['transaction'];
                            } catch (Exception $e) {
                                echo 'Message: ';
                            } ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['amount'] ?></td>
                        <td><?php echo $row['card_num'] ?></td>
                        <td><?php echo $row['date_time'] ?></td>
                    </tr>

                </table>







                <!-- <div class="row mt-5">
                            
                                <div class="col">
                                
                                    <button type="button" class="btn btn-primary btn-block">Save Changes</button>
                                
                                </div>
                                
                                <div class="col">
                                
                                    <button type="button" class="btn btn-default btn-block">Cancel</button>
                                
                                </div>
                            
                            </div> -->

                </form>

            </div>

        </div>

    </div>

    </div>

    </div>

    </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="customercard2.js"></script>

</body>

</html>