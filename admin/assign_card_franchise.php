<?php
include "../api/connection.php";
$sql = "SELECT * FROM `franchisesignup`";
$query = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($query);
$sql_2 = "SELECT * FROM `membership_card`";
$membership_card = mysqli_query($conn, $sql_2);
$six_months = "SELECT * FROM `membership_card` WHERE `assign` != 1 and `asign_count` !=1";
$runsix = mysqli_query($conn, $six_months);
$rowsix = mysqli_num_rows($runsix);
// $unsoldCard = $rowTHree + $rowsix
$sql_2 = "SELECT * FROM `membership_card` WHERE `assign` != 1 and `asign_count` !=1";
$run = mysqli_query($conn, $sql_2);
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
    <title>Assign Card Franchise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./script/getData.js"></script>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--<title>Responsive Regisration Form </title>-->
</head>
<style>
    /* ===== Google Font Import - Poppins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    table {
        margin: 10px;
    }

    th {
        padding: 10px;
        margin: auto;
        border: 0.5px solid #2e2e2e;
        border-radius: 50px;
    }

    td {
        border: 0.5px solid #2e2e2e;
        padding: 10px;
        text-align: center;
        margin: auto;
    }
</style>

<body class="bg-dark m-5">
    <div class="container-fluid container-md container-sm border border-primary bg-white">
        <header style="font-weight: bold; color:brown;text-align:center;text-decoration:underline;font-size:30px;">Assign Cards To Franchise</header>
        <!-- <img   src="man.jpg" class="rounded float-end" style="height: 200px;width:200px;padding: ;" alt="..."> -->
        <!-- <img style="height: 200px;width:200px; margin-top: 10px; "src="man.jpg"> -->
        <a href="../admin/dashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:8px; border-radius: 10px;">Go Home</button></a>
        <div class="container-fluid container-md container-sm  bg-white mt-5">
            <h5 class="row mb-4 ">Total Available Cards: <?php echo $rowsix; ?></h5>
            <div class="row mx-2 p-4 border">
                <h5 class="m-3">franchise Business name</h5 class="m-3">
                <div class="col-3  ">
                    <!-- <select id="franchise" onchange="selectchange()"> -->
                    <input list="list" name="name" id="franchise" onchange="selectchange()">
                    <datalist id="list">
                        <option value="" selected="selected">Select Employee Name</option>
                        <?php
                        include "../api/connection.php";
                        $sql = "SELECT * FROM `franchisesignup`";
                        $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                        while ($rows = mysqli_fetch_assoc($resultset)) {
                        ?>
                            <option><?php echo $rows["Business_Name"]; ?></option>
                        <?php }    ?>
                    </datalist>
                    <!-- </select> -->
                </div>
                <div class="col-5">
                    <table id="ans">
                    </table>
                </div>
            </div>
        </div>
        <div class="container-fluid my-5 border border-primary">
            <form action="assignCard.php" method="POST" enctype="multipart/form-data">
                <div class="container-fluid container-md container-sm ">
                    <!-- < class="details personal"> -->
                    <!-- <span class="title" style="font-size: 22px;text-align:center;text-decoration:underline;">Assign Cards</span> -->
                    <div class="row ">
                        <div class="col-3 m-4">
                            <label>Available membership_card</label>
                            <input list="list1" name="membership_card" placeholder="select card no.">
                            <datalist id="list1">
                                <?php while ($row_2 = mysqli_fetch_assoc($run)) { ?>
                                    <option><?php echo $row_2['membership_card'] ?></option>
                                <?php } ?>
                            </datalist>
                        </div>
                        <div class="col-2 m-4 ">
                            <label>Enter Franchise Id No.</label>
                            <input type="text" placeholder="Enter Franchise ID no." name="id" required>
                        </div>
                        <div class="col-2 m-4">
                            <label>Franchise Name</label>
                            <input type="text" placeholder="Enter your name" name="franchise_name" required>
                        </div>
                        <div class="col-3 m-4">
                            <label>Membership card Quantity</label>
                            <input type="text" placeholder="Enter number Quantity" name="quantity" required>
                        </div>
                        <!-- <div class="input-field">
                         <label>Membership Duration</label>
                         <select name="exiry_date">
                             <option value="3 months">3 months</option>
                             <option value="6 months">6 months</option>
                         </select>
                     </div> -->
                        <div class="m-3 text-center">
                            <!-- <span class="title">Identity Details</span> -->
                            <button type="text" name="submit" class="btn btn-primary"><span class="btnText">Submit</span></button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- <scr src="script.js"></scr/ipt> -->
</body>

</html>