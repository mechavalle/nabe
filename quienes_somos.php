<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Nabe - Quiénes Somos</title>
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
			    $menu="quienessomos";
			    include("navbar.php");
			?> 

			<section class="page_title cs gradientvertical-background s-py-25">
				<div class="container">
					<div class="row">
						<div class="divider-50"></div>
						<div class="col-md-12 text-center">
							<h1 class="">Quiénes Somos</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./index.php">Home</a>
								</li>
								<li class="breadcrumb-item active">
									Quiénes Somos
								</li>
							</ol>
						</div>
						<div class="divider-50"></div>
					</div>
				</div>
			</section>

			<section class="ls about about-padge s-pt-30">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
							<div class="heading-about">
								<h2>23</h2>
								<br><br><br><br>
								<h4><font style="font-weight: bold; color: gray; margin-left: -160px;">Años de</font> <font style="font-weight: bold; color: #020246;">Experiencia</font></h4>
								<p>
									Somos una empresa de profesionales con 23 años de experiencia orientada a ofrecer soluciones integrales en Capital Humano, conformada por profesionales certificados, dedicados a satisfacer las necesidades específicas de nuestros clientes.
								</p>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
							<img src="images/person01.jpg" alt="person01.jpg">
						</div>
					</div>
				</div>
			</section>

			<section class="ls collapse-section about">
				<div class="row">
					<div class="col-lg-6">
						<div class="image_cover image_cover_left half-image">
						</div>
					</div>
					<div class="col-lg-6 collapse-table">
						<div class="contact-header collapse-header heading pt-30">
							<h4>
								<b>Nosotros</b>
							</h4>
						</div>
						<div id="accordion01" role="tablist">

							<div class="card-header" role="tab" id="collapse01_header">
								<h5>
									<a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
										Misión
									</a>
								</h5>
							</div>
							<div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
								<div class="card-body">
									Cumplir con las expectativas de servicio, calidad, mejora continua y competitividad de nuestros clientes, con estrategias de desarrollo de negocio para crecer de manera conjunta.
								</div>
							</div>

							<div class="card-header" role="tab" id="collapse02_header">
								<h5>
									<a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
										Visión
									</a>
								</h5>
							</div>
							<div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
								<div class="card-body">
									Ser una empresa líder, considerados como socios comerciales por nuestros clientes, contribuyendo en su cadena de suministro de Capital Humano, brindando un servicio integral, eficiente e innovador.S
								</div>
							</div>

							<div class="card-header" role="tab" id="collapse03_header">
								<h5>
									<a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
										Valores
									</a>
								</h5>
							</div>
							<div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
								<div class="card-body">
									Los principales valores de la marca son: responsabilidad, ética profesional, compromiso, lealtad, honorabilidad, transparencia, integridad, honestidad y entusiasmo.
								</div>
							</div>

							<div class="card-header" role="tab" id="collapse04_header">
								<h5>
									<a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
										Sucursales
									</a>
								</h5>
							</div>
							<div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
								<div class="card-body">
									Contamos con 4 sucursales en el país, las cuales están ubicadas en Estado de México, León Gto., Guadalajara y Monterrey, Corporativo en Ciudad de México.
								</div>
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


</body>

</html>