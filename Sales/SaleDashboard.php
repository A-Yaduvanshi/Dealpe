<?php
session_start();
include "../api/connection.php";
$sql = "SELECT * FROM `sales`  ";
$run = mysqli_query($conn, $sql);
$sql_2 = "SELECT * FROM `customer` where `sale_id`='" . $_SESSION['sale_id'] . "'";
$query_2 = mysqli_query($conn, $sql_2);
$sql_3 = "SELECT * FROM `membership_card` WHERE `sales_person`='" . $_SESSION['customer_name'] . "'";
$query_3 = mysqli_query($conn, $sql_3);
?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----======== CSS ======== -->
  <title>Sales DashBoard</title>
  <link rel="stylesheet" href="./style/salesexcutive.css">
  <link rel="stylesheet" href="../franchise/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://flyclipart.com/download-add-product-icon-clipart-computer-icons-clip-art-product-clipart-196008">
  <!----===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <!--<title>Admin Dashboard Panel</title>-->
</head>

<body>
  <nav>
    <div class="logo-name">
      <div class="logo-image">
        <img style="height:70px;width:70px;" src="../dealpaylogo.jpg" alt="">
      </div>
      <span class="logo_name">Sales Executive</span>
    </div>
    <div class="menu-items">
      <ul class="nav-links">
        <li><a href="./SaleDashboard.php">
            <i class="uil uil-estate"></i>
            <span class="link-name"> Sales Executive Dahsboard</span>
          </a></li>
        <li><a href="./customerregister.html">
            <i class="uil uil-plus"></i>
            <span class="link-name">Add customer</span>
          </a></li>
        <li><a href="./assign_card_sales.php">
            <i class="uil uil-plus"></i>
            <span class="link-name">Assign Cards</span>
          </a></li>
        <li>
            <i class="uil uil-signout"></i>
            <button onclick="myFunction()" style="width: 100px; height:40px; border-radius:10px;border:none;  background-color:transparent; color:brown; font-size: 20px;font-weight: 400;">Logout</button>
            <!-- <span class="link-name">Logout</span> -->
          </li>
        <li><a href="./Confirmpassword.html">
            <i class="uil uil-signout"></i>
            <span class="link-name">Reset Password</span>
          </a></li>
      </ul>
    </div>
  </nav>
  <section class="dashboard">
    <div class="overview">
      <div class="title">
        <h1 style="font-weight:bold;color: brown;text-align:center;text-decoration:underline;margin-top:10px;"> Sales Executive DashBoard</h1>
      </div>
    </div>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box" style="margin:10px; ">
          <div class="right-side">
            <?php include "../api/connection.php";
            //  session_start();
            $sql = "SELECT * FROM `membership_card` WHERE `customer_select`='1'and `sales_person`='" . $_SESSION['customer_name'] . "' AND `customer_assign_date`=CURRENT_DATE()";
            $run = mysqli_query($conn, $sql);
            $data = mysqli_num_rows($run);
            ?>
            <div class="box-topic">Card Sold Today</div>
            <div class="number text-center"><?php echo $data ?></div>

          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <?php include "../api/connection.php";
            //  session_start();
            
    $sql_4="SELECT * FROM `membership_card` WHERE `sales_person`='".$_SESSION['customer_name']."' ";
    $query_4=mysqli_query($conn,$sql_4);
    $fetchBussinessName = mysqli_fetch_assoc($query_4);

    // echo "SELECT * FROM `franchisesignup` WHERE `id` = '".$_SESSION['id']."'";
    $bussiness = $fetchBussinessName['sales_person'];
