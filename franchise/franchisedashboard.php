<?php
session_start();
include '../api/connection.php';
if (!isset($_SESSION['Business_Name'])) {
  header("location: ../franchise/index.html");
} else {
?>
  <!DOCTYPE html>
  <!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
  <html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="./style.css">
    <!-- Boxicons CDN Link -->
    <title>Franchise Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Googlefont Poppins CDN Link */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }

      .sidebar {
        position: fixed;
        height: 100%;
        width: 240px;
        background: #0A2558;
        transition: all 0.5s ease;
      }

      .sidebar.active {
        width: 60px;
      }

      .sidebar .logo-details {
        height: 80px;
        display: flex;
        align-items: center;
      }

      .sidebar .logo-details i {
        font-size: 28px;
        font-weight: 500;
        color: #fff;
        min-width: 60px;
        text-align: center
      }

      .sidebar .logo-details .logo_name {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
      }

      .sidebar .nav-links {
        margin-top: 10px;
      }

      .sidebar .nav-links li {
        position: relative;
        list-style: none;
        height: 50px;
      }

      .sidebar .nav-links li a {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
      }

      .sidebar .nav-links li a.active {
        background: #081D45;
      }

      .sidebar .nav-links li a:hover {
        background: #081D45;
      }

      .sidebar .nav-links li i {
        min-width: 60px;
        text-align: center;
        font-size: 18px;
        color: #fff;
      }

      .sidebar .nav-links li a .links_name {
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
      }

      .sidebar .nav-links .log_out {
        position: absolute;
        /* bottom: 0; */
        width: 100%;
      }

      .home-section {
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
      }

      .sidebar.active~.home-section {
        width: calc(100% - 60px);
        left: 60px;
      }

      .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        z-index: 100;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
      }

      .sidebar.active~.home-section nav {
        left: 60px;
        width: calc(100% - 60px);
      }

      .home-section nav .sidebar-button {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: 500;
      }

      nav .sidebar-button i {
        font-size: 35px;
        margin-right: 10px;
      }

      .home-section nav .search-box {
        position: relative;
        height: 50px;
        max-width: 550px;
        width: 100%;
        margin: 0 20px;
      }

      nav .search-box input {
        height: 100%;
        width: 100%;
        outline: none;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        font-size: 18px;
        padding: 0 15px;
      }

      nav .search-box .bx-search {
        position: absolute;
        height: 40px;
        width: 40px;
        background: #2697FF;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 4px;
        line-height: 40px;
        text-align: center;
        color: #fff;
        font-size: 22px;
        transition: all 0.4 ease;
      }

      .home-section nav .profile-details {
        display: flex;
        align-items: center;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        height: 50px;
        min-width: 190px;
        padding: 0 15px 0 2px;
      }

      nav .profile-details img {
        height: 40px;
        width: 40px;
        border-radius: 6px;
        object-fit: cover;
      }

      nav .profile-details .admin_name {
        font-size: 15px;
        font-weight: 500;
        color: #333;
        margin: 0 10px;
        white-space: nowrap;
      }

      nav .profile-details i {
        font-size: 25px;
        color: #333;
      }

      .home-section .home-content {
        position: relative;
        padding-top: 104px;
      }

      .home-content .overview-boxes {
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 0 20px;
        margin-bottom: 26px;
      }

      .overview-boxes .box {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        width: calc(100% / 4 - 15px);
        background: rgb(255, 255, 255);
        padding: 15px 14px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }

      .overview-boxes .box-topic {
        font-size: 20px;
        font-weight: 500;
      }

      .home-content .box .number {
        display: inline-block;
        font-size: 35px;
        margin-top: -6px;
        font-weight: 500;
      }

      .home-content .box .indicator {
        display: flex;
        align-items: center;
      }

      .home-content .box .indicator i {
        height: 20px;
        width: 20px;
        background: #8FDACB;
        line-height: 20px;
        text-align: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        margin-right: 5px;
      }

      .box .indicator i.down {
        background: #e87d88;
      }

      .home-content .box .indicator .text {
        font-size: 12px;
      }

      .home-content .box .cart {
        display: inline-block;
        font-size: 32px;
        height: 50px;
        width: 50px;
        background: #cce5ff;
        line-height: 50px;
        text-align: center;
        color: #66b0ff;
        border-radius: 12px;
        margin: -15px 0 0 6px;
      }

      .home-content .box .cart.two {
        color: #2BD47D;
        background: #C0F2D8;
      }

      .home-content .box .cart.three {
        color: #ffc233;
        background: #ffe8b3;
      }

      .home-content .box .cart.four {
        color: #e05260;
        background: #f7d4d7;
      }

      .home-content .total-order {
        font-size: 20px;
        font-weight: 500;
      }

      .home-content .sales-boxes {
        display: flex;
        justify-content: space-between;
        /* padding: 0 20px; */
        padding-top: 30px;
      }

      /* left box */
      .home-content .sales-boxes .recent-sales {
        width: 100%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }

      .home-content .sales-boxes .sales-details {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .sales-boxes .box .title {
        font-size: 24px;
        font-weight: 500;
        /* margin-bottom: 10px; */
      }

      .sales-boxes .sales-details li.topic {
        font-size: 20px;
        font-weight: 500;
      }

      .sales-boxes .sales-details li {
        list-style: none;
        margin: 8px 0;
      }

      .sales-boxes .sales-details li a {
        font-size: 18px;
        color: #333;
        font-size: 400;
        text-decoration: none;
      }

      .sales-boxes .box .button {
        width: 100%;
        display: flex;
        justify-content: flex-end;
      }

      .sales-boxes .box .button a {
        color: #fff;
        background: #0A2558;
        padding: 4px 12px;
        font-size: 15px;
        font-weight: 400;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .sales-boxes .box .button a:hover {
        background: #0d3073;
      }

      /* Right box */
      .home-content .sales-boxes .top-sales {
        width: 35%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px 0 0;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }

      .sales-boxes .top-sales li {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
      }

      .sales-boxes .top-sales li a img {
        height: 40px;
        width: 40px;
        object-fit: cover;
        border-radius: 12px;
        margin-right: 10px;
        background: #333;
      }

      .sales-boxes .top-sales li a {
        display: flex;
        align-items: center;
        text-decoration: none;
      }

      .sales-boxes .top-sales li .product,
      .price {
        font-size: 17px;
        font-weight: 400;
        color: #333;
      }

      /* Responsive Media Query */
      @media (max-width: 1240px) {
        .sidebar {
          width: 60px;
        }

        .sidebar.active {
          width: 220px;
        }

        .home-section {
          width: calc(100% - 60px);
          left: 60px;
        }

        .sidebar.active~.home-section {
          /* width: calc(100% - 220px); */
          overflow: hidden;
          left: 220px;
        }

        .home-section nav {
          width: calc(100% - 60px);
          left: 60px;
        }

        .sidebar.active~.home-section nav {
          width: calc(100% - 220px);
          left: 220px;
        }
      }

      @media (max-width: 1150px) {
        .home-content .sales-boxes {
          flex-direction: column;
        }

        .home-content .sales-boxes .box {
          width: 100%;
          overflow-x: scroll;
          margin-bottom: 30px;
        }

        .home-content .sales-boxes .top-sales {
          margin: 0;
        }
      }

      @media (max-width: 1000px) {
        .overview-boxes .box {
          width: calc(100% / 4 - 15px);
          margin-bottom: 15px;
        }
      }

      @media (max-width: 700px) {

        nav .sidebar-button .dashboard,
        nav .profile-details .admin_name,
        nav .profile-details i {
          display: none;
        }

        .home-section nav .profile-details {
          height: 50px;
          min-width: 40px;
        }

        .home-content .sales-boxes .sales-details {
          width: 560px;
        }
      }

      @media (max-width: 550px) {
        .overview-boxes .box {
          width: 100%;
          margin-bottom: 15px;
        }

        .sidebar.active~.home-section nav .profile-details {
          display: none;
        }
      }

      @media (max-width: 400px) {
        .sidebar {
          width: 0;
        }

        .sidebar.active {
          width: 60px;
        }

        .home-section {
          width: 100%;
          left: 0;
        }

        .sidebar.active~.home-section {
          left: 60px;
          width: calc(100% - 60px);
        }

        .home-section nav {
          width: 100%;
          left: 0;
        }

        .sidebar.active~.home-section nav {
          left: 60px;
          width: calc(100% - 60px);
        }
      }

      ._table {
        width: 90%;
        margin-left: 25px;
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
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <img style="height: 70px; width:70px;" src="./image/Green Gradient Healthcare Medical Clinic Logo Symbol (3).png">
        <span class="logo_name">Franchise</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./renewstock.php">
            <i class='bx bx-box'></i>
            <span class="links_name">Renew Stock</span>
          </a>
        </li>
        <li>
          <a href="./total_sales.php">
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class="links_name">Sales Executive</span>
          </a>
        </li>
        <li>
          <a href="./fran2salesc.php">
            <i class='bx bx-coin-stack'></i>
            <span class="links_name">Sales Commission</span>
          </a>
        </li>
        <li>
          <a href="./assign_card_franchise_work.php">
            <i class='bx bx-book-alt'></i>
            <span class="links_name">assign cards to sales</span>
          </a>
        </li>
        <li>
          <a href="../franchise/membership_card.php">
            <i class='bx bx-book-alt'></i>
            <span class="links_name">MemberShip Card</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <!-- <i class='bx bx-search'></i> -->
        </div>
        <!-- <a href="#" ><img style="height: 40px;  widht:40px; border-radius: 50%;" src="https://flyclipart.com/thumb2/logout-off-power-shutdown-switch-icon-97780.png"  /></a> -->
        <a style="text-decoration-line: none;" href="../api/franchiselogout.php">
          <div class="profile-details">
            <!-- <img src="./image/pic1.png" alt=""> -->
            <span class="admin_name"><?php echo $_SESSION['owener_Name'] ?></span>
            <button onclick="myFunction()" style="width: 100px; height:40px; border-radius:10px; margin-left:5px; background-color:transparent; color:gray; font-size: 15px;"> Sign Out</button>
          </div>
        </a>
        <a href="./Confirmpassword.html"> <button style="width: 100px; height:60px; border-radius:10px; margin-left:5px; background-color:transparent; color:gray; font-size: 15px;">Reset Password</button></a>
      </nav>
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <?php include "../api/connection.php";
              $sql = "SELECT * FROM `membership_card` WHERE `assign`!='1'and `assign_name`='" . $_SESSION['owener_Name'] . "' AND `Sale_assign_date`=CURRENT_DATE()";
              $run = mysqli_query($conn, $sql);
              $data = mysqli_num_rows($run);
              ?>
              <div class="box-topic">CardSold Today</div>
              <div class="number text-center"><?php echo $data ?></div>
              <div class="indicator">
                <!-- <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span> -->
              </div>
            </div>
            <!-- <i class='bx bx-cart-alt cart'></i> -->
          </div>
          <div class="box">
            <div class="right-side">
              <?php include "../api/connection.php";
              $sql_4 = "SELECT * FROM `franchisesignup` WHERE `id` = '" . $_SESSION['sess_user'] . "'";
              $query_4 = mysqli_query($conn, $sql_4);
              $fetchBussinessName = mysqli_fetch_assoc($query_4);
              $bussiness = $fetchBussinessName['owner_name'];
              // echo $bussiness;
              $sql = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `assign`='1' AND`assign_name`='" . $bussiness . "' AND `asign_count`='1' and  `expiry_date`='3 months'";
              $run = mysqli_query($conn, $sql);
              $data = mysqli_fetch_assoc($run);
              ?>
              <div class="box-topic">Total 3 Months</div>
              <div class="number text-center"><?php echo $data['total_pet'] ?></div>
              <div class="indicator">
                <!-- <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span> -->
              </div>
            </div>
            <!-- <i class='bx bx-cart-alt cart'></i> -->
          </div>
          <div class="box">
            <div class="right-side">
              <?php include "../api/connection.php";
              $sql_4 = "SELECT * FROM `franchisesignup` WHERE `id` = '" . $_SESSION['sess_user'] . "'";
              $query_4 = mysqli_query($conn, $sql_4);
              $fetchBussinessName = mysqli_fetch_assoc($query_4);
              $bussiness = $fetchBussinessName['owner_name'];
              $sql = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `assign`='1' AND`assign_name`='" . $bussiness . "' AND `asign_count`='1' and  `expiry_date`='6 months'";
              $run = mysqli_query($conn, $sql);
              $data = mysqli_fetch_assoc($run);
              ?>
              <div class="box-topic">Total 6 Months</div>
              <div class="number text-center"><?php echo $data['total_pet'] ?></div>
              <div class="indicator">
                <!-- <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span> -->
              </div>
            </div>
            <!-- <i class='bx bx-cart-alt cart'></i> -->
          </div>
          <div class="box">
            <div class="right-side">
              <?php include "../api/connection.php";
              $sql = "SELECT  SUM(membership_price) FROM `membership_card` WHERE `assign_name`='" . $_SESSION['owener_Name'] . "' and `sale_count`=1";
              $run = mysqli_query($conn, $sql);
              $data = mysqli_fetch_assoc($run);
              ?>
              <div class="box-topic">Revenue</div>
              <div class="number"><?php echo $data['SUM(membership_price)']  ?></div>
              <div class="indicator">
                <!-- <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span> -->
              </div>
            </div>
            <!-- <i class='bx bxs-cart-add cart two'></i> -->
          </div>
        </div>
        <!-- <span class="text">Recent Card Sold Today</span> -->
      </div>
      <!-- <table class="_table table_sort" style="margin-right: 20px;">
        <thead>
          <tr><?php
              // include '../api/connection.php';
              // $Sales = $_GET['sale'];
              //Fetching Sales_person name
              // $sql = "SELECT * FROM `membership_card` WHERE `assign_name`='" . $_SESSION['owener_Name'] . "' and `assign`='0'";
              // $query = mysqli_query($conn, $sql);
              // $fetchData = mysqli_fetch_assoc($query);
              // echo $fetchData['sales_person'];
              // Fetching data for showing sales persons details and commission in table
              // $query_2 = "SELECT * FROM `sales` WHERE `frachise_id`='" . $_SESSION['sess_user'] . "'; ";
              // $run = mysqli_query($conn, $query_2);
              //fetching the membership_price 
              // $query_8 = "SELECT * FROM `membership_card` WHERE `sales_person` = '" . $Sales . "' and `customer_select` = '1'";
              // $run_8 = mysqli_query($conn, $query_8);
              // $row_card_price = mysqli_fetch_assoc($run_8);
              // echo $row_card_price["membership_price"];
              //fetching the franchise id for finding the sales Person
              // $query_3 = "SELECT * FROM `franchisesignup` WHERE `owner_name` ='" . $_SESSION['owener_Name'] . "'";
              // $fetchDataid = mysqli_query($conn, $query_3);
              // $franid = mysqli_fetch_assoc($fetchDataid);
              // echo $franid['id'];
              //fetching the sale person Commission
              // $query_4 = "SELECT * FROM `sales` WHERE `frachise_id` = '" . $_SESSION['sess_user'] . "'";
              // $saleDataid = mysqli_query($conn, $query_4);
              // $saleid = mysqli_fetch_assoc($saleDataid);
              // echo $saleid['commission'];
              // $total_commision = $row_card_price["membership_price"] * $saleid['commission'] / 100;
              // ?>
            <th>id</th> -->
            <!-- <th></th> -->
            <!-- <th>Membership Price</th> -->
            <!-- <th>Commision</th> -->
            <!-- <th>Sale Person </th> -->
            <!-- <th>Remove Data</th> -->
          <!-- </tr> -->
        <!-- </thead> -->
        <!-- <tbody id="table_filter"> -->

          <!-- <tr> -->
            <!-- <td><?php echo $row['id']; ?></td> -->
            <!-- <td><?php echo $row['membership_card']; ?></td> -->
            <!-- <td><?php echo $row['membership_price']; ?></td> -->
            <!-- <td><?php echo  $total_commision; ?></td>
            <td> -->
              <!-- <input style="width: 90%" list="list2" name="sale"> -->
              <!-- <?php $row = mysqli_fetch_assoc($run); { ?>
                <select name="sale">
                  <option><?php echo $row['Customer_name']; ?></option>
                </select> -->

                <!-- </div> -->
            <!-- </td> -->
            <!-- <td> <a href="./removesale.php?id=<?php echo $res[0]; ?>"><Button class="btn btn-block bg-danger text-white">
                Remove</Button></a></td> -->
          <!-- </tr> -->
        <!-- <?php }  ?> -->
        <!-- </tbody> -->
      <!-- </table> -->
      </div>
      </div>
    </section>
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
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>
  </body>

  </html>
<?php
}
?>