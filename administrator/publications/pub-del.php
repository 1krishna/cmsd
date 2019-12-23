<!doctype html>
<html class="fixed">

<head>
	<?php
	include_once 'includes/head.php';
	?>
	
	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">


	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="vendor/animate/animate.css">

	<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
	<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
	<link rel="stylesheet" href="vendor/select2/css/select2.css" />
	<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
	<link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
	<link rel="stylesheet" href="vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
	<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
	<link rel="stylesheet" href="vendor/dropzone/basic.css" />
	<link rel="stylesheet" href="vendor/dropzone/dropzone.css" />
	<link rel="stylesheet" href="vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
	<link rel="stylesheet" href="vendor/summernote/summernote.css" />
	<link rel="stylesheet" href="vendor/codemirror/lib/codemirror.css" />
	<link rel="stylesheet" href="vendor/codemirror/theme/monokai.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
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
				<?php
				$pub = "SELECT * from `cmsd_publications` order by `pub_year` ";
				$pub = mysqli_query($conn, $pub);
				?>
				<!-- start: page -->
				<div class="row">
					<div class="col">
						<section class="card">
							<header class="card-header">
								<h2 class="card-title">Update/Delete Publication</h2>
							</header>
							<div class="card-body">
								<table class="table table-bordered table-striped mb-0" id="datatable-default">
									<thead>
										<tr>
											<th>Publication Title</th>
											<th>View</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										
										while ($row = mysqli_fetch_assoc($pub)) {
											// echo $pub;
											?>
											<tr data-item-id="1">
												<td><?php echo urldecode($row['pub_title']); ?></td>
												<td>
													<form action="pub-add.php" method="post">
														<input type="hidden" value="<?php echo urldecode($row['pub_id']); ?>" name="pub_id" id='pub_id'>
														<button class="btn btn-primary">Update
															<i class="fa fa-pencil-square"></i>
														</button>
													</form>
												</td>
												<td class="actions">
													<button class="btn btn-primary" id='del' onclick="del(<?php echo $row['pub_id']; ?>);">Delete
														<i class="fa fa-trash"></i>
													</button>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<!-- end: page -->
						</section>
					</div>
				</div>
				<!-- end: page -->
			</section><!-- end: page -->
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
	<script src="vendor/select2/js/select2.js"></script>
	<script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
	<script src="vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	<script src="vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
	<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
	<script src="vendor/fuelux/js/spinner.js"></script>
	<script src="vendor/dropzone/dropzone.js"></script>
	<script src="vendor/bootstrap-markdown/js/markdown.js"></script>
	<script src="vendor/bootstrap-markdown/js/to-markdown.js"></script>
	<script src="vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
	<script src="vendor/codemirror/lib/codemirror.js"></script>
	<script src="vendor/codemirror/addon/selection/active-line.js"></script>
	<script src="vendor/codemirror/addon/edit/matchbrackets.js"></script>
	<script src="vendor/codemirror/mode/javascript/javascript.js"></script>
	<script src="vendor/codemirror/mode/xml/xml.js"></script>
	<script src="vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
	<script src="vendor/codemirror/mode/css/css.js"></script>
	<script src="vendor/summernote/summernote.js"></script>
	<script src="vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
	<script src="vendor/ios7-switch/ios7-switch.js"></script>

	<!-- datatable js -->
	<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
	<script src="js/examples/examples.datatables.default.js"></script>
	<script src="js/examples/examples.datatables.row.with.details.js"></script>
	<script src="js/examples/examples.datatables.tabletools.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<!-- Examples -->
	<script src="js/examples/examples.dashboard.js"></script>
	<script>
		function del(id) {
			$(document).ready(function() {
				
				if (confirm("Confirm Delete")) {
					$.ajax({
						type: 'POST',
						dataType: 'text',
						url: 'pub.php',
						data: {
							pub_id: id,
							del_pub: '',
						},
						success: function(data) {
							alert(data);
						},
						failure: function() {
							alert('Publication Deletion Failed');
						}
					});
					location.reload();
				}
			});
		}
	</script>

</body>

</html>