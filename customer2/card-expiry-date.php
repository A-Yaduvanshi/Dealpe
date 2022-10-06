<?php 

include '../api/connection.php';
session_start();
$sql = "SELECT * FROM `customer` WHERE `member_ship_card` = '".$_SESSION['c_user_id']."'";
$select =mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($select);

echo json_encode($row);

?>

<?php 

require "./header/headertemplate.php";

?>


<body>

    <!-- Contact Us -->
    <section class="contact-sec">

        <div class="contact-container">
            <div class="contact">
                <div class="contact-info">
                    <h2>Details</h2>
                    <ul class="contact-icon">
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
                        <img src="imgs/user.png" style="height:15vh; width: 15vh;">
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
                    
                    <div class="contact-inputBox w100">
                        <input type="text" name="" value="<?php echo $row['card_expiry_date']; ?>" required>
                        <span>Card Expiry Date</span>
                    </div>
                    
                    <!-- <button class="btn text-white">Send Complain</button> -->
                </div>
            </div>
        </div>

    </section>

</body>

</html>



