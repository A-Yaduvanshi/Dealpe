<?php
include "../api/connection.php";
//  error_reporting = E_ALL & ~E_NOTICE
session_start();
//      $sql = "SELECT * FROM `franchisesignup`";
//      $query = mysqli_query($conn,$sql);
//      // $row = mysqli_fetch_assoc($query);
//      $sql_2 = "SELECT * FROM `membership_card`";
//      $membership_card = mysqli_query($conn,$sql_2);
//      //counting
//      $sql_3="SELECT * FROM `sales` WHERE `id` = '".$_SESSION['sess_user']."'";
//      $query_3=mysqli_query($conn,$sql_3);
//     $three_months = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `assign_name` = 'association' and `expiry_date`='3 months';";
// 	$runthree = mysqli_query($conn,$three_months);
// 	$rowTHree = mysqli_fetch_assoc($runthree);
//     $totalThree = $rowTHree['total_pet'];
// //counting
// 	$six_months = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `assign_name` = 'association' and `expiry_date`='6 months';";
// 	$runsix = mysqli_query($conn,$six_months);
//     $totalSix = mysqli_fetch_assoc($runsix);
//     $totalSix =  $totalSix['total_pet'];	
// $unsoldCard = $rowTHree + $rowsix;
$sql_3 = "SELECT * FROM `sales` WHERE `frachise_id` = '" . $_SESSION['sess_user'] . "'";
$query_3 = mysqli_query($conn, $sql_3);
// echo $sql_3;
$sql_4 = "SELECT * FROM `franchisesignup` WHERE `id` = '" . $_SESSION['sess_user'] . "'";
$query_4 = mysqli_query($conn, $sql_4);
$fetchBussinessName = mysqli_fetch_assoc($query_4);
$bussiness = $fetchBussinessName['Business_Name'];
$three_months = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `assign`='1' AND`assign_name`='" . $bussiness . "' AND `asign_count`='1' ";
$runthree = mysqli_query($conn, $three_months);
$rowTHree = mysqli_fetch_assoc($runthree);
$totalThree = $rowTHree['total_pet'];
// echo "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `assign_name` = '".$bussiness."' and `expiry_date`='3 months'";
$six_months = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `assign`='1' AND`assign_name`='" . $bussiness . "' AND `asign_count`='1'";
$runsix = mysqli_query($conn, $six_months);
$totalSix = mysqli_fetch_assoc($runsix);
$totalSix =  $totalSix['total_pet'];
// $unsoldCard = $rowTHree + $rowsix;
//Fetching membership Card num for 3 months
$T_month = "SELECT *FROM `membership_card` WHERE `assign`='1' AND`assign_name`='" . $bussiness . "' AND `asign_count`='1'";
$T = mysqli_query($conn, $T_month);
// $T_r = mysqli_fetch_assoc($T);
//Fetching membership Card num for 6 months
$S_month = "SELECT *FROM `membership_card` WHERE `assign`='1' AND`assign_name`='" . $bussiness . "' AND `asign_count`='1'";
$S = mysqli_query($conn, $S_month);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <title>Assign Card Sales</title>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--<title>Responsive Regisration Form </title>-->
</head>
<style>
    /* ===== Google Font Import - Poppins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #4070f4;
    }

    .container {
        position: relative;
        max-width: 900px;
        width: 100%;
        border-radius: 6px;
        padding: 30px;
        margin: 0 15px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .container header {
        position: relative;
        font-size: 20px;
        font-weight: 600;
        color: #333;
    }

    .container header::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 3px;
        width: 27px;
        border-radius: 8px;
        /* background-color: #4070f4; */
    }

    .container form {
        position: relative;
        margin-top: 16px;
        min-height: 200px;
        background-color: #fff;
        overflow: hidden;
    }

    .container form .form {
        position: absolute;
        background-color: #fff;
        transition: 0.3s ease;
    }

    .container form .form.second {
        opacity: 0;
        pointer-events: none;
        transform: translateX(100%);
    }

    form.secActive .form.second {
        opacity: 1;
        pointer-events: auto;
        transform: translateX(0);
    }

    form.secActive .form.first {
        opacity: 0;
        pointer-events: none;
        transform: translateX(-100%);
    }

    .container form .title {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
        font-weight: 500;
        margin: 6px 0;
        color: #333;
    }

    .container form .fields {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    form .fields .input-field {
        display: flex;
        width: calc(100% / 3 - 15px);
        flex-direction: column;
        margin: 4px 0;
    }

    .input-field label {
        font-size: 12px;
        font-weight: 500;
        color: #2e2e2e;
    }

    .input-field input,
    select {
        outline: none;
        font-size: 14px;
        font-weight: 400;
        color: #333;
        border-radius: 5px;
        border: 1px solid #aaa;
        padding: 0 15px;
        height: 42px;
        margin: 8px 0;
    }

    .input-field input :focus,
    .input-field select:focus {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
    }

    .input-field select,
    .input-field input[type="date"] {
        color: #707070;
    }

    .input-field input[type="date"]:valid {
        color: #333;
    }

    .container form button,
    .backBtn {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 45px;
        max-width: 200px;
        width: 100%;
        border: none;
        outline: none;
        color: #fff;
        border-radius: 5px;
        margin: 25px 0;
        background-color: #4070f4;
        transition: all 0.3s linear;
        cursor: pointer;
    }

    .container form .btnText {
        font-size: 14px;
        font-weight: 400;
    }

    form button:hover {
        background-color: #265df2;
    }

    form button i,
    form .backBtn i {
        margin: 0 6px;
    }

    form .backBtn i {
        transform: rotate(180deg);
    }

    form .buttons {
        display: flex;
        align-items: center;
    }

    form .buttons button,
    .backBtn {
        margin-right: 14px;
    }

    @media (max-width: 750px) {
        .container form {
            overflow-y: scroll;
        }

        .container form::-webkit-scrollbar {
            display: none;
        }

        form .fields .input-field {
            width: calc(100% / 2 - 15px);
        }
    }

    @media (max-width: 550px) {
        form .fields .input-field {
            width: 100%;
        }
    }
</style>

<body>
    <div class="container">
        <header style="font-weight: bold; color:brown;text-align:center;text-decoration:underline;font-size:30px;">Assign Card to Sale</header>
        <!-- <img   src="man.jpg" class="rounded float-end" style="height: 200px;width:200px;padding: ;" alt="..."> -->
        <!-- <img style="height: 200px;width:200px; margin-top: 10px; "src="man.jpg"> -->
        <a href="../franchise/franchisedashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:10px; border-radius: 10px;">Go Home</button></a>
        <div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-sm-4 border" style="padding: 10px;font-weight:bold;text-align: center;">
                    <h5>Available Sales</h5>
                    <input list="list1" style="width: 70%;">
                    <datalist id="list1">
                        <?php while ($row = mysqli_fetch_assoc($query_3)) { ?>
                            <option><?php echo $row['Customer_name'] ?></option>
                        <?php } ?>
                    </datalist>
                </div>
                <div class="col-sm-4 border" style="padding: 10px; font-weight:bold;">
                    <h5>Total Cards : <?php echo $totalThree; ?></h5>
                    <!-- <h5>Total 6_month Cards: <?php echo $totalSix; ?></h5> -->
                    <input list="list2" style="width: 80%;margin-bottom:10px;">
                    <datalist id="list2">
                        <?php while ($T_r = mysqli_fetch_assoc($T)) { ?>
                            <option><?php echo $T_r['membership_card'] ?></option>
                        <?php } ?>
                    </datalist>
                </div>
                <!-- <div class="col-sm-3 border" style="padding: 10px;font-weight:bold;text-align: center;">

                    -->
                <!-- <input list="list3" style="width: 80%;">
                        <datalist id="list3">
                            <?php while ($S_r = mysqli_fetch_assoc($S)) { ?>
                                <option><?php echo $S_r['membership_card'] ?></option>
                            <?php } ?>
                        </datalist> -->
                <!-- </div> -->
            </div>
        </div>
        <form action="assignCard.php" method="get" enctype="multipart/form-data">
            <div class="form first" style="margin-left: 100px;">
                <!-- < class="details personal"> -->
                <span class="title" style="font-size: 22px;text-align:center;text-decoration:underline;">Assign Card to sale</span>
                <div class="fields">
                    <div class="input-field">
                        <label>Enter Card Number</label>
                        <input type="text" placeholder="Enter the number of cards" name="membership_card" required>
                    </div>
                    <div class="input-field">
                        <label>Sales Name</label>
                        <input type="text" placeholder="Enter the sales name" name="sales_name" required>
                    </div>
                    <!-- <div class="input-field">
                        <label>Membership Duration</label>
                        <select name="exiry_date">
                            <option value="3 months">3 months</option>
                            <option value="6 months">6 months</option>
                        </select>
                    </div> -->
                    <div class="input-field">
                        <label>Quantity</label>
                        <input type="text" placeholder="Enter cards quantity" name="quantity" required>
                    </div>
                </div>
                <div class="details ID">
                    <!-- <span class="title">Identity Details</span> -->
                    <div class="fields">
                        <button class="nextBtn" style="margin-left: 180px;">
                            <span class="btnText">Submit</span>
                            <!-- <i class="uil uil-navigator"></i> -->
                        </button>
                    </div>
                </div>
        </form>
    </div>
    <!-- <scr src="script.js"></scr/ipt> -->
</body>

</html>