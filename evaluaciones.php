<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Nabe - Evaluaciones</title>
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
        		$menu="evaluaciones";
        		include("navbar.php");
    		?> 

			<section class="page_title cs gradientvertical-background s-py-25">
				<img src="images/pleca.png" style="width: 100%; height: 235px; position: absolute;">
				<div class="container">
					<div class="row">
						<div class="divider-50"></div>
						<div class="col-md-12 text-center">
							<h1 class="">Evaluaciones</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./index.php">Home</a>
								</li>
								<li class="breadcrumb-item active">
									Evaluaciones
								</li>
							</ol>
						</div>
						<div class="divider-50"></div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-50 s-pb-75 c-gutter-60 c-mb-lg-50 service-item">
				<div class="container">
					<div class="row">
						<div class="d-none d-lg-block divider-80"></div>

						<div class="col-md-6 col-sm-4">
							<div class="icon-box text-center">
								<div class="icon-styled fs-56">
									<a href="#"><img style="max-width: 200px;" src="images/test.png"></a>
								</div>
								<h6>
									<b><a href="·">EVALUACIONES PSICOMÉTRICAS 
										<BR>ON LINE
										<BR>52 COMPETENCIAS LABORALES
									</a></b>
								</h6>
							</div>
						</div>
						<!-- .col-* -->

						<div class="col-md-6 col-sm-4">
							<div class="icon-box text-center">
								<div class="icon-styled fs-56">
									<a href="estudio_socioeconomico.php"><img style="max-width: 200px;" src="images/finance.png"></a>
								</div>

								<h6>
									<b><a href="estudio_socioeconomico.php">ESTUDIOS SOCIOECONÓMICOS</a></b>
								</h6>
							</div>
						</div>
						<!-- .col-* -->

						<div class="col-md-6 col-sm-4">
							<div class="icon-box text-center">
								<div class="icon-styled fs-56">
									<a href="seguridad_higiene.php"><img style="max-width: 200px;" src="images/safety.png"></a>
								</div>
								<h6>
									<b><a href="seguridad_higiene.php">SEGURIDAD E HIGIENE</a></b>
								</h6>
							</div>
						</div>
						<!-- .col-* -->

						<div class="col-md-6 col-sm-4">

							<div class="icon-box text-center">
								<div class="icon-styled fs-56">
									<a href="clima_laboral.php"><img style="max-width: 200px;" src="images/team.png"></a>
								</div>
								<h6>
									<b><a href="clima_laboral.php">CLIMA LABORAL</a></b>
								</h6>
							</div>
						</div>
						<!-- .col-* -->

						<div class="d-none d-lg-block divider-20"></div>
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