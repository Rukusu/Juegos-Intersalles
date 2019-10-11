<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('core.php');
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="theme-color" content="#001e61">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
		<link type="image/x-icon" href="../favicon.ico" rel="icon">
		<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon">
		<title>XXVI Juegos Deportivos Lasallistas 2019</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" href="css/prontuario.css">
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
			<div class="item" data-bg="prontuario/chilaquiles" style="background-image: url(images/prontuario/chilaquiles.jpg);"><a href="#" data-toggle="modal" data-target="#Modal01"><p class="cuadro">Tortas de tamal y chilaquiles</p></a></div>
			<div class="item" data-bg="prontuario/quesadillas" style="background-image: url(images/prontuario/quesadillas.jpg);"><a href="#" data-toggle="modal" data-target="#Modal02"><p class="cuadro">Quesadillas</p></a></div>
			<div class="item" data-bg="prontuario/tacos" style="background-image: url(images/prontuario/tacos.jpg);"><a href="#" data-toggle="modal" data-target="#Modal03"><p class="cuadro">Tacos al pastor</p></a></div>
			<div class="item" data-bg="prontuario/luchas" style="background-image: url(images/prontuario/luchas.jpg);"><a href="#" data-toggle="modal" data-target="#Modal04"><p class="cuadro">Luchas</p></a></div>
			<div class="item" data-bg="prontuario/manifestacion" style="background-image: url(images/prontuario/manifestacion.jpg);"><a href="#" data-toggle="modal" data-target="#Modal05"><p class="cuadro">Marchas / manifestaciones</p></a></div>
			<div class="item" data-bg="prontuario/metro" style="background-image: url(images/prontuario/metro.jpg);"><a href="#" data-toggle="modal" data-target="#Modal06"><p class="cuadro">Metro</p></a></div>
			<div class="item" data-bg="prontuario/bicis" style="background-image: url(images/prontuario/bicis.jpg);"><a href="#" data-toggle="modal" data-target="#Modal07"><p class="cuadro">Ecobici y scooters</p></a></div>
			<div class="item" data-bg="prontuario/trafico" style="background-image: url(images/prontuario/trafico.jpg);"><a href="#" data-toggle="modal" data-target="#Modal08"><p class="cuadro">"Tráfico"</p></a></div>
			<div class="item" data-bg="prontuario/chapultepec" style="background-image: url(images/prontuario/chapultepec.jpg);"><a href="#" data-toggle="modal" data-target="#Modal09"><p class="cuadro">Chapultepec</p></a></div>
			<div class="item" data-bg="prontuario/museos" style="background-image: url(images/prontuario/museos.jpg);"><a href="#" data-toggle="modal" data-target="#Modal10"><p class="cuadro">Museos</p></a></div>
			<div class="item" data-bg="prontuario/rascacielos" style="background-image: url(images/prontuario/rascacielos.jpg);"><a href="#" data-toggle="modal" data-target="#Modal11"><p class="cuadro">Rascacielos</p></a></div>
			<div class="item" data-bg="prontuario/edificios_nombre_extrano" style="background-image: url(images/prontuario/edificios_nombre_extrano.jpg);"><a href="#" data-toggle="modal" data-target="#Modal12"><p class="cuadro">Edificios con nombres MUY extraños</p></a></div>
			<div class="item" data-bg="prontuario/angel" style="background-image: url(images/prontuario/angel.jpg);"><a href="#" data-toggle="modal" data-target="#Modal13"><p class="cuadro">Ángel de la Independencia</p></a></div>
			<div class="item" data-bg="prontuario/reforma" style="background-image: url(images/prontuario/reforma.jpg);"><a href="#" data-toggle="modal" data-target="#Modal14"><p class="cuadro">Paseo de la Reforma</p></a></div>
			<div class="item" data-bg="prontuario/bellas_artes" style="background-image: url(images/prontuario/bellas_artes.jpg);"><a href="#" data-toggle="modal" data-target="#Modal15"><p class="cuadro">Palacio de Bellas Artes</p></a></div>
			<div class="item" data-bg="prontuario/zocalo" style="background-image: url(images/prontuario/zocalo.jpg);"><a href="#" data-toggle="modal" data-target="#Modal16"><p class="cuadro">Plancha del Zócalo</p></a></div>
			<div class="item" data-bg="prontuario/barrio" style="background-image: url(images/prontuario/barrio.jpg);"><a href="#" data-toggle="modal" data-target="#Modal17"><p class="cuadro">Barrio Universitario</p></a></div>
			<div class="item" data-bg="prontuario/trajineras" style="background-image: url(images/prontuario/trajineras.jpg);"><a href="#" data-toggle="modal" data-target="#Modal18"><p class="cuadro">Las trajineras de Xochimilco</p></a></div>
			<div class="item" data-bg="prontuario/sismo" style="background-image: url(images/prontuario/sismo.jpg);"><a href="#" data-toggle="modal" data-target="#Modal19"><p class="cuadro">Alerta sísmica</p></a></div>
			<div class="item" data-bg="prontuario/estadio" style="background-image: url(images/prontuario/estadio.jpg);"><a href="#" data-toggle="modal" data-target="#Modal20"><p class="cuadro">Estadios para todos los deportes</p></a></div>
			<div class="clearfix"></div>
		</section>
		
		<!-- Modals -->
		<div id="Modal01" class="modal fade" role="dialog">
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/chilaquiles.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/quesadillas.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Las quesadillas pueden ir sin queso</b></h4>
						<p class="cuerpo">Si sales a turistear date la oportunidad de probar una quesadilla, pero ojo, que no te extrañe que doña pelos te pregunte “¿con o sin queso?” En la CDMX pueden o no llevar queso. Este tema lleva años siendo polémica y no pretendemos tener la última palabra, solo disfrutar de un ancestral platillo. Pero sí, sí son quesadillas. </p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tacos al pastor de mi corazón</b></h4>
						<p class="cuerpo">Aunque los tacos son prácticamente el idioma que se habla en todo el país, los taquitos al pastor se sienten muy chilangos. Puedes encontrarlos prácticamente en cualquier esquina y en el corazón de todos los citadinos. </p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/luchas.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Lucharaaaaán a dos de tres caídas sin límite de tiempo</b></h4>
						<p class="cuerpo">La Lucha Libre se vive en los mejores recintos de la república, pero nada como asistir a una función en la catedral de la lucha libre, la Arena Coliseo o en la Arena México. Solo ahí descubrirás si realmente perteneces al bando técnico, eres tan ñero como un rudo o incluso hasta perteneces a los exóticos.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/manifestacion.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Marchas / manifestaciones</b></h4>
						<p class="cuerpo">Ármate de paciencia si te agarra una manifestación. Aquí en la Ciudad motivos sobran para salir a las calles y aunque muchas veces se exige justicia social, otras basta que gane el Oscar Leonardo DiCaprio para el típico “vámonos al Ángel” y hacer más lento el tránsito en Paseo de la Reforma.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/metro.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">¿Es cierto todo eso que dicen del Metro?</b></h4>
						<p class="cuerpo">Cuando no hay mucha gente, ambos son medios de transporte sumamente efectivos que conectan norte, sur, oriente y poniente. Pero si te subes en hora pico, te sentirás tan apretado como en una lata de sardina y terminarás tan sudado como un taco de canasta.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/bicis.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">¿Quién dejó su bici a mitad de la calle?</b></h4>
						<p class="cuerpo">Con tanto caos y tanta contaminación, a veces ni el auto ni el transporte público se nos antojan. Por eso no te sorprendas si encuentras en la calle algún scooter o bicicleta abandonada, es parte de los nuevos medios de transporte que llegaron a la capital para ayudar a la movilidad y también al medio ambiente. Si quieres usar una de estas, descarga las aplicaciones.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/trafico.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
						</div>
						</span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal09" class="modal fade" role="dialog">
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/chapultepec.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/museos.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/rascacielos.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/edificios_nombre_extrano.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/angel.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/reforma.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/bellas_artes.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/zocalo.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/barrio.jpg" alt="Smiley face" class="imagen"  height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/trajineras.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/sismo.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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
			<div class="modal-dialog ventana">

			<!-- Modal content-->
				<div class="modal-content fondo">
					<!--
					<div class="modal-header" style="text-align: center;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>-->
					<div class="modal-body">
						<span>
						<img src="images/prontuario/estadio.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal y chilaquiles</b></h4>
						<p class="cuerpo">Decía uno de los fundadores de la antigua México Tenochtitlan que "todo cabe en un bolillo sabiéndolo acomodar". Esa tradición de los chilangos aplica para tamales, chilaquiles y prácticamente cualquier alimento. Ya un visionario hasta ha probado la torta de tacos al pastor.</p>
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