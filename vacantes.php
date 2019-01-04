<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Nabe - Vacantes</title>
	<link rel="icon" type="image/x-icon" href="images/logo.png" />
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
		        $menu="vacantes";
		        include("navbar.php");
		    ?> 

			<section class="page_title cs gradientvertical-background s-py-25">
				<div class="container">
					<div class="row">
						<div class="divider-50"></div>
						<div class="col-md-12 text-center">
							<h1 class="">Vacantes</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Home</a>
								</li>
								<li class="breadcrumb-item active">
									Vacantes
								</li>
							</ol>
						</div>
						<div class="divider-50"></div>
					</div>
				</div>
			</section>


			<section class="pt-20 pb-30 s-py-md-75 s-py-lg-130 candidate-page">
				<div class="container">
					<div class="row">
						<div class=" col-sm-12 contact-header text-center animate" data-animation="pullDown">
							<h4>
								Envíanos tu CV
							</h4>
						</div>
						<form class="contact-form contact2 c-mb-20 animate" data-animation="pullUp" method="post" action="/">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
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
										<input type="text" aria-required="true" size="200" value="" name="text" id="text" class="form-control" placeholder="Puesto Solicitado">
									</div>
									<div class="col-c-mb-60 form-group">
										<input type="file" class="custom-file-input button" id="validatedCustomFile">
										<label class="custom-file-label" for="validatedCustomFile">Adjuntar CV en PDF</label>
									</div>
									<div class="row mt-1">
										<div class="col-sm-12">
											<div class="form-group text-right">
												<button type="submit" id="contact_form_submit" name="contact_submit" class="btn theme_button" style="margin-bottom: 20px;">Enviar</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group has-placeholder">
										<h4>ÁREAS DE TRABAJO</h4>
										<p>
											Revisa las vacantes que tenemos actualmente para ti, da clic <a href="#">aquí</a>
										</p>
										<p>
											Si alguna es de tu interés o deseas estar en nuestra base de datos, envíanos tu currículum vitae al correo electrónico: 
											<b><a href="mailto:soluciones.empresariales@nabese.com">soluciones.empresariales@nabese.com</a></b>
										</p>
										<ul class="list-styled">
											<li>
												Cosméticos
											</li>
											<li>
												Textil
											</li>
											<li>
												Madera
											</li>
											<li>
												Química
											</li>
											<li>
												Comercializadora
											</li>
											<li>
												Alimenticia
											</li>
											<li>
												Transportista / Automotriz
											</li>
											<li>
												Metalmecánica
											</li>
											<li>
												Aduana
											</li>
										</ul>
									</div>
								</div>
							</div>
						</form>
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


</body>

</html>