<?php
include '../api/connection.php';
session_start();
// echo $_SESSION['sess_user_2'];
$sql = "SELECT * FROM `customer`";
$query = mysqli_query($conn, $sql);
$new_customer = mysqli_num_rows($query);
// echo $_SESSION['sess_user_2'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merchant Dashboard</title>
  <!-- ======= Styles ====== -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
  /* =========== Google Fonts ============ */
  @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

  /* =============== Globals ============== */
  * {
    font-family: "Ubuntu", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  :root {
    --blue: #2a2185;
    --white: #fff;
    --gray: #f5f5f5;
    --black1: #222;
    --black2: #999;
  }

  body {
    min-height: 100vh;
    overflow-x: hidden;
  }

  .container {
    position: relative;
    width: 100%;
  }

  /* =============== Navigation ================ */
  .navigation {
    position: fixed;
    width: 300px;
    height: 100%;
    background: #222;
    border-left: 10px solid var(--black1);
    transition: 0.5s;
    overflow: hidden;
  }

  .navigation.active {
    width: 80px;
  }

  .navigation ul {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
  }

  .navigation ul li {
    position: relative;
    width: 100%;
    list-style: none;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
  }

  .navigation ul li:hover,
  .navigation ul li.hovered {
    background-color: var(--white);
  }

  .navigation ul li:nth-child(1) {
    margin-bottom: 40px;
    pointer-events: none;
  }

  .navigation ul li a {
    position: relative;
    display: block;
    width: 100%;
    display: flex;
    text-decoration: none;
    color: var(--white);
  }

  .navigation ul li:hover a,
  .navigation ul li.hovered a {
    color: var(--blue);
  }

  .navigation ul li a .icon {
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height: 75px;
    text-align: center;
  }

  .navigation ul li a .icon ion-icon {
    font-size: 1.75rem;
  }

  .navigation ul li a .title {
    position: relative;
    display: block;
    padding: 0 10px;
    height: 60px;
    line-height: 60px;
    text-align: start;
    white-space: nowrap;
  }

  /* --------- curve outside ---------- */
  .navigation ul li:hover a::before,
  .navigation ul li.hovered a::before {
    content: "";
    position: absolute;
    right: 0;
    top: -50px;
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-radius: 50%;
    box-shadow: 35px 35px 0 10px var(--white);
    pointer-events: none;
  }

  .navigation ul li:hover a::after,
  .navigation ul li.hovered a::after {
    content: "";
    position: absolute;
    right: 0;
    bottom: -50px;
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-radius: 50%;
    box-shadow: 35px -35px 0 10px var(--white);
    pointer-events: none;
  }

  /* ===================== Main ===================== */
  .main {
    position: absolute;
    width: calc(100% - 300px);
    left: 300px;
    min-height: 100vh;
    background: var(--white);
    transition: 0.5s;
  }

  .main.active {
    width: calc(100% - 80px);
    left: 80px;
  }

  .topbar {
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
  }

  .toggle {
    position: relative;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2.5rem;
    cursor: pointer;
  }

  .search {
    position: relative;
    width: 400px;
    margin: 0 10px;
  }

  .search label {
    position: relative;
    width: 100%;
  }

  .search label input {
    width: 100%;
    height: 40px;
    border-radius: 40px;
    padding: 5px 20px;
    padding-left: 35px;
    font-size: 18px;
    outline: none;
    border: 1px solid var(--black2);
  }

  .search label ion-icon {
    position: absolute;
    top: 0;
    left: 10px;
    font-size: 1.2rem;
  }

  .user {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
  }

  .user img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* ======================= Cards ====================== */
  .cardBox {
    position: relative;
    width: 100%;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 30px;
  }

  .cardBox .card {
    position: relative;
    background: var(--white);
    padding: 30px;
    border-radius: 20px;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  }

  .cardBox .card .numbers {
    position: relative;
    font-weight: 500;
    font-size: 2.5rem;
    color: var(--blue);
  }

  .cardBox .card .cardName {
    color: var(--black1);
    font-size: 1.1rem;
    margin-top: 5px;
  }

  .cardBox .card .iconBx {
    font-size: 3.5rem;
    color: var(--black2);
  }

  .cardBox .card:hover {
    background: var(--blue);
  }

  .cardBox .card:hover .numbers,
  .cardBox .card:hover .cardName,
  .cardBox .card:hover .iconBx {
    color: var(--white);
  }

  /* ================== Order Details List ============== */
  .details {
    position: relative;
    width: 100%;
    padding: 20px;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 30px;
    /* margin-top: 10px; */
  }

  .details .recentOrders {
    position: relative;
    display: grid;
    min-height: 500px;
    background: var(--white);
    padding: 20px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    border-radius: 20px;
  }

  .details .cardHeader {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }

  .cardHeader h2 {
    font-weight: 600;
    color: var(--blue);
  }

  .cardHeader .btn {
    position: relative;
    padding: 5px 10px;
    background: var(--blue);
    text-decoration: none;
    color: var(--white);
    border-radius: 6px;
  }

  .details table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  .details table thead td {
    font-weight: 600;
  }

  .details .recentOrders table tr {
    color: var(--black1);
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }

  .details .recentOrders table tr:last-child {
    border-bottom: none;
  }

  .details .recentOrders table tbody tr:hover {
    background: var(--blue);
    color: var(--white);
  }

  .details .recentOrders table tr td {
    padding: 10px;
  }

  .details .recentOrders table tr td:last-child {
    text-align: end;
  }

  .details .recentOrders table tr td:nth-child(2) {
    text-align: end;
  }

  .details .recentOrders table tr td:nth-child(3) {
    text-align: center;
  }

  .status.delivered {
    padding: 2px 4px;
    background: #8de02c;
    color: var(--white);
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
  }

  .status.pending {
    padding: 2px 4px;
    background: #e9b10a;
    color: var(--white);
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
  }

  .status.return {
    padding: 2px 4px;
    background: #f00;
    color: var(--white);
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
  }

  .status.inProgress {
    padding: 2px 4px;
    background: #1795ce;
    color: var(--white);
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
  }

  .recentCustomers {
    position: relative;
    display: grid;
    min-height: 500px;
    padding: 20px;
    background: var(--white);
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    border-radius: 20px;
  }

  .recentCustomers .imgBx {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    overflow: hidden;
  }

  .recentCustomers .imgBx img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .recentCustomers table tr td {
    padding: 12px 10px;
  }

  .recentCustomers table tr td h4 {
    font-size: 16px;
    font-weight: 500;
    line-height: 1.2rem;
  }

  .recentCustomers table tr td h4 span {
    font-size: 14px;
    color: var(--black2);
  }

  .recentCustomers table tr:hover {
    background: var(--blue);
    color: var(--white);
  }

  .recentCustomers table tr:hover td h4 span {
    color: var(--white);
  }

  /* ====================== Responsive Design ========================== */
  @media (max-width: 991px) {
    .navigation {
      left: -300px;
    }

    .navigation.active {
      width: 300px;
      left: 0;
    }

    .main {
      width: 100%;
      left: 0;
    }

    .main.active {
      left: 300px;
    }

    .cardBox {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {
    .details {
      grid-template-columns: 1fr;
    }

    .recentOrders {
      overflow-x: auto;
    }

    .status.inProgress {
      white-space: nowrap;
    }
  }

  @media (max-width: 480px) {
    .cardBox {
      grid-template-columns: repeat(1, 1fr);
    }

    .cardHeader h2 {
      font-size: 20px;
    }

    .user {
      min-width: 40px;
    }

    .navigation {
      width: 100%;
      left: -100%;
      z-index: 1000;
    }

    .navigation.active {
      width: 100%;
      left: 0;
    }

    .toggle {
      z-index: 10001;
    }

    .main.active .toggle {
      color: #fff;
      position: fixed;
      right: 0;
      left: initial;
    }
  }
</style>

<body>
  <!-- =============== Navigation ================ -->
  <div class="container">
    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="icon">
              <img style="height: 100px;width: 100px;" src="../dealpaylogo.jpg">
              <!-- <ion-icon name="logo-apple"></ion-icon> -->
            </span>
            <span style="font-weight: bold;font-size: 30px;padding-top: 20px;" class="title">Merchant</span>
          </a>
        </li>
        <li>
          <a href="./merchent-dash.php">
            <span class="icon">
              <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./customerData.php">
            <span class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Customers</span>
          </a>
        </li>
        <li>
          <a href="scan-membership-code.html">
            <span class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Scan Membership Code</span>
          </a>
        </li>
        <!-- <li>
          <a href="renewstock.php">
            <span class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Renew stock</span>
          </a>
        </li> -->
        <li>
          <a href="promoteMyBussiness.php">
            <span class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Promote my Bussiness</span>
          </a>
        </li>
        <!-- <li>
          <a href="./script/logoutscript.js">
          <span class="icon" style="color: white; width: 40px; height: 60;">
            <ion-icon name="log-out-outline"></ion-icon>
          </span>
          <button onclick=" myFunction()" style="width: 100px; height:40px; border-radius:10px; margin-left:50px; background-color:transparent; color:gray; border:none; font-size: 15px;"> Sign Out</button>
          </a>
        </li> -->
        <li>
          <a href="./Confirmpassword.html">
            <span class="icon">
              <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="title">Reset Password</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- ========================= Main ==================== -->
    <div class="main">
      <div class="topbar">
        <div class="toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
        <button onclick=" myFunction()" style="width: 100px; height:40px; border-radius:10px; margin-left:50px; background-color:transparent; color:gray; font-size: 15px;"> Sign Out</button>
      </div>
      <div class="details-fluid">
        <table class="_table table_sort">
          <thead>
            <tr>
              <th>Name</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Occupation</th>
              <th>Email</th>
              <th width="45px">Special Id</th>
            </tr>
          </thead>
          <tbody id="table_filter">
            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
              <tr>
                <td><?php echo $row['Customer_Name']; ?></td>
                <td><?php echo $row['Mobile_Number']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['Occupation']; ?></td>
                <td><?php echo $row['Customer_Email']; ?></td>
                <td>
                  <!-- <h5 style="font-family: 'Libre Barcode 39';font-size: 45px;"><?php echo $row['special_id']; ?></h5> -->
                  <h5><?php echo $row['special_id']; ?></h5>
                  <!-- <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5> -->
                </td>
              </tr>
            <?php }  ?>
          </tbody>
        </table>
        <!-- ================= New Customers ================ -->
      </div>
    </div>
    <style>
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
    </style>
    <script>
      function myFunction() {
        var answer = confirm("Do you really want to logout?")
        if (answer) {
          window.location.href = '../api/merchentlogout.php'
        } else {
          text = "You canceled!";
        }
        //   document.getElementById("demo").innerHTML = text;
      }
    </script>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>