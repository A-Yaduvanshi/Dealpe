 <?php
    include "../api/connection.php";
    $sql = "SELECT * FROM `membership_card` WHERE `assign_name` != '' ";
    $query = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($query);
    $sql_2 = "SELECT * FROM `franchisesignup`";
    $membership_card = mysqli_query($conn, $sql_2);
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
     <script type="text/javascript" src="./script/script.js"></script>
     <title>Assign Card Franchise</title>
     <!----===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <!--<title>Responsive Regisration Form </title>-->
 </head>
 <style>
     /* ===== Google Font Import - Poppins ===== */
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
 </style>

 <body>
     <div class="container">
         <header style="font-weight: bold; text-align:center;color:brown;font-size: 30px;text-decoration: underline;">Assign Cards Franchise</header>
         <!-- <img   src="man.jpg" class="rounded float-end" style="height: 200px;width:200px;padding: ;" alt="..."> -->
         <!-- <img style="height: 200px;width:200px; margin-top: 10px; "src="man.jpg"> -->
         <a href="../admin/dashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:8px; border-radius: 10px; margin-bottom:10px">Go Home</button></a>
         <div class="container" style="margin-top:60px;">
             <div class="row">
                 <!-- <div class="col-sm-4 border" style="padding: 20px;text-align:center;">
                     <h5> Franchise membership card</h5>
                    <input id="mobile" onchange="selectbrand()" style="width: 200px;padding:10px; border-radius: 25px;" list="list1" placeholder="Card No">
                     <select id="mobile" onchange="selectbrand()">
                         <?php while ($row = mysqli_fetch_assoc($membership_card)) { ?>
                             <option><?php echo $row['assign_name'] ?></option>
                         <?php } ?>
                     </select>
                 </div>
                 <div class="col-sm-8 border" style="padding: 20px;text-align:center;">
                     <div class="container pd-x-0">
                         <div data-label="Stock Details" class="df-example demo-table mg-t-25">
                             <table class="table tx-13" id="example1">
                                 <thead>
                                     <tr>
                                         <th>S. No.</th>
                                         <th>Business_Name</th>
                                         <th>owner_name</th>
                                     </tr>
                                 </thead>
                                 <tbody id="ans">

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div> -->
                 <form action="removeCard.php" method="get" enctype="multipart/form-data">
                     <div class="form first" style="text-align: center;margin:20px;border:2px solid #808080;width:80%;padding:10px;justify-items: center;">
                         <div class="details personal">
                             <div class="fields">
                                 <div class="input-fields">
                                     <h4 style=" font-size:22px;">Card Number</h4>
                                     <input style="width:300px; padding:10px;border-radius:22px;" type="text" placeholder="Enter Card Number" name="card_num" required>
                                 </div>

                                 <div class="input-fields">
                                     <h4 style=" font-size:22px;">Assign Franchise name</h4>
                                     <input style="width:300px; padding:10px;border-radius:22px;" type="text" placeholder="Enter Franchise name" name="name" required>
                                 </div>
                             </div>


                             <button class="nextBtn" style="width:400px; border-radius:20px;">
                                 <span class="btnText">Submit</span>
                                 <i class="uil uil-navigator"></i>
                             </button>
                 </form>
             </div>
         </div>
     </div>
     <!-- <scr src="script.js"></scr/ipt> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 </body>

 </html>