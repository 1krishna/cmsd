<!doctype html>
<html class="fixed">

<head>
	<?php
	include_once 'includes/head.php';
	?>
	
	
	<?php
	if (isset($_POST['pub_id'])) {
		$mem = "SELECT * FROM `cmsd_publications` where pub_id=" . $_POST['pub_id'];
		$mem = mysqli_query($conn, $mem);
		$pub_row = mysqli_fetch_assoc($mem);
	}
	?>
	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="vendor/animate/animate.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
	<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
	<link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="vendor/morris/morris.css" />

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
	<section class="body">

		<!-- start: header -->
		<?php include_once 'includes/header.php'; ?>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">

				<div class="sidebar-header">
					<div class="sidebar-title">
						Navigation
					</div>
					<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<?php include 'includes/nav-bar.php'; ?>

			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Publications</h2>
				</header>

				<!-- start: page -->
				<div class="row">
					<div class="col">
						<section class="card">
							<header class="card-header">
								<h2 class="card-title"><?php if (isset($_POST['pub_id'])) {
															echo "Update";
														} else {
															echo "Add";
														} ?> Publication</h2>
							</header>
							<div class="card-body">
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="control-label text-lg-right pt-2" for="inputDefault">Title<span class="required">*</span></label>
										<input type="text" class="form-control" value="<?php if (isset($_POST['pub_id'])) {
																							echo urldecode($pub_row['pub_title']);
																						} ?>" id="pub_title">
										<div id="title_err" style="color:red"></div>
									</div>
									<div class="col-lg-6">
										<label class="control-label text-lg-right pt-2" for="inputDefault">Year<span class="required">*</span></label>
										<input type="text" class="form-control" value="<?php if (isset($_POST['pub_id'])) {
																							echo urldecode($pub_row['pub_year']);
																						} ?>" id="pub_year">
										<div id="year_err" style="color:red"></div>
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-lg-8"></div>
									<div class="col-lg-4">
										<?php
										if (isset($_POST['pub_id'])) {
											echo "<button class='btn btn-primary' id='update' style='width:100%;'>Update Publication</button>";
										} else {
											echo "<button class='btn btn-primary' id='add' style='width:100%;'>Add Publication</button>";
										}
										?>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<?php if (isset($_POST['pub_id'])) {
					// echo $_POST['pub_id'];
					?>

					<input type="hidden" value="<?php echo $_POST['pub_id']; ?>" id='publ_id'>
				<?php } ?>
				<br><br>
				
				<!-- end: page -->
			</section>
		</div>
	</section>

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

	<!-- Specific Page Vendor -->
	<script src="vendor/jquery-ui/jquery-ui.js"></script>
	<script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
	<script src="vendor/jquery-appear/jquery-appear.js"></script>
	<script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
	<script src="vendor/flot/jquery.flot.js"></script>
	<script src="vendor/flot.tooltip/flot.tooltip.js"></script>
	<script src="vendor/flot/jquery.flot.pie.js"></script>
	<script src="vendor/flot/jquery.flot.categories.js"></script>
	<script src="vendor/flot/jquery.flot.resize.js"></script>
	<script src="vendor/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="vendor/raphael/raphael.js"></script>
	<script src="vendor/morris/morris.js"></script>
	<script src="vendor/gauge/gauge.js"></script>
	<script src="vendor/snap.svg/snap.svg.js"></script>
	<script src="vendor/liquid-meter/liquid.meter.js"></script>
	<script src="vendor/jqvmap/jquery.vmap.js"></script>
	<script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
	<script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
	<script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
	<script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
	<script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
	<script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
	<script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
	<script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<!-- Examples -->
	<script src="js/examples/examples.dashboard.js"></script>
	<script>
		$(document).ready(function() {
			$('#add').click(function() {
				var pub_title = $('#pub_title').val();
				var pub_year = $('#pub_year').val();				
		

				var ret = true;
				document.getElementById("title_err").innerHTML = "";
				document.getElementById("year_err").innerHTML = "";
			

				if (pub_title == "") {
					document.getElementById("title_err").innerHTML = "Title Cannot Be Empty!";
					ret = false;
				}

				
				if (pub_year == '' || parseInt(pub_year) < parseInt('1976')) {
					document.getElementById("year_err").innerHTML = "Enter a Valid Publishing Year!";
					ret = false;
				}


				if (ret == false) {
					return false;
				}


				getrequest("pub.php",
					 "&pub_title=" + pub_title + "&pub_year=" + pub_year +
					"&add_pub=''", "pub-del.php");

			});
			$('#update').click(function() {
				var pub_title = $('#pub_title').val();
				var pub_year = $('#pub_year').val();
				var pub_id = $('#publ_id').val();

				
		
				var ret = true;
				document.getElementById("title_err").innerHTML = "";
				document.getElementById("year_err").innerHTML = "";
				
				if (pub_title == "") {
					document.getElementById("title_err").innerHTML = "Title Cannot Be Empty!";
					ret = false;
				}

				if (pub_year == '' || parseInt(pub_year) < parseInt('1976')) {
					document.getElementById("year_err").innerHTML = "Enter a Valid Publishing Year!";
					ret = false;
				}



				getrequest("pub.php",
					"&pub_title=" + pub_title + "&pub_year=" + pub_year +
					"&pub_id=" + pub_id  +
					"&upd_pub=''", "pub-del.php");

			});
		});
	</script>

</body>

</html>