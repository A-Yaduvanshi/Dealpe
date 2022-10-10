<?php
     include "../api/connection.php";
     $sql = "SELECT * FROM `membership_card` WHERE `assign_name` != '' ";
     $query = mysqli_query($conn,$sql);
     // $row = mysqli_fetch_assoc($query);
     $sql_2 = "SELECT * FROM `membership_card`";
     $membership_card = mysqli_query($conn,$sql_2);
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
    min-height: 230px;
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
    /* flex-wrap: wrap; */
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
        <header style="font-weight: bold; text-align:center;color:brown;font-size: 30px;text-decoration: underline;">Assign Cards Franchise</header>
        <!-- <img   src="man.jpg" class="rounded float-end" style="height: 200px;width:200px;padding: ;" alt="..."> -->
       <!-- <img style="height: 200px;width:200px; margin-top: 10px; "src="man.jpg"> -->
       <a href="../admin/dashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:8px; border-radius: 10px; margin-bottom:10px">Go Home</button></a>
       <div class="container" style="margin-top:60px;">
        <div class="row">
             
<!-- <div class="col-sm-8 border" style="padding: 20px;text-align:center;">
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
    <form action="./cardreplace.php?id=" method="get" enctype="multipart/form-data">
            <div class="form first" style="text-align: center;margin:20px;border:2px solid #808080;width:80%;padding:10px;justify-items: center;">
                <div class="details personal">
                    <div class="fields" >
                        <div class="input-fields">
                            <h4  style=" font-size:22px;">Assign Card Replace</h4>
                            <input  style="width:300px; padding:10px;border-radius:22px;" type="text" placeholder="Enter Card Number" name="card" required>
                        </div>
                    </div>
                    <!-- <span class="title">Identity Details</span>  -->
                  <button class="nextBtn" style="width:400px; border-radius:20px;" >
                    <span   class="btnText">Submit</span>
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