// echo $bussiness;
            $sql = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `sales_select`='1' AND`sales_person`='". $bussiness ."'AND`sale_count`='1' AND`expiry_date`='3 months'";
            $run = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($run);
            ?>
            <div class="box-topic">3 months Cards</div>
            <div class="number text-center"><?php echo $data['total_pet'] ?></div>

          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <?php include "../api/connection.php";
            //  session_start();
            $sql_4="SELECT * FROM `membership_card` WHERE `sales_person`='".$_SESSION['customer_name']."' ";
            $query_4=mysqli_query($conn,$sql_4);
            $fetchBussinessName = mysqli_fetch_assoc($query_4);
        
            // echo "SELECT * FROM `franchisesignup` WHERE `id` = '".$_SESSION['id']."'";
            $bussiness = $fetchBussinessName['sales_person'];
        
                    $sql = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `sales_select`='1' AND`sales_person`='". $bussiness ."'AND`sale_count`='1' AND`expiry_date`='6 months'";
                    $run = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($run);
                    ?>
                    <div class="box-topic">6 months Cards</div>
                    <div class="number text-center"><?php echo $data['total_pet'] ?></div>
        
          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <?php include "../api/connection.php";
            $sql = "SELECT  SUM(membership_price) FROM `membership_card` WHERE `sales_person`='" . $_SESSION['customer_name'] . "' and `customer_select`='1'";
            $run = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($run);
            $sql_2 = "SELECT * FROM `sales` WHERE `Customer_name`='" . $_SESSION['customer_name'] . "'";
            $run_2 = mysqli_query($conn, $sql_2);
            $data_2 = mysqli_fetch_assoc($run_2);
            ?>
            <div class="box-topic">Total Commission</div>
            <div class="number"><?php echo ($data['SUM(membership_price)'] * $data_2['commission']) / 100  ?></div>

          </div>

        </div>
        <!-- <div class="box">

          <a href=""><img style="height: 64px;width:64px;" src="https://www.freeiconspng.com/uploads/buy-gain-income-money-pay-payment-icon--19.png" width="350" alt="Buy, gain, income, money, pay, payment icon " /></a>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box"> 
          <div class="right-side">
            <div class="box-topic">Paymeny Pending</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span> 
      </div>
    </div>
    <a href=""><img style="height: 64px;width:64px;" src="https://www.freeiconspng.com/uploads/pay-payment-icon-9.png" width="350" alt="Pay, payment icon" /></a>
     <i class='bx bxs-cart-download cart four' ></i> 
    </div> -->
      </div>
      <!-- <span class="text">Recent Card Sold Today</span> -->
    </div>
    <div class="activity">
      &nbsp;
      <h5 style="text-decoration: underline;color:black;font-weight:bold;">Total Customer:</h5>
      &nbsp;
      <table style="border: 2px solid #808080;margin:30px;">
        <thead style="border: 2px solid #808080;margin:30px;">
          <tr>
            <th style="padding:20px;border: 2px solid #808080;margin:30px;">Name</th>
            <th style="padding:20px;border: 2px solid #808080;margin:30px;">Phone</th>
            <th style="padding:20px;border: 2px solid #808080;margin:30px;">Address</th>
            <th style="padding:20px;border: 2px solid #808080;margin:30px;">Occupation</th>
            <th style="padding:20px;border: 2px solid #808080;margin:30px;">Email</th>
            <th style="padding:20px;border: 2px solid #808080;margin:30px;">Card_number</th>
            <!-- <th>image</th> -->
            <th style="padding:20px;border: 2px solid #808080;margin:30px;">Delete</th>
          </tr>
        </thead>
        <tbody id="table_filter" style="padding:20px;border: 2px solid #808080;margin:30px;">
          <?php while ($row = mysqli_fetch_assoc($query_2)) { ?>
            <tr>
              <td style="padding:20px;border: 2px solid #808080;margin:30px;"><?php echo $row['Customer_Name']; ?></td>
              <td style="padding:20px;border: 2px solid #808080;margin:30px;"><?php echo $row['Mobile_Number']; ?></td>
              <td style="padding:20px;border: 2px solid #808080;margin:30px;"><?php echo $row['Address']; ?></td>
              <td style="padding:20px;border: 2px solid #808080;margin:30px;"><?php echo $row['Occupation']; ?></td>
              <td style="padding:20px;border: 2px solid #808080;margin:30px;"><?php echo $row['Customer_Email']; ?></td>
              <td style="padding:20px;border: 2px solid #808080;margin:30px;"><?php echo $row['membership_card']; ?></td>
              <td>
                <a href="../admin/removesale.php?id=<?php echo $row['id']; ?>">
                  <Button style="padding:5px;margin:5px;" style="background-color: transparent;border-radius: 10px;">Remove</Button>
                </a>
              </td>
            </tr>
          <?php }  ?>
        </tbody>
      </table>
    </div>
    </div>
    </div>
  </section>
  <script>
      function myFunction() {
        var answer = confirm("Do you really want to logout?")
        if (answer) {
          window.location.href = '../api/salelogout.php'
        } else {
          text = "You canceled!";
        }
        //   document.getElementById("demo").innerHTML = text;
      }
    </script>
  <script src="script.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.2/dist/chart.min.js"></script>
  <!-- <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'],
                datasets: [{
                    label: ' Total card Sold This Month',
                    data: [12000, 19000, 3000, 5000, 2000, 3000,5000,12000, 19000, 3000, 5000, 2000, 3000,5000,12000, 19000, 3000, 5000, 2000, 3000,5000,12000, 19000, 3000, 5000, 2000, 3000,5000],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max:20000,
                        min:000
                    }
                }
            }
        });
        </script> -->
</body>

</html>