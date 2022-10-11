<?php

include "../api/connection.php";
$selectquery = "select * from `membership_card`";
$query = mysqli_query($conn, $selectquery);


?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stock View</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Cache-control" content="no-cache">
   
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-new/css/dashforge.css">
    <link rel="stylesheet" href="https://newui.campus365.io/backend/lib/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <!-- <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-new/css/dashforge.dashboard.css"> -->
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-new/css/dashforge.mail.css">
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-new/css/dashforge.filemgr.css">
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-new/css/dashforge.demo.css">
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-new/css/dashforge.profile.css">
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-new/css/dashforge.calendar.css">
    <link rel="stylesheet" href="https://newui.campus365.io/backend/plugins/colorpicker/bootstrap-colorpicker.css">
  
    <script type="text/javascript">
        var baseurl = "https://newui.campus365.io/";
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and me/
        [if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    <!--print table mobile support-->
    <script src="https://newui.campus365.io/backend/lib/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.5/pdfobject.min.js" integrity="sha512-K4UtqDEi6MR5oZo0YJieEqqsPMsrWa9rGDWMK2ygySdRQ+DtwmuBXAllehaopjKpbxrmXmeBo77vjA2ylTYhRA==" crossorigin="anonymous"></script>
    <script src="https://newui.campus365.io/backend/dist/js/moment.min.js"></script>
    <script src="https://newui.campus365.io/backend/datepicker/date.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://newui.campus365.io/backend/lib/imageviewer/baguetteBox.min.css" />

    <!-- Timetable CSS Files -->
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-timetable/css/magnific-popup.css">
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-timetable/css/timetable.css">

    <!-------------- CSS Files for example -------------->
    <!-- <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-timetable/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-timetable/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://newui.campus365.io/backend/assets-timetable/css/style.css"> -->

  </head>
  <style>
    /*
 * Dashforge Dashboard Pages
 *
 * This style is use in dashboard pages.
 *
 */
.bg-df-1 {
  background-color: #0168fa; }

.bg-df-2 {
  background-color: #69b2f8; }

.bg-df-3 {
  background-color: #d1e6fa; }

.bg-litecoin {
  background-color: #325a98; }

.stroke-wd-3 {
  stroke-width: 3px; }

.wd-12 {
  width: 12px; }

.ht-12 {
  height: 12px; }


  .dashboard-yearly-expense-chart{
    margin-top: 130px !important;
  }
  .dashboard-yearly-toggle-label{
    position: relative;
    top: -1px;
    right: 44px;
  }

.chart-one {
  position: relative;
  overflow: hidden;
  margin: 0 15px 15px;
  padding-top: 80px;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }
  @media (min-width: 576px) {
    .chart-one {
      margin: 0 20px 15px;
      padding-top: 0;
      overflow: visible; } }
  .chart-one .flot-x-axis {
    display: none; }
    @media (min-width: 576px) {
      .chart-one .flot-x-axis {
        display: block; } }
    .chart-one .flot-x-axis .flot-tick-label {
      transform: translateY(2px);
      text-transform: uppercase;
      font-size: 9px;
      font-weight: 500;
      font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
      letter-spacing: .5px;
      color: #8392a5; }
  .chart-one .flot-chart {
    margin-left: -12px;
    margin-right: -10px;
    height: 350px; }

.chart-two .flot-x-axis > div {
  transform: translateY(3px);
  text-transform: uppercase;
  font-size: 9px;
  font-weight: 500;
  font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
  letter-spacing: .5px;
  color: #8392a5; }
  .chart-two .flot-x-axis > div:first-child {
    margin-left: 15px; }

.chart-two .flot-chart {
  height: 150px;
  margin-left: -15px;
  margin-right: -13px; }
  @media (min-width: 576px) {
    .chart-two .flot-chart {
      height: 210px; } }
  @media (min-width: 992px) and (max-width: 1199.98px) {
    .chart-two .flot-chart {
      height: 155px; } }

.chart-three .flot-chart {
  margin-left: -7px;
  margin-right: -8px;
  margin-bottom: -5px; }

.chart-four .flot-chart {
  margin-right: -8px;
  margin-bottom: -5px; }

.chart-five > div {
  position: relative;
  margin-left: -10px;
  height: 225px; }

.table-dashboard {
  font-size: 13px; }
  .table-dashboard thead th,
  .table-dashboard tbody td {
    border-color: #e5e9f2;
    white-space: nowrap; }
    .table-dashboard thead th:first-child,
    .table-dashboard tbody td:first-child {
      padding-left: 10px; }
    .table-dashboard thead th:last-child,
    .table-dashboard tbody td:last-child {
      padding-right: 20px; }
  .table-dashboard thead th {
    font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: .5px;
    text-transform: uppercase;
    color: #8392a5; }

.table-dashboard-one tbody td {
  padding-top: 5px;
  padding-bottom: 5px; }

/* -------------- dashboard-two.html ----------------- */
.chart-six {
  margin-left: -5px;
  height: 150px; }
  @media (min-width: 576px) {
    .chart-six {
      height: 200px; } }
  @media (min-width: 768px) {
    .chart-six {
      height: 250px; } }
  @media (min-width: 992px) {
    .chart-six {
      height: 300px; } }

.chart-seven {
  height: 150px; }
  @media (min-width: 992px) {
    .chart-seven {
      height: 205px; } }
  @media (min-width: 1200px) {
    .chart-seven {
      height: 188px; } }

.chart-eight .flot-chart {
  margin-left: -26px;
  margin-right: -26px;
  margin-bottom: -26px;
  height: 126px; }
  @media (min-width: 768px) {
    .chart-eight .flot-chart {
      height: 167px; } }
  @media (min-width: 992px) {
    .chart-eight .flot-chart {
      margin-left: -30px;
      margin-right: -30px;
      margin-bottom: -30px;
      height: 126px; } }

.chart-nine .flot-chart {
  height: 142px;
  margin-left: -5px;
  margin-right: -5px; }

.chart-nine .flot-y-axis .flot-tick-label,
.chart-nine .flot-x-axis .flot-tick-label {
  font-size: 9px;
  font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
  font-weight: 500;
  color: #8392a5; }

.chart-nine .flot-y-axis .flot-tick-label {
  margin-left: -10px; }
  .chart-nine .flot-y-axis .flot-tick-label:first-child {
    display: none; }

.chart-nine .flot-x-axis .flot-tick-label {
  transform: translateY(3px); }
  .chart-nine .flot-x-axis .flot-tick-label:last-child {
    margin-left: -5px; }

.chart-ten .flot-chart {
  height: 95px;
  margin-left: -8px;
  margin-right: -12px; }

.card-dashboard-table .table th, .card-dashboard-table .table td {
  border-color: rgba(72, 94, 144, 0.16);
  /* padding: 10px 15px; */
  font-size: 13px;
  text-align: right;
  white-space: nowrap; }

.card-dashboard-table .table thead tr th:first-child {
  border-left-width: 0; }

.card-dashboard-table .table thead tr th:last-child {
  border-right-width: 0; }

.card-dashboard-table .table thead tr:first-child th {
  border-top-width: 0;
  font-size: 13px;
  background-color: #f5f6fa;
  text-align: left; }

.card-dashboard-table .table thead tr:last-child th {
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: .5px;
  /* padding: 8px 15px; */
  color: #8392a5; }

.card-dashboard-table .table thead tr th:first-child,
.card-dashboard-table .table tbody tr td:first-child {
  text-align: left; }

.card-dashboard-table .table strong {
  font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
  font-weight: 500; }

/* ---------- dashboard-three.html ------------ */
.card-crypto .nav-line {
  border-bottom-width: 0;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 10px;
  letter-spacing: .5px; }
  .card-crypto .nav-line .nav-link + .nav-link {
    margin-left: 10px; }
  .card-crypto .nav-line .nav-link.active::after {
    height: 3px;
    bottom: -10px;
    border-radius: 0.25rem;
    display: none; }
    @media (min-width: 576px) {
      .card-crypto .nav-line .nav-link.active::after {
        display: block; } }

.chart-eleven .flot-chart {
  height: 160px; }
  @media (min-width: 576px) {
    .chart-eleven .flot-chart {
      height: 220px; } }
  @media (min-width: 768px) {
    .chart-eleven .flot-chart {
      height: 250px; } }
  @media (min-width: 992px) {
    .chart-eleven .flot-chart {
      height: 284px; } }

.chart-eleven .flot-x-axis > div:first-child,
.chart-eleven .flot-y-axis > div:first-child {
  display: none; }

.crypto {
  position: relative;
  padding: 20px; }

.crypto-icon {
  width: 42px;
  height: 42px;
  border-radius: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 20px; }

.crypto-icon-sm {
  height: 35px;
  width: 35px;
  font-size: 16px; }

.crypto-bitcoin-cash {
  line-height: 0;
  transform: rotate(-40deg); }

.chart-twelve .flot-chart {
  height: 80px;
  margin-left: -20px;
  margin-right: -20px; }

.list-label {
  padding: 6px 20px;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 10px;
  font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
  background-color: #f5f6fa;
  color: #8392a5;
  letter-spacing: 1px;
  border-top: 1px solid #e5e9f2; }
  .list-label:first-of-type {
    border-top-width: 0; }

.list-item {
  padding: 10px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-top: 1px solid #e5e9f2; }

.chart-thirteen {
  height: 220px; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .chart-thirteen {
      height: 143px; } }
  @media (min-width: 992px) and (max-width: 1199.98px) {
    .chart-thirteen {
      height: 160px; } }

.chart-fourteen {
  position: relative;
  overflow: hidden; }
  .chart-fourteen .flot-chart {
    height: 200px;
    margin-top: -10px;
    margin-left: -30px;
    margin-right: -28px; }
  .chart-fourteen .flot-x-axis .flot-tick-label {
    font-size: 9px;
    font-weight: 500;
    font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
    color: #8392a5;
    text-transform: uppercase;
    letter-spacing: -.2px; }

.chart-fifteen {
  overflow: hidden; }
  .chart-fifteen .flot-chart {
    height: 200px;
    margin-right: -18px; }
  .chart-fifteen .flot-y-axis .flot-tick-label,
  .chart-fifteen .flot-x-axis .flot-tick-label {
    font-size: 9px;
    font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
    font-weight: 500;
    color: #67788e; }
  .chart-fifteen .flot-y-axis .flot-tick-label:first-child {
    display: none; }
  .chart-fifteen .flot-x-axis .flot-tick-label {
    text-transform: uppercase;
    font-size: 8px;
    font-weight: 600; }

.chart-sixteen {
  overflow: hidden; }
  .chart-sixteen .flot-chart {
    height: 180px;
    margin-left: -8px;
    margin-right: -8px;
    margin-bottom: -8px; }
    @media (min-width: 768px) and (max-width: 991.98px) {
      .chart-sixteen .flot-chart {
        height: 274px; } }
    @media (min-width: 1200px) {
      .chart-sixteen .flot-chart {
        height: 186px; } }
  .chart-sixteen .flot-x-axis .flot-tick-label {
    font-size: 9px;
    font-weight: 600;
    font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
    margin-top: -25px;
    margin-left: -25px; }
    .chart-sixteen .flot-x-axis .flot-tick-label:first-child {
      display: none; }

.chart-seventeen {
  height: 260px; }
.chart-seventeen-auto {
  height: 800px; }
.table-dashboard-two {
  width: 100%;
  font-size: 13px; }
  .table-dashboard-two tr + tr td {
    border-top: 1px solid #e5e9f2; }
  .table-dashboard-two td {
    vertical-align: top;
    line-height: 1;
    padding: 8px 0; }
    .table-dashboard-two td:first-child {
      padding-left: 0; }
      .table-dashboard-two td:first-child div {
        opacity: .7; }
    .table-dashboard-two td:nth-child(3), .table-dashboard-two td:last-child {
      font-family: "Rubik", sans-serif; }
    .table-dashboard-two td:last-child {
      color: #8392a5; }
  </style>
  <body class="d-flex flex-column h-100p" onload="FreshworksWidget('hide', 'launcher');">
  
    <!-- navbar --><div class="content content-fixed">
        <div class="container pd-x-0">
        <a href="../admin/dashboard.php"> <button style="background-color: #6c63ff;color:white;float: right;padding:8px; border-radius: 10px; margin-left:10px; margin-top:5px">Go Home</button></a>
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
                        </ol>
                    </nav>
                    <h4 style="font-weight: bold;" class="mg-b-0 tx-spacing--1">Stock View</h4>
                </div>
                <div class="d-md-block">
              <!-- <a href="./frenchregis.html"><button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5" > Add NEW</button>
               </a> -->
             </div>
            </div>
        </div>
        <!--BREADCRUM CONTAINER -->
        <!-- Main content -->
        <div class="container pd-x-0">
            <div data-label="Stock Details" class="df-example demo-table mg-t-25">
                <table class="table tx-13" id="example1">
                    <thead>
                        <tr>
                        <th style="width: 10px;">MEMBERSHIP CARD NO</th>
                        <th style="width: 10px;">DATE OF UPLOAD</th>
                            
                            
                            <th >PRICE</th>
                            <th  >VALIDITY (months)</th>
                            <th style="width: 10px;">remove</th>
                            <!-- <th>Pan_number</th>
                            <th>State</th>
                            <th>Remove</th> -->
                            <!-- <th>Total Issued</th>
                            <th>Revenue</th>
                            <th>Payment</th>
                            <th>Payment Pending</th> -->
                        </tr>
                    </thead>
                    <tbody>

<?php while ($res = mysqli_fetch_row($query)) { ?>

    <tr>
   <!-- <td> <?php echo $res[0]; ?></td> -->
   <td> <?php echo $res[1]; ?></td>
   <td> <?php echo $res[5]; ?></td>
   <td> <?php echo $res[2]; ?></td>
   <td> <?php echo $res[3]; ?></td>
   <!-- <td> <?php echo $res[5]; ?></td> -->
   <!-- <td> <?php echo $res[9]; ?></td> -->
     
   <td class="no-print">

<a href="../api/deletefranchise.php?id=<?php echo $res[0];?>">
<button class="btn btn-block bg-danger text-white">Delete</button>
</a>
</td>
</tr>
<?php } ?>
</tbody>


                   
                </table>
            </div>
        </div>
    </div>


<script>
  $(function(){
  'use strict'
      $('.select2').select2({
          searchInputPlaceholder: 'Search options'
      });
  });

  $(document).ready(function () {
      var table = $('#example3').DataTable({
          pageLength: 50,
          dom: 'Blfrtip',
          bSort: false,
          stateSave: true,
          buttons: [
          {
              extend: 'excelHtml5',
              footer: true,
              exportOptions: {
                  columns: ':visible'
              }
          },
          {
              extend: 'pdfHtml5',
              title: $('.download_label').html(),
              layout: 'headerLineOnly',
              pageSize: 'A4', //A3 , A5 , A6 , legal , letter
              orientation: 'portrait', //portrait
              layout: {
                  fillColor: function (rowIndex, node, columnIndex) {
                      return (rowIndex === 0) ? '#c2dec2' : null;
                  }
              },
              customize: function(doc) {
                  
                  for (var row = 0; row < doc.content[1].table.headerRows; row++) {
                      var header = doc.content[1].table.body[row];
                      for (var col = 0; col < header.length; col++) {
                      header[col].fillColor = '#6ebce2';
                      }
                  }
                  //Create a date string that we use in the footer. Format is dd-mm-yyyy
                  var now = new Date();
                  var jsDate = now.getDate()+'-'+(now.getMonth()+1)+'-'+now.getFullYear();
                  //pageMargins [left, top, right, bottom] 
                  doc.pageMargins = [20,60,20,30];
                  // Set the font size fot the entire document
                  doc.defaultStyle.fontSize = 9;
                  // Set the fontsize for the table header
                  doc.styles.tableHeader.fontSize = 9;
                  // Create a footer object with 2 columns
                  // Left side: report creation date
                  // Right side: current page and total pages
                  doc['footer']=(function(page, pages) {
                      return {
                          columns: [
                          {
                              alignment: 'left',
                              text: ['Created on: ', { text: jsDate.toString() }]
                          },
                          {
                              alignment: 'right',
                              text: ['page ', { text: page.toString() },  ' of ', { text: pages.toString() }]
                          }
                          ],
                          margin: 20
                      }
                  });

                  // Change dataTable layout (Table styling)
                  // To use predefined layouts uncomment the line below and comment the custom lines below
                  // doc.content[0].layout = 'lightHorizontalLines'; // noBorders , headerLineOnly
                  var objLayout = {};
                  objLayout['hLineWidth'] = function(i) { return .5; };
                  objLayout['vLineWidth'] = function(i) { return .5; };
                  objLayout['hLineColor'] = function(i) { return '#aaa'; };
                  objLayout['vLineColor'] = function(i) { return '#aaa'; };
                  objLayout['paddingLeft'] = function(i) { return 4; };
                  objLayout['paddingRight'] = function(i) { return 4; };
                  doc.content[0].layout = objLayout;
              },
              exportOptions: {
                  columns: ':visible',
                  search: 'applied',
                  order: 'applied'
                  
              }
              
          },
          {
              extend: 'copy',
              footer: false,
              exportOptions: {
                  columns: ':visible'
              }
          },
              {
                  extend: 'colvis',
                  text: '<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>',
                  titleAttr: 'Columns',
                  postfixButtons: [ 'colvisRestore' ]
              }        
          ],
          columnDefs: [
              {
                  targets: -1,
                  visible: false
              }
          ],
          language: {
              searchPlaceholder: 'Search...',
              sSearch: '',
              lengthMenu: '',
          }
      });
  });
   
 </script><script src="https://newui.campus365.io/backend/assets-timetable/js/jquery.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/jquery/jquery.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/jqueryui/jquery-ui.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/jquery-steps/build/jquery.steps.min.js"></script>
<script src="https://newui.campus365.io/backend/dist/js/moment.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/fullcalendar/fullcalendar.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/feather-icons/feather.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/prismjs/prism.js"></script>
<script src="https://newui.campus365.io/backend/lib/parsleyjs/parsley.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/jquery.flot/jquery.flot.js"></script>
<script src="https://newui.campus365.io/backend/lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="https://newui.campus365.io/backend/lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="https://newui.campus365.io/backend/lib/chart.js/Chart.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/jqvmap/jquery.vmap.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="https://newui.campus365.io/backend/lib/peity/jquery.peity.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/select2/js/select2.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/quill/quill.min.js"></script>
<script src="https://newui.campus365.io/backend/assets-new/js/dashforge.sampledata.js"></script>
<script src="https://newui.campus365.io/backend/assets-new/js/dashforge.mail.js"></script>
<script src="https://newui.campus365.io/backend/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<link href="https://newui.campus365.io/backend/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet"/>
<link href="https://newui.campus365.io/backend/assets-new/css/dataTables.colVis.min.css" rel="stylesheet"/>
<script src="https://newui.campus365.io/backend/plugins/daterangepicker/daterangepicker.js"></script>
<script src="https://newui.campus365.io/backend/plugins/colorpicker/bootstrap-colorpicker.js"></script>
<script src="https://newui.campus365.io/backend/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/typeahead.js/typeahead.bundle.min.js"></script>
<script src="https://newui.campus365.io/backend/lib/js-cookie/js.cookie.js"></script>
<script src="https://newui.campus365.io/backend/assets-new/js/dashforge.js"></script>
<script src="https://newui.campus365.io/backend/assets-new/js/calendar-events.js"></script>
<script src="https://newui.campus365.io/backend/assets-new/js/xlsx.full.min.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/custom/campus365-custom-scripts.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/pdfmake.min.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/jszip.min.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/vfs_fonts.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="https://newui.campus365.io/backend/dist/js/bootstrap-select.min.js"></script>
<script src="https://newui.campus365.io/backend/plugins/tinymce/tinymce.min.js"></script>
<!-- Timetable JS Files -->

<script src="https://newui.campus365.io/backend/assets-timetable/js/jquery.magnific-popup.js"></script>
<script src="https://newui.campus365.io/backend/assets-timetable/js/timetable.js"></script>
<!--------------------------------------------------->
<script src="https://newui.campus365.io/backend/assets-new/js/anime.min.js"></script> 

</body>
</html> 
