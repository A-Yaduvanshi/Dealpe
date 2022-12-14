
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     <title>Add Membership Card</title>
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
    background-color: #4070f4;
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
        <header style="font-weight: bold;">Add Membership Card</header>
        <?php
        include '../api/connection.php';
        error_reporting(E_ALL ^ E_WARNING);
    $sql="SELECT * FROM `membership_card` WHERE `id`=(SELECT MAX(`id`) FROM  `membership_card`)";
    $run=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_assoc($run);
    if ($fetch['membership_card']==NULL) {
        echo '0';
    } else {
        # code...
        echo $fetch['membership_card'];
    }
    
    
        ?>
        <a href="../admin/dashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:8px; border-radius: 10px;">Go Home</button></a>
        <!-- <img   src="man.jpg" class="rounded float-end" style="height: 200px;width:200px;padding: ;" alt="..."> -->
       <!-- <img style="height: 200px;width:200px; margin-top: 10px; "src="man.jpg"> -->
        <form action="membershipadd.php" method="get" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Membership  Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Membership Generate(Number)</label>
                            <input type="text" placeholder="Membership generate" name="card_number" required>
                        </div>

                        <div class="input-field">
                            <label>Membership Price</label>
                            <input type="text" placeholder="Enter your price" name="membership_price" required>
                        </div>

                        <div class="input-field">
                            <label>Quantity</label>
                            <input name="quantity" placeholder="Enter Cards Quantity" required type="text">
                            <!-- <select name="membership_expiry">
                                <option value="3 months">3 months</option>
                                <option value="6 months">6 months</option>
                            </select> -->
                            </div>

                        
                        <div class="input-field">
                            <label>membership Offer</label>
                            <input type="text" placeholder="membership_offer" name="membership_offer" required>
                        </div>

                        
                  <button class="nextBtn" >
                    <span  class="btnText">Submit</span>
                        <!-- <i class="uil uil-navigator"></i> -->
                    </button>
                      
                </div>

                <div class="details ID">
                    <!-- <span class="title">Identity Details</span> -->

                    <div class="fields">
                       
                    

                </div> 
            </div>

        
        </form>
    </div>

    <!-- <scr src="script.js"></scr/ipt> -->
</body>
</html>
