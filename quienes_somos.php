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

<style type="text/css">
	.card-body { text-align: justify; }
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
			    $menu="quienessomos";
			    include("navbar.php");
			?> 

			<section class="page_title cs gradientvertical-background s-py-25">
				<img src="images/plecanabe.png" style="width: 100%; height: 235px; position: absolute;">
				<div class="container">
					<div class="row">
						<div class="divider-50"></div>
						<div class="col-md-12 text-center">
							<h1 class="">¿Quiénes Somos?</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./index.php">Home</a>
								</li>
								<li class="breadcrumb-item active">
									¿Quiénes Somos?
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
								<div class="row" style="margin-right: 10px !important; margin-left: 10px !important;">
                                	<div class="column-1">
                                    	<h2>23</h2>
                                	</div>
                                	<div class="column-1">
										<h4 style="line-height: 0em; margin-right: 18px;">
											<font style="font-weight: bold; color: gray;">Años de</font> 
											<font style="font-weight: bold; color: #030345;">experiencia</font>
										</h4>
									</div>
								</div>
									<div class="column-1">
										<p>
											Somos una empresa de profesionales con 23 años de experiencia <font style="font-weight: bold; font-size: 18px;">orientada a ofrecer soluciones integrales en Capital Humano</font>, conformada por profesionales certificados, dedicados a satisfacer las necesidades específicas de nuestros clientes.
										</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
							<img src="images/person.jpg" alt="person01.jpg">
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
									Ser una empresa líder considerada como socia comercial por nuestros clientes, contribuyendo en su cadena de suministro de Capital Humano, brindando un servicio integral, eficiente e innovador.
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
									Los principales valores de la empresa son: 
									<li type="square" style="color: #020246;"><font style="font-size: 16px; color: #7f7f7f;">Responsabilidad</font></li>
									<li type="square" style="color: #020246;"><font style="font-size: 16px; color: #7f7f7f;">Lealtad</font></li>
									<li type="square" style="color: #020246;"><font style="font-size: 16px; color: #7f7f7f;">Honestidad</font></li> 
									<li type="square" style="color: #020246;"><font style="font-size: 16px; color: #7f7f7f;">Respeto</font></li>
									<li type="square" style="color: #020246;"><font style="font-size: 16px; color: #7f7f7f;">Integridad</font></li>
									<li type="square" style="color: #020246;"><font style="font-size: 16px; color: #7f7f7f;">Entusiasmo</font></li>
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
									<p>
										Contamos con 3 sucursales en el país y un corporativo, los cuales están ubicados en: 
									</p>
									<p>
										CORPORATIVO
										<br>
										Nicolás San Juan #1109 Colonia del Valle, Alcaldía Benito Juárez
										C.P. 03100, CDMX
										<br>
										Teléfono: 5524 – 4666
									</p>
									<p>
										ESTADO DE MÉXICO
										<br>
										Av. 16 de Septiembre #101 Int. 203 Col. Cuautitlán
										C.P. 54800, EDOMÉX
										<br>
										Teléfono: 6843 – 9933
									<p>
										LEÓN
										<br>
										Av. Plan de San Luis #101 Int. 601 Col. El Cuesillo
										C.P. 37266, León, Gto.
										<br>
										Teléfono: 7771 – 9881
									</p>
									<p>
										MONTERREY
										<br>
										Mariano Matamoros #925 Col. Centro 
										C.P. 64000, Monterrey, N.L.
										<br>
										Teléfono: 2261 - 1370
									</p>
									</p>
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