<?php 

include '../api/connection.php';
session_start();
$sql = "SELECT * FROM `customer` WHERE `member_ship_card` = '".$_SESSION['c_user_id']."'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

// echo json_encode($row);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     <style>
        
        .contact-sec {
            position: relative;
            justify-content: center;
            align-items: center;
            display: flex;
            min-height: 80vh;
            background: rgb(217, 241, 252);
        }
    
        .contact-sec::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background-color: rgb(217, 241, 252);
        }
    
        .contact-container {
            position: relative;
            min-width: 1100px;
            min-height: 610px;
            display: flex;
            z-index: 1000;
        }
    
        .contact {
        position: absolute;
        top: 40px;
        left:100px;
        width: 240px;
        height: 115%;
        background-color: rgb(109, 206, 232);
        z-index: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
        justify-content: space-between;
        }
    
        .contact-info h2 {
            color: black;
            font-size: 30px;
        }

        .contact-info ul{
            padding-left: 0px;
        }
    
        .contact-icon li {
            list-style: none;
            display: flex;
            margin: 20px 0;
            cursor: pointer;
        }
    
        .contact-icon i {
            font-size: 30px;
        }
    
        .contact-icon span {
            margin-left: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 700;
            font-size: 18px ;
        }
    
        .contact-logo {
            position: relative;
            display: flex;
        }
    
        .contact-logo li {
            list-style: none;
            margin-right: 15px;
        }
    
        .contact-logo li a {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
    
        .contact-logo li a:hover {
            padding-left: 5px;
            opacity: .5;
        }
    
        .contact-form {
            position: absolute;
            padding: 70px 50px;
            /* padding: 30px 50px; */
            background: rgb(255, 255, 255);
            /* margin-left: 150px;
            padding-left: 250px; */
            margin-left: 170px;
            padding-left: 250px;
            color: black;
            width: calc(100%-150px);
            font-family: cursive;
            height: 130%;
            box-shadow: 0px 10px 15px 10px rgba(0, 0, 0, 0.3);
        }
    
        .contact-form h3 {
            color: rgb(13, 52, 38);
            padding-right: 100px;
            font-size: 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 500;
        }
    
        .contact-formBox {
            position: relative;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 20px;
        }
    
        .contact-inputBox {
            position: relative;
            margin: 0 0 90px 0;
        }
    
        .contact-inputBox.w50 {
            width: 25%;
        }
    
        .contact-inputBox.w100 {
            width: 100%;
        }
    
        .contact-inputBox input,
        textarea {
            width: 100% !important;
            padding: 2px 0;  
            resize: none;
            font-size: 20px;
            font-weight: 300;
            color: black;
            border: none;
            border-bottom: 1px solid #777;
            outline: none;
        }
    
        .contact-inputBox textarea {
            min-height: 40px;
        }
    
        .contact-inputBox span {
            position: absolute;
            left: 0;
            padding: 2px 0;
            font-size: 18px;
            font-weight: 300;
            color: #777;
            transition: .5s;
            pointer-events: none;
        }

        .contact-inputBox input:focus ~ span , 
        .contact-inputBox input:valid ~ span,
        .contact-inputBox textarea:focus ~ span ,
        .contact-inputBox textarea:valid ~ span {
            transform: translateY(-30px);
        }

        .btn{
            padding: 10px;
            border: none;
            margin-top: -50px;
            cursor: pointer;
            border-radius: 20px;
            background-color: rgb(84, 188, 236);
            font-size: 20px;
            font-weight: 200;
        }
    </style>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Contact Us -->
    <section class="contact-sec">

        <div class="contact-container">
            <div class="contact">
                <div class="contact-info">
                     <ul class="contact-icon">
                         <li>
                            <a href="customer-profile.php">
                            <i class="bi bi-caret-right-fill text-dark"></i>
                            <span class="text-dark">Customer-Profile</span>
                        </a>
                        </li>
                        <li>
                            <a href="card-expiry-date.php">
                            <i class="bi bi-caret-right-fill text-dark"></i>
                            <span class="text-dark">Card Expiry Date</span>
                        </a>
                        </li>
                        <li>
                            <a href="view-bill.php">
                            <i class="bi bi-caret-right-fill text-dark"></i>
                            <span class="text-dark">View Bills</span>
                        </a>
                        </li>
                        <li>
                            <a href="customer-balance.php">
                            <i class="bi bi-caret-right-fill text-dark"></i>
                            <span class="text-dark">View Coins Balanc</span>
                        </a>
                        </li>
                        <li>
                            <a href="Coin-Balance-History.php">
                            <i class="bi bi-caret-right-fill text-dark"></i>
                            <span class="text-dark">Coin Balance History</span>
                        </a>
                        </li>
                        <li>
                            <a href="Redeem-Coins.php">
                            <i class="bi bi-caret-right-fill text-dark"></i>
                            <span class="text-dark">Redeem Coins</span>
                        </a>
                        </li>
                        <li>
                            <a href="Request-Membership-Renew.php">
                            <i class="bi bi-caret-right-fill text-dark"></i>
                            <span class="text-dark">Request Membership Renew</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact-form">
                <div style="display:flex ;">
                    <div class="contact-inputBox w50" style="display: flex;">
                        <img src="./image/man1.png" style="height:15vh; width: 15vh;">
                        <!-- <span style="align-self: center;">Profile</span> -->
                    </div>
                    <h3 style="text-align: center;"><i class="bi bi-pencil-square"></i> Edit Your Details here</h3>
                    <!-- <hr style="margin-top: -20px; width: 25%; border-bottom: 5px solid rgb(42, 70, 137);"> -->
                </div>
                <div class="contact-formBox">
                    <!-- <div class="contact-inputBox w50" style="display: flex;">
                        <img src="imgs/user.png" style="height:15vh; width: 15vh; padding-left: 10vh;">
                        <span style="align-self: center;">Profile</span>
                    </div> -->
                    <div class="contact-inputBox w50">
                        <input type="text" name="" value="<?php echo $row['Customer_Email']; ?>" required>
                        <span>Email Address</span>
                    </div>
                    <div class="contact-inputBox w50">
                        <input type="text" name="" value="<?php echo $row['Mobile_Number']; ?>" required>
                        <span>Mobile Number</span>
                    </div>
                    <div class="contact-inputBox w50">
                        <input type="text" name="" value="<?php echo $row['Address']; ?>"  required>
                        <span>Address</span>
                    </div>
                   
                  
                </div>
            </div>
        </div>

    </section>

</body>

</html>



