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
			<div class="item" data-bg="prontuario/quesadillas" style="background-image: url(images/prontuario/quesadillas.jpg);"><a href="#" data-toggle="modal" data-target="#Modal01"><p class="cuadro">Quesadillas</p></a></div>
			<div class="item" data-bg="prontuario/bellas_artes" style="background-image: url(images/prontuario/bellas_artes.jpg);"><a href="#" data-toggle="modal" data-target="#Modal02"><p class="cuadro">Palacio de Bellas Artes</p></a></div>
			<div class="item" data-bg="prontuario/chilaquiles" style="background-image: url(images/prontuario/chilaquiles.jpg);"><a href="#" data-toggle="modal" data-target="#Modal03"><p class="cuadro">Tortas de tamal y chilaquiles</p></a></div>
			<div class="item" data-bg="prontuario/tacos" style="background-image: url(images/prontuario/tacos.jpg);"><a href="#" data-toggle="modal" data-target="#Modal04"><p class="cuadro">Tacos al pastor</p></a></div>
			<div class="item" data-bg="prontuario/luchas" style="background-image: url(images/prontuario/luchas.jpg);"><a href="#" data-toggle="modal" data-target="#Modal05"><p class="cuadro">Luchas</p></a></div>
			<div class="item" data-bg="prontuario/manifestacion" style="background-image: url(images/prontuario/manifestacion.jpg);"><a href="#" data-toggle="modal" data-target="#Modal06"><p class="cuadro">Marchas / manifestaciones</p></a></div>
			<div class="item" data-bg="prontuario/metro" style="background-image: url(images/prontuario/metro.jpg);"><a href="#" data-toggle="modal" data-target="#Modal07"><p class="cuadro">Metro</p></a></div>
			<div class="item" data-bg="prontuario/bicis" style="background-image: url(images/prontuario/bicis.jpg);"><a href="#" data-toggle="modal" data-target="#Modal08"><p class="cuadro">Ecobici y scooters</p></a></div>
			<div class="item" data-bg="prontuario/edificios_nombre_extrano" style="background-image: url(images/prontuario/edificios_nombre_extrano.jpg);"><a href="#" data-toggle="modal" data-target="#Modal09"><p class="cuadro">Edificios con nombres MUY extraños</p></a></div>
			<div class="item" data-bg="prontuario/trafico" style="background-image: url(images/prontuario/trafico.jpg);"><a href="#" data-toggle="modal" data-target="#Modal10"><p class="cuadro">"Tráfico"</p></a></div>
			<div class="item" data-bg="prontuario/sismo" style="background-image: url(images/prontuario/sismo.jpg);"><a href="#" data-toggle="modal" data-target="#Modal11"><p class="cuadro">Alerta sísmica</p></a></div>
			<div class="item" data-bg="prontuario/chapultepec" style="background-image: url(images/prontuario/chapultepec.jpg);"><a href="#" data-toggle="modal" data-target="#Modal12"><p class="cuadro">Chapultepec</p></a></div>
			<div class="item" data-bg="prontuario/reforma" style="background-image: url(images/prontuario/reforma.jpg);"><a href="#" data-toggle="modal" data-target="#Modal13"><p class="cuadro">Paseo de la Reforma</p></a></div>
			<div class="item" data-bg="prontuario/zocalo" style="background-image: url(images/prontuario/zocalo.jpg);"><a href="#" data-toggle="modal" data-target="#Modal14"><p class="cuadro">Plancha del Zócalo</p></a></div>
			<div class="item" data-bg="prontuario/trajineras" style="background-image: url(images/prontuario/trajineras.jpg);"><a href="#" data-toggle="modal" data-target="#Modal15"><p class="cuadro">Las trajineras de Xochimilco</p></a></div>
			<div class="item" data-bg="prontuario/museos" style="background-image: url(images/prontuario/museos.jpg);"><a href="#" data-toggle="modal" data-target="#Modal16"><p class="cuadro">Museos</p></a></div>
			<div class="item" data-bg="prontuario/rascacielos" style="background-image: url(images/prontuario/rascacielos.jpg);"><a href="#" data-toggle="modal" data-target="#Modal17"><p class="cuadro">Rascacielos</p></a></div>
			<div class="item" data-bg="prontuario/angel" style="background-image: url(images/prontuario/angel.jpg);"><a href="#" data-toggle="modal" data-target="#Modal18"><p class="cuadro">Ángel de la Independencia</p></a></div>
			<div class="item" data-bg="prontuario/barrio" style="background-image: url(images/prontuario/barrio.jpg);"><a href="#" data-toggle="modal" data-target="#Modal19"><p class="cuadro">Barrio Universitario</p></a></div>
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
						<img src="images/prontuario/quesadillas.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Las quesadillas pueden ir sin queso.</b></h4>
						<p class="cuerpo">Si sales a turistear date la oportunidad de probar una quesadilla, pero ojo, que no te extrañe que la doñita del puesto te pregunte “¿con o sin queso?” En la CDMX pueden o no llevar queso. Este tema lleva años siendo polémica y no pretendemos tener la última palabra, solo disfrutar de un ancestral platillo. Pero sí, sí son quesadillas. </p>
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
						<img src="images/prontuario/bellas_artes.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Nadie le dice México a la Ciudad de México</b></h4>
						<p class="cuerpo">Esta es una de las formas más fáciles de identificar a los de provincia que visitan la Ciudad (esa y el tono cantadito muy diferente al de los capitalinos). Si quieres pasar desapercibido entre los chilangos puedes referirte a la Ciudad de México simplemente como la Ciudad; ya ni de chiste pienses en decirle “defe”.</p>
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
						<img src="images/prontuario/chilaquiles.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tortas de tamal, chilaquiles o prácticamente de lo que sea.</b></h4>
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
						<img src="images/prontuario/tacos.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Tacos al pastor </b></h4>
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
						<img src="images/prontuario/metro.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">En el Metro puedes comprar el mundo por 10 pesitos</b></h4>
						<p class="cuerpo">Todos dicen “¡Ash! Se subió otra vez el vendedor al vagón”, pero nadie dice “gracias por traerme a la venta el artículo de novedad para el niño, para la niña, y por menos de diez pesos”. Además de que viajas tan apretado y sudado como un taco de canasta, el metro se caracteriza porque puedes comprar prácticamente de todo por 10 pesos: audífonos, dulces, paletas, martillos, plumones, “o bien si lo prefieres una rica golosina” y todo lo que te puedas imaginar.  </p>
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
						<img src="images/prontuario/bicis.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Cualquier calle es buena para estacionar una bici o scooter</b></h4>
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
						<img src="images/prontuario/edificios_nombre_extrano.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Edificios con nombres MUY extraños</b></h4>
						<p class="cuerpo">Nadie, absolutamente nadie: Estela de Luz // Los chilangos: La Sauvicrema. El conjunto de edificios en la CDMX son una obra maestra de la arquitectura y la ingeniería. Pero algunas veces terminan llamándolos por lo que parecen más que por su nombre original. Ahora que estarás en Santa Lucía podrás ver “la Lavadora” (Calakmul), “el Dorito” (Torre Virreyes) o “el Pantalón” (Torre Arcos Bosques).</p>
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
						<img src="images/prontuario/trafico.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">El mayor miedo del capitalino: “el tráfico”</b></h4>
						<p class="cuerpo">A menos que sea domingo a las 10 de la mañana, prácticamente todo el día es hora pico en algún lugar de la ciudad. Si eres de los que usan waze o alguna app para el tránsito, prepárate ver retrasos de al menos 20 minutos. Lo bueno: hay vendedores entre autos con los que puedes comprarte tu jugo de naranja, una manzana, botana, prácticamente para desayunar de camino a tu destino. Ese sistema no lo tiene ni Obama.</p>
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
						<img src="images/prontuario/sismo.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Guom, guom, guom. Alerta sísmica</b></h4>
						<p class="cuerpo">Algo que hace única a la CDMX son sus casi 12 mil altavoces conectados al Sistema de Alerta Sísmica. Si escuchas su peculiar sonido, (que por cierto tiene la voz de Superman), no te asustes; recuerda que existen protocolos de seguridad para actuar en caso de temblor. Sí, ese que incluye el bolillo pa´l susto.</p>
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
						<img src="images/prontuario/chapultepec.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Chapultepec, el pulmón de la ciudad</b></h4>
						<p class="cuerpo">Más que las ardillas mutantes que se encuentran en sus alrededores, lo que distingue al Bosque de Chapultepec son sus con casi 4 mil km2, sus museos y lagos. Este popular bosque es nuestro pulmón y es incluso más grande que Central Park… ¡y a menos de 10 minutos de La Salle!</p>
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
						<img src="images/prontuario/reforma.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">La bellísima Avenida Paseo de la Reforma</b></h4>
						<p class="cuerpo">Los rumores son ciertos: esta, una de las principales vías de la Ciudad, se cierra los domingos para andar en bici, patines y todo vehículo con llantas. Y entre semana, más que transitarla en sus metrobuses de dos pisos, camina por ella, no te arrepentirás. </p>
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
						<img src="images/prontuario/zocalo.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Siempre hay algo que ver en el Zócalo</b></h4>
						<p class="cuerpo">Algunos ubican más la Plancha del Zócalo, o Plaza de la Constitución, porque ahí se realiza el Grito de Independencia. Pero quizá también la recuerden por éxitos recientes como la Feria del Libro o las ofrendas que se encuentran año con año. No olvides que aquí se encuentra el Km 0, de donde inician todas las autopistas. </p>
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
						<img src="images/prontuario/trajineras.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Las trajineras en Xochimilco</b></h4>
						<p class="cuerpo">Corre el rumor de que este septiembre no tembló porque los dioses aceptaron el sacrificio del chico que murió en el lago de Xochimilco. Lo que sí es cierto es que es de lo más lindo ir a una trajinera y armar una fiesta con medida. Allá hay mariachis, botanas y hasta puedes adoptar a un ajolote para ayudar a preservar su especie. </p>
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
						<img src="images/prontuario/museos.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">CDMX, la ciudad de los museos</b></h4>
						<p class="cuerpo">Desde el Museo de la Cerveza hasta el Museo del Juguete Antiguo, pasando por el de Antropología e Historia, hay alrededor de 185 museos en la Ciudad de México. No hay excusa para quedarse en el hotel y explorar las maravillas de la ciudad.</p>
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
						<img src="images/prontuario/rascacielos.jpg" alt="Smiley face" class="imagen"  height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Los edificios más altos del país están aquí</b></h4>
						<p class="cuerpo">Por su ubicación, tanto Unidad Condesa como Unidad Santa Lucía están cerca de los edificios más altos de México. En Paseo de la Reforma está Chapultepec Uno (241m) y Torre Reforma (246m); en Santa Fe puedes ver el Hotel Presidente Continental (141m) o Torre Santa Fe (145m).</p>
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
						<img src="images/prontuario/angel.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">Vámonos al Ángel, vámonos al Ángel </b></h4>
						<p class="cuerpo">A los mexicanos no nos faltan motivos para hacer fiesta y a los chilangos nos sobran para irnos al Ángel de la Independencia. La Victoria Alada, su nombre oficial, ha sido testigo de festejos cada que gana la selección… Hasta cuando Leonardo DiCaprio ganó el Oscar nos fuimos al Ángel.</p>
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
						<img src="images/prontuario/barrio.jpg" alt="Smiley face" class="imagen" height="350" width="350"> 
						<div class="alinear_texto">
						<h4 class="modal-title margen_titulo"><b class="titulo">El Barrio Universitario</b></h4>
						<p class="cuerpo">Cuando estés en la Condesa te darás cuenta de la gran cantidad de establecimientos y la cultura artística que se vive en las calles alrededor de La Salle. Por ejemplo, en las paredes externas de la Universidad hay un espacio para exposiciones llamada Coordenada Azul.</p>
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
						<h4 class="modal-title margen_titulo"><b class="titulo">Aquí están los grandes estadios para cada Deporte</b></h4>
						<p class="cuerpo">En la CDMX existen diversos recintos para disfrutar de todos los deportes. No te puedes perder la oportunidad de visitar el Estadio Azteca, o el Estadio Olímpico Universitario. También puedes visitar la Arena Ciudad de México, la cual tiene calidad mundial y ha sido testigo de juegos de NBA, de lucha libre y más. </p>
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