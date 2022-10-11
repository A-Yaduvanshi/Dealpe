<?php
session_start();
include '../api/connection.php';
if (!isset($_SESSION["sess_user"])) {
	header("location: ../admin/index.php");
} else {
	$sql_2 = "SELECT * FROM `admin`";
	$fetchQuery = mysqli_query($conn, $sql_2);
	$runData = mysqli_fetch_assoc($fetchQuery);
	// $three_months = "SELECT * FROM `membership_card` WHERE `expiry_date` = '3 months' and `assign` != 1 and `asign_count` !=1";
	// $runthree = mysqli_query($conn, $three_months);
	// $rowTHree = mysqli_num_rows($runthree);
	$six_months = "SELECT * FROM `membership_card` WHERE `assign` != 1 and `asign_count` !=1";
	$runsix = mysqli_query($conn, $six_months);
	$rowsix = mysqli_num_rows($runsix);

	// $unsoldCard = $rowTHree + $rowsix;
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
		<title>DealPe</title>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');

			* {
				font-family: 'Open Sans', sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			:root {
				--grey: #F1F0F6;
				--dark-grey: #8D8D8D;
				--light: #fff;
				--dark: #000;
				--green: #81D43A;
				--light-green: #E3FFCB;
				--blue: #1775F1;
				--light-blue: #D0E4FF;
				--dark-blue: #0C5FCD;
				--red: #FC3B56;
			}

			html {
				overflow-x: hidden;
			}

			body {
				background: var(--grey);
				overflow-x: hidden;
			}

			a {
				text-decoration: none;
			}

			li {
				list-style: none;
			}

			/* SIDEBAR */
			#sidebar {
				position: fixed;
				max-width: 260px;
				width: 100%;
				background: var(--light);
				top: 0;
				left: 0;
				height: 100%;
				overflow-y: auto;
				scrollbar-width: none;
				transition: all .3s ease;
				z-index: 200;
			}

			#sidebar.hide {
				max-width: 60px;
			}

			#sidebar.hide:hover {
				max-width: 260px;
			}

			#sidebar::-webkit-scrollbar {
				display: none;
			}

			#sidebar .brand {
				font-size: 24px;
				display: flex;
				align-items: center;
				height: 64px;
				font-weight: 700;
				color: var(--blue);
				position: sticky;
				top: 0;
				left: 0;
				z-index: 100;
				background: var(--light);
				transition: all .3s ease;
				padding: 0 6px;
			}

			#sidebar .icon {
				min-width: 48px;
				display: flex;
				justify-content: center;
				align-items: center;
				margin-right: 6px;
			}

			#sidebar .icon-right {
				margin-left: auto;
				transition: all .3s ease;
			}

			#sidebar .side-menu {
				margin: 36px 0;
				padding: 0 20px;
				transition: all .3s ease;
			}

			#sidebar.hide .side-menu {
				padding: 0 6px;
			}

			#sidebar.hide:hover .side-menu {
				padding: 0 20px;
			}

			#sidebar .side-menu a {
				display: flex;
				align-items: center;
				font-size: 14px;
				color: var(--dark);
				padding: 12px 16px 12px 0;
				transition: all .3s ease;
				border-radius: 10px;
				margin: 4px 0;
				white-space: nowrap;
			}

			#sidebar .side-menu>li>a:hover {
				background: var(--grey);
			}

			#sidebar .side-menu>li>a.active .icon-right {
				transform: rotateZ(90deg);
			}

			#sidebar .side-menu>li>a.active,
			#sidebar .side-menu>li>a.active:hover {
				background: var(--blue);
				color: var(--light);
			}

			#sidebar .divider {
				margin-top: 24px;
				font-size: 12px;
				text-transform: uppercase;
				font-weight: 700;
				color: var(--dark-grey);
				transition: all .3s ease;
				white-space: nowrap;
			}

			#sidebar.hide:hover .divider {
				text-align: left;
			}

			#sidebar.hide .divider {
				text-align: center;
			}

			#sidebar .side-dropdown {
				padding-left: 54px;
				max-height: 0;
				overflow-y: hidden;
				transition: all .15s ease;
			}

			#sidebar .side-dropdown.show {
				max-height: 1000px;
			}

			#sidebar .side-dropdown a:hover {
				color: var(--blue);
			}

			#sidebar .ads {
				width: 100%;
				padding: 20px;
			}

			#sidebar.hide .ads {
				display: none;
			}

			#sidebar.hide:hover .ads {
				display: block;
			}

			#sidebar .ads .wrapper {
				background: var(--grey);
				padding: 20px;
				border-radius: 10px;
			}

			#sidebar .btn-upgrade {
				font-size: 14px;
				display: flex;
				justify-content: center;
				align-items: center;
				padding: 12px 0;
				color: var(--light);
				background: var(--blue);
				transition: all .3s ease;
				border-radius: 5px;
				font-weight: 600;
				margin-bottom: 12px;
			}

			#sidebar .btn-upgrade:hover {
				background: var(--dark-blue);
			}

			#sidebar .ads .wrapper p {
				font-size: 12px;
				color: var(--dark-grey);
				text-align: center;
			}

			#sidebar .ads .wrapper p span {
				font-weight: 700;
			}

			/* SIDEBAR */
			/* CONTENT */
			#content {
				position: relative;
				width: calc(100% - 260px);
				left: 260px;
				transition: all .3s ease;
			}

			#sidebar.hide+#content {
				width: calc(100% - 60px);
				left: 60px;
			}

			/* NAVBAR */
			nav {
				background: var(--light);
				height: 64px;
				padding: 0 20px;
				display: flex;
				align-items: center;
				grid-gap: 28px;
				position: sticky;
				top: 0;
				left: 0;
				z-index: 100;
			}

			nav .toggle-sidebar {
				font-size: 18px;
				cursor: pointer;
			}

			nav form {
				max-width: 400px;
				width: 100%;
				margin-right: auto;
			}

			nav .form-group {
				position: relative;
			}

			nav .form-group input {
				width: 100%;
				background: var(--grey);
				border-radius: 5px;
				border: none;
				outline: none;
				padding: 10px 36px 10px 16px;
				transition: all .3s ease;
			}

			nav .form-group input:focus {
				box-shadow: 0 0 0 1px var(--blue), 0 0 0 4px var(--light-blue);
			}

			nav .form-group .icon {
				position: absolute;
				top: 50%;
				transform: translateY(-50%);
				right: 16px;
				color: var(--dark-grey);
			}

			nav .nav-link {
				position: relative;
			}

			nav .nav-link .icon {
				font-size: 18px;
				color: var(--dark);
			}

			nav .nav-link .badge {
				position: absolute;
				top: -12px;
				right: -12px;
				width: 20px;
				height: 20px;
				border-radius: 50%;
				border: 2px solid var(--light);
				background: var(--red);
				display: flex;
				justify-content: center;
				align-items: center;
				color: var(--light);
				font-size: 10px;
				font-weight: 700;
			}

			nav .divider {
				width: 1px;
				background: var(--grey);
				height: 12px;
				display: block;
			}

			nav .profile {
				position: relative;
			}

			nav .profile img {
				width: 36px;
				height: 36px;
				border-radius: 50%;
				object-fit: cover;
				cursor: pointer;
			}

			nav .profile .profile-link {
				position: absolute;
				top: calc(100% + 10px);
				right: 0;
				background: var(--light);
				padding: 10px 0;
				box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
				border-radius: 10px;
				width: 160px;
				opacity: 0;
				pointer-events: none;
				transition: all .3s ease;
			}

			nav .profile .profile-link.show {
				opacity: 1;
				pointer-events: visible;
				top: 100%;
			}

			nav .profile .profile-link a {
				padding: 10px 16px;
				display: flex;
				grid-gap: 10px;
				font-size: 14px;
				color: var(--dark);
				align-items: center;
				transition: all .3s ease;
			}

			nav .profile .profile-link a:hover {
				background: var(--grey);
			}

			/* NAVBAR */
			/* MAIN */
			main {
				width: 100%;
				padding: 24px 20px 20px 20px;
			}

			main .title {
				font-size: 28px;
				font-weight: 600;
				margin-bottom: 10px;
			}

			main .breadcrumbs {
				display: flex;
				grid-gap: 6px;
			}

			main .breadcrumbs li,
			main .breadcrumbs li a {
				font-size: 14px;
			}

			main .breadcrumbs li a {
				color: var(--blue);
			}

			main .breadcrumbs li a.active,
			main .breadcrumbs li.divider {
				color: var(--dark-grey);
				pointer-events: none;
			}

			main .info-data {
				margin-top: 36px;
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
				grid-gap: 20px;
			}

			main .info-data .card {
				padding: 20px;
				border-radius: 10px;
				background: var(--light);
				box-shadow: 4px 4px 16px rgba(0, 0, 0, .05);
			}

			main .card .head {
				display: flex;
				justify-content: space-between;
				align-items: flex-start;
			}

			main .card .head h2 {
				font-size: 24px;
				font-weight: 600;
			}

			main .card .head p {
				font-size: 14px;
			}

			main .card .head .icon {
				font-size: 20px;
				color: var(--green);
			}

			main .card .head .icon.down {
				color: var(--red);
			}

			main .card .progress {
				display: block;
				margin-top: 24px;
				height: 10px;
				width: 100%;
				border-radius: 10px;
				background: var(--grey);
				overflow-y: hidden;
				position: relative;
				margin-bottom: 4px;
			}

			main .card .progress::before {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				height: 100%;
				background: var(--blue);
				width: var(--value);
			}

			main .card .label {
				font-size: 14px;
				font-weight: 700;
			}

			main .data {
				display: flex;
				grid-gap: 20px;
				margin-top: 20px;
				flex-wrap: wrap;
			}

			main .data .content-data {
				flex-grow: 1;
				flex-basis: 400px;
				padding: 20px;
				background: var(--light);
				border-radius: 10px;
				box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
			}

			main .content-data .head {
				display: flex;
				justify-content: space-between;
				align-items: center;
				margin-bottom: 24px;
			}

			main .content-data .head h3 {
				font-size: 20px;
				font-weight: 600;
			}

			main .content-data .head .menu {
				position: relative;
				display: flex;
				justify-content: center;
				align-items: center;
			}

			main .content-data .head .menu .icon {
				cursor: pointer;
			}

			main .content-data .head .menu-link {
				position: absolute;
				top: calc(100% + 10px);
				right: 0;
				width: 140px;
				background: var(--light);
				border-radius: 10px;
				box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
				padding: 10px 0;
				z-index: 100;
				opacity: 0;
				pointer-events: none;
				transition: all .3s ease;
			}

			main .content-data .head .menu-link.show {
				top: 100%;
				opacity: 1;
				pointer-events: visible;
			}

			main .content-data .head .menu-link a {
				display: block;
				padding: 6px 16px;
				font-size: 14px;
				color: var(--dark);
				transition: all .3s ease;
			}

			main .content-data .head .menu-link a:hover {
				background: var(--grey);
			}

			main .content-data .chart {
				width: 100%;
				max-width: 100%;
				overflow-x: auto;
				scrollbar-width: none;
			}

			main .content-data .chart::-webkit-scrollbar {
				display: none;
			}

			main .chat-box {
				width: 100%;
				max-height: 360px;
				overflow-y: auto;
				scrollbar-width: none;
			}

			main .chat-box::-webkit-scrollbar {
				display: none;
			}

			main .chat-box .day {
				text-align: center;
				margin-bottom: 10px;
			}

			main .chat-box .day span {
				display: inline-block;
				padding: 6px 12px;
				border-radius: 20px;
				background: var(--light-blue);
				color: var(--blue);
				font-size: 12px;
				font-weight: 600;
			}

			main .chat-box .msg img {
				width: 28px;
				height: 28px;
				border-radius: 50%;
				object-fit: cover;
			}

			main .chat-box .msg {
				display: flex;
				grid-gap: 6px;
				align-items: flex-start;
			}

			main .chat-box .profile .username {
				font-size: 14px;
				font-weight: 600;
				display: inline-block;
				margin-right: 6px;
			}

			main .chat-box .profile .time {
				font-size: 12px;
				color: var(--dark-grey);
			}

			main .chat-box .chat p {
				font-size: 14px;
				padding: 6px 10px;
				display: inline-block;
				max-width: 400px;
				line-height: 150%;
			}

			main .chat-box .msg:not(.me) .chat p {
				border-radius: 0 5px 5px 5px;
				background: var(--blue);
				color: var(--light);
			}

			main .chat-box .msg.me {
				justify-content: flex-end;
			}

			main .chat-box .msg.me .profile {
				text-align: right;
			}

			main .chat-box .msg.me p {
				background: var(--grey);
				border-radius: 5px 0 5px 5px;
			}

			main form {
				margin-top: 6px;
			}

			main .form-group {
				width: 100%;
				display: flex;
				grid-gap: 10px;
			}

			main .form-group input {
				flex-grow: 1;
				padding: 10px 16px;
				border-radius: 5px;
				outline: none;
				background: var(--grey);
				border: none;
				transition: all .3s ease;
				width: 100%;
			}

			main .form-group input:focus {
				box-shadow: 0 0 0 1px var(--blue), 0 0 0 4px var(--light-blue);
			}

			main .btn-send {
				padding: 0 16px;
				background: var(--blue);
				border-radius: 5px;
				color: var(--light);
				cursor: pointer;
				border: none;
				transition: all .3s ease;
			}

			main .btn-send:hover {
				background: var(--dark-blue);
			}

			/* MAIN */
			/* CONTENT */
			@media screen and (max-width: 768px) {
				#content {
					position: relative;
					width: calc(100% - 60px);
					transition: all .3s ease;
				}

				nav .nav-link,
				nav .divider {
					display: none;
				}
			}
		</style>
	</head>

	<body>
		<!-- SIDEBAR -->
		<section id="sidebar">
			<a href="../admin/dashboard.php" class="brand"><img style="height:  70px;width:70px;font-weight: bold;" src="../dealpaylogo.jpg">DealPe Admin Dashboard</a>
			<ul class="side-menu">
				<li><a href="#top" class="active"><i class='bx bxs-dashboard icon'></i>Dashboard</a></li>
				<li class="divider" data-text="main">Main</li>
				<li>
					<a style="font-weight: bold;" href="../admin/mers.php"><i class='bx bxs-log-in icon'></i>Merchant</a>
					<a style="font-weight: bold;" href="../admin/franchisedashdata.php"><i class='bx bxs-log-in icon'></i>Franchise</a>
					<a style="font-weight: bold;" href="../admin/customerdata.php"><i class='bx bxs-log-in icon'></i>Customer</a>
					<a style="font-weight: bold;" href="../admin/total_sales.php"><i class='bx bxs-log-in icon'></i>Sales Executive</a>
					<a style="font-weight: bold;" href="../admin/membershpcard_data.php"><i class='bx bxs-log-in icon'></i>Membership_card Details</a>
				</li>
				<!-- <li><a href="Customer/Customercontact.html"><i class='bx bxs-contact icon'></i>Customer Contact</a></li> -->
				<li class="divider" data-text="Card Sold and Report"> Card Sold and Report</li>
				<li><a href="cardSold.php"><i class='bx bx-table icon'></i> Total Card Sold</a></li>
				<li><a href="cardunsold.php"><i class='bx bx-table icon'></i> Total Card unSold</a></li>
				<li>
					<!-- 	<div class="text-center"><li><a href="../franchise/franchisedash.html">Franchise Report</a></li>
						<li><a href="../Sales/salesexecutive.html">Sales Executive Report</a></li>
						<li><a href="merchant/merchentreport.html">Merchant Report</a></li>
						<li><a href="Customer/customerdata.html">Customer All Data</a></li>
						<li><a href="Sales/stockreport.html">Stock Report</a></li>
				</div> -->
				</li>
			</ul>
			<!-- <div class="ads">
				<div class="wrapper">
					 <a href="#" class="btn-upgrade">Upgrade</a>
					<p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p>
				</div>
			</div> -->
		</section>
		<!-- SIDEBAR -->
		<!-- NAVBAR -->
		<section id="content">
			<!-- NAVBAR -->
			<nav>
				<!-- <i class='bx bx-menu toggle-sidebar'></i> -->
				<form action="#">
					<div class="form-group">
						<!-- <input type="text" placeholder="Search..."> -->
						<!-- <i class='bx bx-search icon'></i> -->
					</div>
				</form>
				<span class="divider"></span>
				<div>
					<!-- <a href="../api/adminlogout.php">Logout</a> -->
					<button onclick="myFunction()">Log Out</button>
				</div>
				<!-- <button style="background-color: #808080;">Reset Password</button> -->
			</nav>
			<!-- NAVBAR -->
			<!-- MAIN -->
			<main>
				<h1 style="font-weight: bold;" class="title">Dashboard</h1>
				<ul class="breadcrumbs">
					<li><a href="#">Home</a></li>
					<li class="divider">/</li>
					<li><a href="#" class="active">Dashboard</a></li>
					<!-- <a href="../admin/commission.php"><button class="btn bg-primary">Commission</button></a> -->
				</ul>
				<div class="info-data">
					<!-- <div class="card">
						<div class="head">
							<div>
								<h2><?php echo $rowTHree; ?></h2>
								<p style="font-weight: bold;">Total Available Card(3 Month)</p>
							</div>
							<i class='bx bx-trending-up icon'></i>
						</div>
						<span class="progress" data-value="40%"></span>
						<span class="label">60%</span> 
					</div> -->
					<div class="card">
						<div class="head">
							<div>
								<h2><?php echo $rowsix; ?></h2>
								<p style="font-weight: bold;">Total Available Card(6 Month)</p>
							</div>
							<i class='bx bx-trending-down icon down'></i>
						</div>
						<!-- <span class="progress" data-value="60%"></span>
						span class="label">60%</span> -->
					</div>

					<div class="card">
						<div class="head">
							<div>

								<p style="font-weight: bold;"> Total Revenue</p>
								<h2><?php
									$sql = "SELECT  SUM(membership_price) FROM `membership_card` WHERE `admin_id`='" . $_SESSION['sess_user'] . "' and `customer_select`='1'";
									$run = mysqli_query($conn, $sql);
									// echo $_SESSION['sess_user'];
									$data = mysqli_fetch_assoc($run);
									if ($data['SUM(membership_price)'] > 0) {
										# code...
										echo $data['SUM(membership_price)'];
									} else {
										echo 0;
									} ?></h2>
							</div>
							<i class='bx bx-trending-down icon down'></i>
						</div>
						<!-- <span class="progress" data-value="60%"></span>
						span class="label">60%</span> -->
					</div>

					<div class="card">
						<div class="head">
							<div>
								<a href="add_membership_card.php">
									<p style="font-weight: bold;">Generate MemberShip Card</p>
								</a>
							</div>
							<!-- <i class='bx bx-trending-up icon' ></i> -->
						</div>
						<!-- <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span> -->
					</div>
					<div class="card">
						<div class="head">
							<div>
								<a href="assign_card_franchise.php">
									<p style="font-weight: bold;">Assign Card To Franchise</p>
								</a>
							</div>
							<!-- <i class='bx bx-trending-up icon' ></i> -->
						</div>
						<!-- <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span> -->
					</div>
					<div class="card">
						<div class="head">
							<div>
								<a href="remove_membership_card.php">
									<!-- <?php echo $_SESSION['sess_user'];

											?> -->
									<p style="font-weight: bold;">REPLACE ASSIGNED CARD TO FRANCHISE</p>
								</a>
							</div>
							<!-- <i class='bx bx-trending-up icon' ></i> -->
						</div>
						<!-- <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span> -->
					</div>
					<div class="card">
						<div class="head">
							<div>
								<a href="./franchisecommission.php">
									<p style="font-weight: bold;"> Franchise Commission</p>
								</a>
							</div>
							<!-- <i class='bx bx-trending-up icon' ></i> -->
						</div>
						<!-- <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span> -->
					</div>
					<!-- <div class="card">
						<div class="head">
							<div>
								<a href="../admin/salescommission.php">
									<p style="font-weight: bold;"> Sales Commission</p>
								</a>
							</div>
							 <i class='bx bx-trending-up icon' ></i> -->
					<!-- </div> -->
					<!-- <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span> -->
					<!-- </div>  -->
					<div class="card">
						<div class="head">
							<div>
								<a href="../admin/availablesale.php">
									<p style="font-weight: bold;">Existing Membership</p>
								</a>
							</div>
							<!-- <i class='bx bx-trending-up icon' ></i> -->
						</div>
						<!-- <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span> -->
					</div>
				</div>
				<div class="data">
					<div class="content-data">
						<div class="head">
							<div class="head">
							</div>
							<div class="chat-box">
								<h3 style="font-size: bold;">Renew stock</h3>
								<?php
								include "../api/connection.php";
								$sql = "SELECT * FROM `renew_stock` ";
								$select = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_row($select)) { ?>
									<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
										<!-- <div class="card-header">Header</div> -->
										<div class="card-body">
											<h5 class="card-title"><?php echo $row['0'] ?></h5>
											<h5 class="card-title"><?php echo $row['1'] ?></h5>
											<p class="card-text"><?php echo $row['2'] ?></p><span style="color: rgb(32, 32, 208);" class="time"><?php echo $row['3'] ?></span>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="content-data">
						<div class="head">
							<h3 style="font-size: bold;">Promotion Merchant</h3>
						</div>
						<div class="chat-box">
							<?php
							include "../api/connection.php";
							$sql = "SELECT * FROM `promote_my_bussiness`";
							$select = mysqli_query($conn, $sql);
							while ($row2 = mysqli_fetch_assoc($select)) { ?>
								<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
									<!-- <div class="card-header">Header</div> -->
									<div class="card-body">
										<h5 class="card-title"><?php echo $row2['merchant_id'] ?></h5>
										<p class="card-text"><?php echo $row2['merchant_email'] ?></p><span style="color: rgb(32, 32, 208);" class="time"><?php echo $row2['merchant_phone'] ?></span>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="content-data">
						<div class="head">
							<h3 style="font-size: bold;">Request new Member</h3>
						</div>
						<div class="chat-box">
							<?php
							include "../api/connection.php";
							$sql = "SELECT * FROM `new_membership` ";
							$select = mysqli_query($conn, $sql);
							while ($row2 = mysqli_fetch_assoc($select)) { ?>
								<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
									<!-- <div class="card-header">Header</div> -->
									<div class="card-body">
										<h5 class="card-title"><?php echo $row2['c_id'] ?></h5>
										<p class="card-text"><?php echo $row2['c_msg'] ?></p><span style="color: rgb(32, 32, 208);" class="time"><?php echo $row2['approved'] ?></span>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</main>
			<!-- MAIN -->
		</section>
		<!-- NAVBAR -->
		<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

		<script>
			function myFunction() {
				var answer = confirm("Do you really want to log out mate?")
				if (answer) {
					window.location.href = '../api/adminlogout.php'
				} else {
					text = "You canceled!";
				}
				//   document.getElementById("demo").innerHTML = text;
			}
		</script>
	</body>

	</html><?php
		}
			?>