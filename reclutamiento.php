<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Nabe - Clima Laboral</title>
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
		        $menu="servicios";
		        include("navbar.php");
		    ?> 

			<section class="page_title cs gradientvertical-background s-py-25">
				<img src="images/plecanabe.png" style="width: 100%; height: 235px; position: absolute;">
				<div class="container">
					<div class="row">
						<div class="divider-50"></div>
						<div class="col-md-12 text-center">
							<h1 class="">Servicios</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Home</a>
								</li>
								<li class="breadcrumb-item active">
									<a href="servicios.php">Servicios</a>
								</li>
								<li class="breadcrumb-item active">
									Reclutamiento Especializado
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
							<img src="images/ReclutamEspecializ.jpg" alt="">
							<img src="images/ventajas2-01.jpg" alt="">
						</div>
						<div class="single-service divider-30 col-lg-6 text-left animate" data-animation="fadeInRight">
							<div class="content mx-30">
								<h4 class="single-service">RECLUTAMIENTO ESPECIALIZADO</h4>
								<p>
									Las Tecnologías de Información ocupan una parte fundamental en cualquier corporación que pretende sobresalir en los mercados tan competidos actualmente.
								</p>
								<p>
									La necesidad de implementar las Tecnologías de Información y personal especializado que cubra esta demanda la encontramos en todos los procesos de la organización ya que busca optimizar su respuesta evitando:
								</p>
								<ul class="list-styled" style="font-weight: bold;">
									<li>
										Atraso en entrega de proyectos.
									</li>
									<li>
										Pérdida de clientes.
									</li>
									<li>
										Estancamiento financiero.
									</li>
									<li> 
										Procesos obsoletos.
									</li>
									<li>
										Baja competitividad.
									</li>
								</ul>
								<p>
									Entendemos la necesidad de nuestros clientes en el área, nuestro servicio nos permite   garantizar un reclutamiento especializado que le permitirá contar con personal experto en Tecnologías con las competencias técnicas y perfil asociado a la cultura de la organización. 
								</p>
								<h5><b>OFRECEMOS</b></h5>
								<ul class="list-styled">
									<li>
										Garantía en costos y tiempos para la obtención de Capital 
										<br>&nbsp; &nbsp; &nbsp; &nbsp; Humano.
									</li>
									<li>
										Estrategias de reclutamiento efectivas para la obtención de 
										<br>&nbsp; &nbsp; &nbsp; &nbsp; buenos resultados.
									</li>
									<li>
										Servicio de calidad y trato personalizado a cada uno de  
										<br>&nbsp; &nbsp; &nbsp; &nbsp; nuestros clientes. 
									</li>
									<li>
										Respuesta en un tiempo de 24 a 72 horas hábiles a partir del 
										<br>&nbsp; &nbsp; &nbsp; &nbsp; requerimiento solicitado. 
									</li>
									<li>
										Apoyo en la elaboración y análisis de sus perfiles, para cubrir 
										<br>&nbsp; &nbsp; &nbsp; &nbsp; las vacantes de su empresa de acuerdo a las características  
										<br>&nbsp; &nbsp; &nbsp; &nbsp; que busca. 
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