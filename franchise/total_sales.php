<?php
include '../api/connection.php';
session_start();
// echo $_SESSION['sess_user'];
$sql = "SELECT * FROM `sales` where `frachise_id`='" . $_SESSION['sess_user'] . "'";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Sales Executive</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Libre Barcode 39' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        /*body {
    font-family: 'Libre Barcode 39';font-size: 22px;
}*/
    </style>
</head>
<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: #efefef;
        padding: 25px;
    }

    .container {
        max-width: 1500px;
        width: 100%;
        height: 100vh;
        margin: 25px auto;
        padding: 15px;
        background-color: #fff;
        box-shadow: 0 2px 20px #0001, 0 1px 6px #0001;
        border-radius: 5px;
        overflow-x: auto;
    }

    .form_control {
        border: 1px solid #0002;
        background-color: transparent;
        outline: none;
        padding: 8px 12px;
        width: 60%;
        color: #333;
        margin-bottom: 15px;
    }

    .form_control::placeholder {
        color: inherit;
        opacity: 0.5;
    }

    .form_control:is(:hover, :focus) {
        box-shadow: inset 0 1px 6px #0002;
        border-radius: 5px;
    }

    .success {
        background-color: #24b96f !important;
    }

    .warning {
        background-color: #ebba33 !important;
    }

    .primary {
        background-color: #259dff !important;
    }

    .secondery {
        background-color: #00bcd4 !important;
    }

    .danger {
        background-color: #ff5722 !important;
    }

    .action_btn {
        display: inline-flex;
        align-items: center;
    }

    .action_btn>* {
        border: none;
        outline: none;
        color: #fff;
        text-decoration: none;
        display: inline-block;
        padding: 8px 14px;
        position: relative;
        transition: 0.3s ease-in-out;
    }

    .action_btn>*+* {
        border-left: 1px solid #0003;
    }

    .action_btn>*:hover {
        filter: hue-rotate(-20deg) brightness(0.97);
        transform: scale(1.05);
        border-color: transparent;
        box-shadow: 0 2px 10px #0004;
        border-radius: 4px;
    }

    .action_btn>*:active {
        transform: scale(1);
        box-shadow: 0 2px 5px #0004;
    }

    ._table {
        width: 100%;
        border-collapse: collapse;
    }

    ._table :is(th, td) {
        border: 1px solid #0002;
        padding: 8px 25px;
    }

    ._table th {
        position: relative;
        user-select: none;
    }

    ._table th:hover {
        background-color: #0001;
        cursor: pointer;
    }

    ._table th::after {
        content: '\25b4';
        position: absolute;
        right: 10px;
        font-size: inherit;
        transform-origin: center;
        transform: rotate(180deg);
    }

    ._table th.asc {
        background-color: #0001;
    }

    ._table th.asc::after {
        transform: rotate(0deg);
    }
</style>

<body>
    <div class="containerr  bg-white text-white">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <img style="height: 150px;width: 150px;" src="../dealpaylogo.jpg">
                    <a href="../franchise/franchisedashboard.php"> <button style="background-color: #6c63ff;color:white;padding:10px; border-radius: 10px;">Go Home</button></a>
                </nav>
            </div>
            <h2 style="color:#951010;font-weight: bold;" class="text-center">Sales Executive</h2>
            <a href="./salesregis.html" class="btn btn-primary button " style="margin-right:40px;">Add New Sales</a>
        </div>
    </div>
    </div>
    <div class="container">
        <input type="search" oninput="filter_table(this, 'table_filter')" class="form_control" placeholder="Filter This Table...">
        <table class="_table table_sort">
            <thead>
                <tr>
                    <th>SALES EXECUTIVE ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>PASSWORD</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>STATE</th>
                    <th>DISTRICT</th>
                    <th>PIN CODE</th>
                    <th>Phone</th>

                    <th>Commission</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="table_filter">
                <?php while ($row = mysqli_fetch_row($query)) { ?>
                    <tr>
                        <td><?php echo $row['1']; ?></td>
                        <td><?php echo $row['2']; ?></td>
                        <td><?php echo $row['4']; ?></td>
                        <td><?php echo $row['5']; ?></td>
                        <td>
                            <?php echo $row['6']; ?>
                            <!-- <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5> -->
                        </td>

                        <td><?php echo $row['8']; ?></td>

                        <!-- <td><?php echo $row['7']; ?></td>   -->
                        <td><?php echo $row['11']; ?></td>
                        <td><?php echo $row['12']; ?></td>
                        <td><?php echo $row['14']; ?></td>
                        <td><?php echo $row['13']; ?></td>
                        <td><?php echo $row['19']; ?></td>
                        <td>
                            <a href="./deleteSale.php?id=<?php echo $row['0']; ?>">
                                <Button class="btn btn-block bg-warning">Remove</Button>
                            </a>
                        </td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>
    <!-- HTML code goes here -->
    <script src="all.js"></script>
</body>

</html>