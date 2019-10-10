<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('../core.php');
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="theme-color" content="#001e61">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
		<link type="image/x-icon" href="../favicon.ico" rel="icon">
		<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon">
		<title>XVIII Juegos Deportivos 2019 </title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script src="../js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
	</head>
	<body>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<?php
			include('header_int.php');
			$dbc = connect_bajio();
		?>
		<div id="titulo">
			<div class="wrapper">CHILANGONARIO</div>
		</div>
		
		<section class="wrapper" id="items" style="margin-top: 20px">
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal01"><p style="font-size: 24px;">Torta de tamal</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal02"><p style="font-size: 24px;">Torta de chilaquiles</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal03"><p style="font-size: 24px;">Tacos al pastor</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal04"><p style="font-size: 24px;">Luchas</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal05"><p style="font-size: 24px;">Marchas / manifestaciones</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal06"><p style="font-size: 24px;">Metro</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal07"><p style="font-size: 24px;">Ecobici y scooters</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal08"><p style="font-size: 24px;">"Tráfico"</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal09"><p style="font-size: 24px;">Chapultepec</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal10"><p style="font-size: 24px;">Museos</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal11"><p style="font-size: 24px;">Rascacielos</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal12"><p style="font-size: 24px;">Edificios con nombres MUY extraños</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal13"><p style="font-size: 24px;">Ángel de la Independencia</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal14"><p style="font-size: 24px;">Paseo de la Reforma</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal15"><p style="font-size: 24px;">Palacio de Bellas Artes</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal16"><p style="font-size: 24px;">Plancha del Zócalo</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal17"><p style="font-size: 24px;">Barrio Universitario</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal18"><p style="font-size: 24px;">Las trajineras de Xochimilco</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal19"><p style="font-size: 24px;">Alerta sísmica</p></a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal20"><p style="font-size: 24px;">Estadios para todos los deportes</p></a></div>
			<div class="clearfix"></div>
		</section>
		
		<!-- Modals -->
		<div id="Modal01" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal02" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>	
		<div id="Modal03" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal04" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal05" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal06" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal07" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal08" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal09 " class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal10" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal11" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal12" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal13" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal14" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal15" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal16" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal17" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal18" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal19" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal20" class="modal fade" role="dialog">
			<div class="modal-dialog" style="max-width: 900px; width: auto">

			<!-- Modal content-->
				<div class="modal-content" style="background-image: url(images/prontuario_fondo.jpg);">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" style="vertical-align: middle; float: left;" height="350" width="350"> 
						<div style="display: inline; vertical-align: middle;">
						<h4 class="modal-title" style="margin-left: 45%;"><b style="color: white; font-size: 40px;">Tortas de tamal y chilaquiles</b></h4>
						<p style="color: white; font-size: 20px; height: 250px; margin-left: 45%;">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php	
			@mysqli_close($dbc);
			include('footer.php');
		?>
	</body>
</html>