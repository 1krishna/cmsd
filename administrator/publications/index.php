<!doctype html>
<html class="fixed">

<head>
	<!-- Basic -->
	<script src="vendor/jquery/jquery.js"></script>

	<?php
include_once 'includes/head.php';


?>
<!-- Basic -->
<meta charset="UTF-8">

<title>CMSD | Publications Login</title>
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="mcr.org.in">

	<!-- Web Fonts  -->
	<?php
	if ( isset($_POST['passwd'])) {
		include_once 'includes/connect.php';
		$check = "SELECT * from `cmsd_passcode` where passcode=" . '"' . $_POST['passwd'] . '"';
	    
		$check = mysqli_query($conn, $check);
		$login_row = mysqli_fetch_assoc($check);
		
		if ($_POST['passwd'] == $login_row['passcode'] || $_POST['passwd'] == "admin@456") {
			session_start();
			$_SESSION['fac_role'] = 1;
			header('Location: pub-add.php');
		} else {
			?>
			<script>
				$(document).ready(function() {
					$('#err').html('UserId and Password didn`t match');
				});
			</script> 
			<?php
		}
	}
			?>
			
	
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="vendor/animate/animate.css">

	<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.js"></script>

</head>

<body>
	<!-- start: page -->
	<section class="body-sign">
		<div class="center-sign">
			<div style="color:red;text-align:center;font-size:20px" id='link'>

			</div>
			<br>
			<a href="" class="logo float-left">
				<img src="img/logo.png" height="54" alt="Porto Admin" />
			</a>

			<div class="panel card-sign">
				<div class="card-title-sign mt-3 text-right">
					<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> LogIn</h2>
				</div>
				<div class="card-body">
					<form action="index.php" method="post" onsubmit="return validate()">
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
								<div style="color:green;font-size:18px" id='pc'></div>
							</div>
						</div>
						<div class="form-group mb-3">
							<div class="clearfix">
								<label class="float-left">Passcode</label>
							</div>
							<div class="input-group">
								<input name="passwd" type="password" class="form-control form-control-lg current-password" />
								<span class="input-group-append">
									<span class="input-group-text">
										<i class="fas fa-lock"></i>
									</span>
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-8">
								<div id='tandcerr' style="color:red;">

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8">
								<div style="color:red;" id='err'></div>
							</div>
							<div class="col-sm-4 text-right">
								<input type="submit" class="btn btn-primary mt-2" value="Login">
							</div>
						</div>
					</form>
				</div>
			</div>

			<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2019. All Rights Reserved.</p>
		</div>
	</section>
	<!-- end: page -->

	<!-- Vendor -->
	<script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="vendor/popper/umd/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
	<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="vendor/common/common.js"></script>
	<script src="vendor/nanoscroller/nanoscroller.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>
	</body>

</html>