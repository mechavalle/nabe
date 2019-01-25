<?php

$csolucionesrh="";
$cquienessomos="";
$cservicios="";
$cevaluaciones="";
$ccursos="";
$cclientes="";
$cvacantes="";
$ccontacto="";

switch($menu)
    {
    case "solucionesrh": $csolucionesrh="class='active'"; break;
    case "quienessomos": $cquienessomos="class='active'"; break;
    case "servicios": $cservicios="class='active'"; break;
    case "evaluaciones": $cevaluaciones="class='active'"; break;
    case "cursos": $ccursos="class='active'"; break;
    case "clientes": $cclientes="class='active'"; break;
    case "vacantes": $cvacantes="class='active'"; break;
    case "contacto": $ccontacto="class='active'"; break;
    }

?>

<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
	<header class="page_header ls s-bordertop nav-narrow justify-nav-center text-center">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-xl-12">
					<div class="nav-wrap">
						<!-- main nav start -->
						<nav class="top-nav">
							<ul class="nav sf-menu">
								<li <?php echo $cquienessomos; ?>>
									<a href="quienes_somos.php">¿Quiénes somos?</a>
								</li>
								<!-- eof quiénes_somos -->

								<!-- servicios -->
								<li <?php echo $cservicios; ?>>
									<a href="servicios.php">Servicios</a>
								</li>
								<!-- eof servicios -->

								<li <?php echo $cevaluaciones; ?>><a href="evaluaciones.php">Evaluaciones</a></li>

								<li <?php echo $ccursos; ?>>
									<a href="cursos.php">Cursos</a>
								</li>
								<!-- eof cursos -->

								<!-- clientes -->
								<li <?php echo $cclientes; ?>>
									<a href="clientes.php">Clientes</a>
								</li>
								<!-- eof clientes -->

								<li <?php echo $cvacantes; ?>><a href="vacantes.php">Vacantes</a></li>	

								<!-- contacts -->
								<li <?php echo $ccontacto; ?>>
									<a href="contacto.php">Contacto</a>
								</li>
								<!-- eof contacts -->

							</ul>
						</nav>
						<!-- eof main nav -->
					</div>
				</div>
			</div>
		</div>

		<!-- header toggler -->

		<span class="toggle_menu">
			<span></span>
		</span>

	</header>