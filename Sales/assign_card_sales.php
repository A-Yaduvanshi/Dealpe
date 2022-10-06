<?php
     include "../api/connection.php";
     session_start();
    
     $sql_3="SELECT * FROM `customer` WHERE sale_id='".$_SESSION['sale_id']."'";
     $query_3=mysqli_query($conn,$sql_3);
     // echo $_SESSION['customer_name'];
     //3 months
    $sql_2 = "SELECT * FROM `membership_card` WHERE `sales_person` = '".$_SESSION['customer_name']."' AND `expiry_date` = '3 months'";
 $membership_card = mysqli_query($conn,$sql_2);


    $sql_4="SELECT * FROM `membership_card` WHERE `sales_person`='".$_SESSION['customer_name']."' ";
    $query_4=mysqli_query($conn,$sql_4);
    $fetchBussinessName = mysqli_fetch_assoc($query_4);

    // echo "SELECT * FROM `franchisesignup` WHERE `id` = '".$_SESSION['id']."'";
    $bussiness = $fetchBussinessName['sales_person'];

// echo $bussiness;
    $three_months = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `sales_person`='".$bussiness."' and `expiry_date`='3 months'AND `sales_select` = 1 AND `sale_count` =1";
    $runthree = mysqli_query($conn,$three_months);
    $rowTHree = mysqli_fetch_assoc($runthree);
    $totalThree = $rowTHree['total_pet'];

    $six_months = "SELECT COUNT(*) as total_pet FROM `membership_card` WHERE `sales_person`='".$bussiness."' and `expiry_date`='6 months' AND `sales_select` = 1 AND `sale_count` =1";
    $runsix = mysqli_query($conn,$six_months);
    $totalSix = mysqli_fetch_assoc($runsix);
    $totalSix =  $totalSix['total_pet'];    


// 6 month
    $sql_6 = "SELECT * FROM `membership_card` WHERE `sales_person` = '".$_SESSION['customer_name']."' AND `expiry_date` = '6 months'";

 $membership_card_6 = mysqli_query($conn,$sql_6);



    
    // $unsoldCard = $rowTHree + $rowsix;
    // echo $_SESSION['sale_id'];

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
     <title>Assign Card Customer</title>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<style>
    /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4070f4;
}
.container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    /* background-color: #4070f4; */
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 200px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
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
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
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
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}

</style>
<body>
    <div class="container">
        <header style="font-weight: bold; color:brown;text-align:center;text-decoration:underline;font-size:30px;">Assign Card to Customer</header>
        <!-- <img   src="man.jpg" class="rounded float-end" style="height: 200px;width:200px;padding: ;" alt="..."> -->
       <!-- <img style="height: 200px;width:200px; margin-top: 10px; "src="man.jpg"> -->
       <a href="../Sales/SaleDashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:10px; border-radius: 10px;">Go Home</button></a>
       <div class="container" style="margin-top:50px;">

        <div class="row">

            <div class="col-sm-3 border" style="padding: 10px;font-weight:bold;text-align: center;">
                        <h5 >Available Customer</h5>
                         <input style="width: 90%"list="list1">
                        <datalist id="list1">
                        
                        <?php while($row = mysqli_fetch_assoc($query_3)){ ?>
                                <option><?php echo $row['Customer_Name'] ?></option>
                            <?php } ?> 
                        </datalist>
            </div>


            <div class="col-sm-3 border" style="padding: 10px; font-weight:bold;text-align:center;">

                    <h5>Total 3 month</h5>
                    <h5><?php echo $totalThree; ?></h5>
                    
                    
                    <h5>Total 6 month</h5>
                    <h5><?php echo $totalSix; ?></h5>
                    

            </div>


         <div class="col-sm-3 border" style="padding: 10px;font-weight:bold;text-align: 
            center;">
                        
                        <h5 >MembershipCard</h5>
                        <h5 >3 month</h5>
                         <input style="width: 90%" list="list2">
                        <datalist id="list2">
                        
                        <?php while($rowData = mysqli_fetch_assoc($membership_card)){ ?>
                                <option><?php echo $rowData['membership_card'] ?></option>
                            <?php } ?> 
                        </datalist>
            </div>


         <div class="col-sm-3 border" style="padding: 10px;font-weight:bold;text-align: 
            center;">
                        
                        <h5 >MembershipCard</h5>
                        <h5>6 month</h5>
                        <input style="width: 90%" list="list3">
                        <datalist id="list3">
                        
                        <?php while($rowData = mysqli_fetch_assoc($membership_card_6)){ ?>
                                <option><?php echo $rowData['membership_card'] ?></option>
                            <?php } ?> 
                        </datalist>
            </div>

            
        </div>
           

       </div>


        <form action="assignCardSales.php" method="get" enctype="multipart/form-data">
            <div class="form first" style="margin-left: 100px;">
            
                <!-- < class="details personal"> -->
                    <span class="title" style="font-size: 22px;text-align:center;text-decoration:underline;">Assign Card to Customer</span>

                    <div class="fields">
                        <div class="input-field">
                            <label >Membership Card Number</label>
                            <input type="text" placeholder="Enter the number of cards" name="membership_card_number" required>
                        </div>

                        <div class="input-field">
                            <label>Customer Name</label>
                            <input type="text" placeholder="Enter the sales name" name="customer_name" required>
                        </div>        
                        <div class="input-field">
                            <label>Membership Duration</label>
                            <select name="exiry_date">
                                <option value="3 months">3 months</option>
                                <option value="6 months">6 months</option>
                            </select>
                            </div>
                        </div>
                    

                <div class="details ID">
                    <!-- <span class="title">Identity Details</span> -->

                    <div class="fields">
                       
                    

                  <button class="nextBtn" style="margin-left: 180px;" >
                    <span  class="btnText">Submit</span>
                        <!-- <i class="uil uil-navigator"></i> -->
                    </button>
                </div> 
            </div>

            <!-- <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Grandfather</label>
                            <input type="text" placeholder="Enter grandfther name" required>
                        </div>

                        <div class="input-field">
                            <label>Spouse Name</label>
                            <input type="text" placeholder="Enter spouse name" required>
                        </div>

                        <div class="input-field">
                            <label>Father in Law</label>
                            <input type="text" placeholder="Father in law name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother in Law</label>
                            <input type="text" placeholder="Mother in law name" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div> -->
        </form>
    </div>

    <!-- <scr src="script.js"></scr/ipt> -->
</body>
</html>
