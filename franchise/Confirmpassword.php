<?php 

$custom_id = $_GET['custom_id'];



?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Check Password and Confirm Password | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
<style>
    /* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #4070F4;
  padding: 0 35px;
}
.wrapper{
  position: relative;
  background: #fff;
  max-width: 480px;
  width: 100%;
  padding: 35px 40px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.input-box{
  position: relative;
  height: 65px;
  margin: 25px 0;
}
.input-box input{
  position: relative;
  height: 100%;
  width: 100%;
  outline: none;
  color: #333;
  font-size: 18px;
  font-weight: 500;
  padding: 0 40px 0 16px;
  border: 2px solid lightgrey;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070F4;
}
.input-box i,
.input-box label{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  color: #a6a6a6;
  transition: all 0.3s ease;
}
.input-box label{
  left: 15px;
  font-size: 18px;
  font-weight: 400;
  background: #fff;
  padding: 0 6px;
  pointer-events: none;
}
.input-box input:focus ~ label,
.input-box input:valid ~ label{
  top: 0;
  font-size: 14px;
  color: #4070F4;
}
.input-box i{
  right: 15px;
  cursor: pointer;
  padding: 8px;
}
.alert{
  display: flex;
  align-items: center;
  margin-top: -13px;
}
.alert .error{
  color: #D93025;
  font-size: 18px;
  display: none;
  margin-right: 8px;
}
 .text{
  font-size: 18px;
  font-weight: 400;
  color: #a6a6a6;
}
.input-box.button input{
  border: none;
  font-size: 20px;
  color: #fff;
  letter-spacing: 1px;
  background: #4070F4;
  cursor: not-allowed;
}
.input-box.button input.active:hover{
  background: #265df2;
  cursor: pointer;
}
</style>   
</head>
<body>
  <div class="wrapper">
    <form action="./resetpass.php" method="get">
      <div class="input-box">
        <input id="create_pw" type="password" name="password" required>
        <label>Create password</label>
      </div>
      <div class="input-box">
        <input id="confirm_pw" type="password" name="C_password" required >
        <label>Confirm password</label>
        <i class="fas fa-eye-slash show"></i>
      </div>
      <input type="hidden" value="<?php echo $custom_id; ?>" name="custom_id">

      <div class="alert">
        <i class="fas fa-exclamation-circle error"></i>
        <span class="text">Enter at least 8 characters</span>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit" value="Submit" >
      </div>
    </form>
  </div>
  
 

</body>
</html>