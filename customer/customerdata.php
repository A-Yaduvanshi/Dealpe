<?php 

include '../api/connection.php';






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>CSS Keyboard</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Libre Barcode 39' rel='stylesheet'>
<style>
/*body {
    font-family: 'Libre Barcode 39';font-size: 22px;
}*/
</style>
</head>
<style>
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #efefef;
    padding: 25px;
}

.container {
    max-width: 1500px;
    width: 100%;
    height: 100vh;
    margin: 25px auto;
    padding: 15px;
    background-color: #fff;
    box-shadow: 0 2px 20px #0001, 0 1px 6px #0001;
    border-radius: 5px;
    overflow-x: auto;
}

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
<body>
    <div class="container">
        <input type="search" oninput="filter_table(this, 'table_filter')" class="form_control"
               placeholder="Filter This Table...">
        <table class="_table table_sort">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Company</th>
              <th>Email</th>
              <th>Country</th>
              <th width="50px">BarCode</th>
            </tr>
          </thead>
          <tbody id="table_filter">
            <tr>
              <td>02</td>
              <td>Adarsh</td>
              <td>+8801770 xxxxxx</td>
              <td>Address One</td>
              <td>titra</td>
              <td>info.dealpe@gmail.com</td>
              <td>india</td>
              <td>


                <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Rahul</h5>


                <!-- <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5> -->
              </td>
            </tr>
            <tr>
              <td>01</td>
              <td>Adarsh</td>
              <td>+8801770 xxxxxx</td>
              <td>Address Two</td>
              <td>titra</td>
              <td>info.dealpe@gmail.com</td>
              <td>india</td>
              <td>
                <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
              </td>
            </tr>
            <tr>
              <td>03</td>
              <td>Adrsh</td>
              <td>+8801770 xxxxxx</td>
              <td>Address Three</td>
              <td>titra</td>
              <td>info.dealpe@gmail.com</td>
              <td>india</td>
              <td>
                <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
              </td>
            </tr>
            <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Nishant</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Adarsh</td>
                <td>+8801770 xxxxxx</td>
                <td>Address Three</td>
                <td>titra</td>
                <td>info.dealpe@gmail.com</td>
                <td>india</td>
                <td>
                  <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
      
    
    <!-- HTML code goes here -->
    <script src="all.js"></script>
</body>
</html>