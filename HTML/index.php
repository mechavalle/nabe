<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Invenir - HR Recruiting Agency HTML Template</title>
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

	<?php  include("header.php"); ?>

	<?php  
        $menu="solucionesrh";
        include("navbar.php");
    ?> 

<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
			<section class="page_slider cs text-center">
				<img src="images/slide01.jpg" alt="">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="intro_layers_wrapper">
								<div class="intro_layers">
									<div class="intro_layer" data-animation="fadeInLeft">
										<h3 class="intro_before_featured_word">
											TE PODEMOS AYUDAR A ENCONTRAR
										</h3>
									</div>
									<div class="intro_layer" data-animation="fadeInRight">
										<h2 class="text-uppercase intro_featured_word">
											EL PUESTO INDICADO
										</h2>
									</div>
									<div class="intro_layer" data-animation="fadeIn">
										<div class="d-inline-block">
											<button type="button" class="btn btn-outline-maincolor center-block" data-animation="fadeIn">SUSCRÍBETE A NUESTRAS NOTICIAS</button>
										</div>
									</div>
								</div>
								<!-- eof .intro_layers -->
							</div>
							<!-- eof .intro_layers_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container-fluid -->
			</section>

			<section class="ds slider-bottomline d-none d-xl-block py-50">
				<div class="container">
					<div class="row">
						<div class="col-md-4 text-center">
							<div class="info-block">
								<p>
									LLÁMANOS
								</p>
								<h3>
									+123-456-7890
								</h3>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="info-block">
								<p>
									ESCRÍBENOS
								</p>
								<h3>
									example@example.com
								</h3>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="info-block">
								<p>
									HORARIO DE ATENCIÓN
								</p>
								<h3>
									Daily 9:00-20:00
								</h3>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls about s-pt-25">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
							<div class="heading-about">
								<h2>25</h2>
								<br><br><br><br>
								<h4><font style="font-weight: bold; color: gray; margin-left: -160px;">Años de</font> <font style="font-weight: bold; color: navy;">Experiencia</font></h4>
								<p>
									We believe in the value that our functions add to a business. We feel that this specialist part of HR is often unrecognised for its contribution to the profitability and success of a business.
								</p>
							</div>
							<div class="icons-list">
								<ul class="list-bordered">
									<li class=" media media-body">
										<i class="teaser-icon fa fa-rocket"></i>
										<h4 class="title">
											<span>638</span> Companies We Helped
										</h4>
									</li>
									<li class="media media-body">
										<i class="teaser-icon fa fa-briefcase"></i>
										<h4 class="title">
											<span>12</span> Corporate Programs
										</h4>
									</li>
									<li class="media media-body">
										<i class="teaser-icon fa fa-graduation-cap"></i>
										<h4 class="title">
											<span>28</span> Trainings Courses
										</h4>
									</li>
									<li class="border-bottom-0 media media-body">
										<i class="teaser-icon fa fa-user"></i>
										<h4 class="title">
											<span>125</span> Strategic Partners
										</h4>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
							<img src="images/person01.jpg" alt="person01.jpg">
						</div>
					</div>
				</div>
			</section>

			<section class="pt-20 pb-10 s-py-lg-130 main_contact_form">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 contact-header heading text-center">
							<h4>ENVÍANOS TU CV</h4>
						</div>
						<div class="px-30 ds-form">
							<form class="ds contact-form c-mb-20">
								<div class="row">
									<div class="col-sm-6">
										<div class="col-c-mb-60 form-group has-placeholder">
											<label for="name">Full Name
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="200" value="" name="your-name" id="name" class="form-control" placeholder="Nombre">
										</div>
										<div class="col-c-mb-60 form-group has-placeholder">
											<label for="text">Phone number
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="200" value="" name="text" id="text" class="form-control" placeholder="Teléfono">
										</div>
										<div class="col-c-mb-60 form-group has-placeholder">
											<label for="email">Email address
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="200" value="" name="your-email" id="email" class="form-control" placeholder="Email">
										</div>
										<div class="col-c-mb-60 form-group has-placeholder">
											<label for="text">Job sector
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="200" value="" name="text" id="text" class="form-control" placeholder="Puesto solicitado">
										</div>
										<div class="col-c-mb-60 form-group">
											<input type="file" class="custom-file-input button" id="validatedCustomFile">
											<label class="custom-file-label" for="validatedCustomFile">Adjuntar CV en PDF</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="message">Comment</label>
											<textarea aria-required="true" rows="6" cols="40" name="message" id="message" class="form-control" placeholder="Comentarios adicionales"></textarea>

										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group text-center">
										<button type="submit" id="contact_form_submit" name="contact_submit" class="button">Enviar</button>
									</div>
								</div>
							</form>
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