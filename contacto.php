<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Nabe - Contacto</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->

			<?php  include("header.php"); ?>

			<?php  
		        $menu="contacto";
		        include("navbar.php");
		    ?> 

			<section class="page_title cs gradientvertical-background s-py-25">
				<div class="container">
					<div class="row">
						<div class="divider-50"></div>
						<div class="col-md-12 text-center">
							<h1 class="">Contacto</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./index.php">Home</a>
								</li>
								<li class="breadcrumb-item active">
									Contacto
								</li>
							</ol>
						</div>
						<div class="divider-50"></div>
					</div>
				</div>
			</section>

			<section class="lss-overlay s-map-light s-py-130 c-gutter-60 container-px-30">
				<div class="container ">
					<div class="row">
						<div class="divider-30 d-none d-xl-block"></div>
						<div class="col-lg-8 offset-lg-2 animate" data-animation="slideDown">
							<form class="black-bg contact-form c-mb-20 c-gutter-20" method="post" action="/">

								<div class="row">
									<div class="col-sm-6">
										<div class="ds form-group has-placeholder">
											<label for="name">Full Name
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="ds form-group has-placeholder">
											<label for="email">Email address
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="ds form-group has-placeholder">
											<label for="phone">Phone
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="ds form-group has-placeholder">
											<label for="subject">Subject
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="ds form-group has-placeholder">
											<label for="message">Message</label>
											<textarea aria-required="true" rows="6" cols="4" name="message" id="message" class="form-control" placeholder="Message"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12 text-center mt-10">
										<div class="form-group">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn-color">
												Send Now
											</button>
										</div>
									</div>
								</div>

							</form>
						</div>
						<!--.col-* -->
						<div class="divider-30 d-none d-xl-block"></div>
					</div>
				</div>
			</section>

			<section class="ds section_gradient gradient-background py-50">
				<div class="container">
					<div class="row">
						<div class="col-md-4 text-center animate" data-animation="pullUp">
							<div class="info-block">
								<p style="font-weight: lighter;">
									Llámanos
								</p>
								<h5>
									<b>(55) 5524 4666</b>
								</h5>
							</div>
						</div>
						<div class="col-md-4 text-center animate" data-animation="pullUp">
							<div class="info-block">
								<p style="font-weight: lighter;">
									Escríbenos
								</p>
								<h5>
									<b>soluciones.empresariales@nabese.com</b>
								</h5>
							</div>
						</div>
						<div class="col-md-4 text-center animate" data-animation="pullUp">
							<div class="info-block">
								<p style="font-weight: lighter;">
									Horario de Atención
								</p>
								<h5>
									<b>9:00 a 19:00 hrs.</b>
								</h5>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<?php require("footer.php"); ?>

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?"></script>

</body>

</html>