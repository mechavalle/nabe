<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Nabe - Cursos</title>
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

<style type="text/css">
	.mx-30{  }
</style>

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
		        $menu="cursos";
		        include("navbar.php");
		    ?> 

			<section class="page_title cs gradientvertical-background s-py-25">
				<img src="images/plecanabe.png" style="width: 100%; height: 235px; position: absolute;">
				<div class="container">
					<div class="row">
						<div class="divider-50"></div>
						<div class="col-md-12 text-center">
							<h1 class="">Cursos</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Home</a>
								</li>
								<li class="breadcrumb-item active">
									Cursos
								</li>
							</ol>
						</div>
						<div class="divider-50"></div>
					</div>
				</div>
			</section>

			<section class="ls s-py-75 s-py-lg-130">
				<div class="container">
					<div class="d-none d-lg-block divider-30"></div>
					<div class="row">
						<div class="col-lg-6 animate" data-animation="fadeInLeft">
							<img src="images/2002.jpg" alt="">
						</div>
						<div class="single-service divider-30 col-lg-6 text-left animate" data-animation="fadeInRight">
							<div class="content mx-30">
								<h4 class="single-service">CURSOS</h4>
								<p>
									Nos preocupamos por la formación del personal, por eso tenemos programas de capacitación desarrollados a partir de las necesidades laborales de nuestros empleados. 
								</p>
								<p>
									Porque sabemos que la capacitación es una inversión que resulta en mejorar la productividad de tu empresa, realizamos evaluaciones a los cursos que se imparten para así ofrecer capacitación cada vez con mayor calidad y con mejores contenidos. 
								</p>
								<p>
									Todos nuestros instructores están registrados ante las autoridades laborales como: Secretaría de Trabajo y Previsión Social, Protección Civil, etc. 
								</p>
								<p>
									<b>Contáctanos para saber de los cursos y capacitaciones que tenemos disponibles.</b>
								</p>
							</div>
						</div>
						<div class="col-lg-12 animate" data-animation="fadeInCenter">
							<img src="images/cursos-01.png" alt="">
						</div>
						<div class="single-service divider-30 col-lg-6 text-left animate" data-animation="fadeInLeft">
							<div class="content mx-30 responsive">
								<p>
									<b>Algunos de los cursos que impartimos son:</b>
								</p>
								<ul class="list-styled">
									<li>
										Primeros auxilios.
									</li>
									<li>
										Recipientes sujetos a presión condiciones de seguridad.
									</li>
									<li>
										Manejo de materiales peligrosos.
									</li>
									<li>
										Manejo seguro de montacargas.
									</li>
									<li>
										Metodologías para la prevención de accidentes.
									</li>
									<li>
										Sistema de Gestión Ambiental.
									</li>
									<li>
										Manejo de estrés laboral.
									</li>
									<li>
										Desarrollo de habilidades.
									</li>
								</ul>
							</div>
						</div>
						<div class="single-service divider-30 col-lg-6 text-left animate" data-animation="fadeInRight">
							<div class="content">
								<ul class="list-styled">
									<p>&nbsp;</p>
									<li>
										Formación de auditores internos en sig. con base en ISO 9001:2008 e  
										<br>&nbsp; &nbsp; &nbsp; &nbsp; ISO 19011:2011
									</li>
									<li>
										Trabajos en alturas.
									</li>
									<li>
										Corte y soldadura – Trabajos en caliente.
									</li>
									<li>
										Formación de instructores.
									</li>
									<li>
										ISO 9001:2015 Sistemas de calidad – Requisitos.
									</li>
									<li>
										ISO 140001:2015 Sistemas de Gestión Ambiental – Requisitos.
									</li>
									<li>
										ISO 45001:2018 Sistemas de Gestión de la Seguridad y Salud en el 
										<br>&nbsp; &nbsp; &nbsp; &nbsp; Trabajo.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="d-none d-lg-block divider-20"></div>
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