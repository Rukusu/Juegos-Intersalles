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
		<link type="image/x-icon" href="favicon.png" rel="icon">
		<link type="image/x-icon" href="favicon.png" rel="shortcut icon">
		<title>XXVI Juegos Deportivos Universitarios Lasallistas 2019</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/hospitales.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
			</head>
	<body>
		<?php include('header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">HOSPITALIDAD</div>
		</div>
		<section class="wrapper" style="margin-top: 20px;">
			<div class="text">
				<div>
					<h1>Guía de Hospitalidad</h1>
					<button type="button" class="btn_blue" onclick="window.location.href='documents/hospitalidad_juegos.pdf'">Descarga la guía</button> 
				</div>
				<div>
					<h2>Direcciones importantes</h2>
					<div class="text_columns">
						<p><strong>Universidad La Salle México<br>Unidad Condesa</strong><br>
						Benjamín Franklin 45, Col. Condesa, Alc. Cuauhtémoc.<br><b>55 5278 9500</b></p>
					</div>
					<div class="text_columns">
						<p><strong>Universidad La Salle México<br>Unidad Santa Lucía</strong><br>
						Av. Tamaulipas 3, Zona Federal, 01357 Ciudad de México, CDMX.<br><b>55 5602 1130</b></p>
					</div>
				</div>
				<hr class="division_line">
				<div>
					<h2 style="padding-bottom: 10px">Hospitales cerca de Unidad Condesa</h2>
					<div class="text_columns">
						<p><strong>Hospital Ángeles Mocel Torre de Consultorios</strong><br>
						Gral. Juan Cano 107, San Miguel Chapultepec I Secc, 11850<br><b>55 5278 2600</b></p>
					</div>
					<div class="text_columns">
						<p><strong>Hospital Ángeles México</strong><br>
						Agrarismo 208, Escandón II Secc, 11800<br><b>55 5516 9900</b></p>
					</div>
					<br>
					<div class="text_columns">
						<p><strong>Torre Médica Dalinde</strong><br>
						Eje 3 Sur 218, Roma Sur, 06760<br><b>55 5265 2900</b></p>
					</div>
					<div class="text_columns">
						<p><strong>Nuevo Sanatorio Durango</strong><br>
						Durango 296 Col. Roma<br><b>5148 4646</b></p>
					</div>
					<br>
					<div class="text_columns">
						<p><strong>Hospital Ángeles Metropolitano</strong><br>
						Tlacotalpan 59, Roma Sur, 06760<br><b>55 5265 1800</b></p>
					</div>
				</div>
				<hr class="division_line">
				<div>
					<h2 style="padding-bottom: 10px">Hospitales cerca de Unidad Santa Lucía</h2>
					<div class="text_columns">
						<p><strong>Hospital Bité Médica</strong><br>
						Prolongación Paseo de la Reforma 19, Paseo de las Lomas, 01330<br><b>55 5292 9700</b></p>
					</div>
					<div class="text_columns">
						<p><strong>Centro Médico ABC Campus Santa Fe</strong><br>
						Av. Carlos Fernández Graef 154, Contadero, 05330<br><b>55 5516 9900</b></p>
					</div>
					<br>
					<div class="text_columns">
						<p><strong>Hospital General Dr. Enrique Cabrera</strong><br>
						Prol. 5 de mayo 3170, Ex hacienda de Tarango, 01620<br><b>55 1285 7108</b></p>
					</div>
				</div>
				<hr class="division_line">
				<div>
					<h2 style="padding-bottom: 10px">Transporte</h2>
					<div class="text_with_img">
						<p>La estación del metro más cercana a La Salle, Unidad Condesa, es Patriotismo, de la Línea 9 (línea café). También puedes llegar en metrobús, en la estación De la Salle de la Línea 3 (línea morada).</p>
					</div>
					<div class="img_with_text">
						<img src="images/hospitalidad/metro.png" alt="Metro" style="margin-left: auto; margin-right: auto; display: block;">
					</div>
				</div>
				<hr class="division_line">
				<div>
					<h2 style="padding-bottom: 10px">Seguridad</h2>
					<div class="text_with_img">
						<p>En La Salle México contamos con el programa Universidad Segura. Ve al link www.universidad-segura.lasalle.mxy revisa las guías en caso de contingencia.</p>
						<p>Durante un siniestro o contingencia, sigue las instrucciones de los brigadistas de Protección Civil.</p>
					</div>
					<div class="img_with_text">
						<img src="images/hospitalidad/Seguridad.png" alt="Metro" style="margin-left: auto; margin-right: auto; display: block;">
					</div>
				</div>
			</div>
			<!--<div class="text">
				En caso de requerir atención médica durante los XVIII Juegos Deportivos Interprepas 2019, sugerimos revisar los convenios de seguro que cada Universidad tienen para la selección de una Institución de Salud. Los Hospitales que se lista a continuación, son a los que nuestra Casa de Estudios regularmente recurre.<br><br>
				
				<p>Responsable Fisioterapia Universidad La Salle Laguna</p>
				<p>Lic. Mario Luna 871 136 9579</p>
				<div class="imagen" style="background-image: url(images/medica.jpg);"></div>
				<strong>SANATORIO ESPAÑOL</strong><br>
				Francisco I. Madero No. 59<br>
				Col. Centro,<br>
				Torreón, Coahuila<br>
				Tel: 8717053333<br><br>
				
				<div class="imagen" style="background-image: url(images/angeles.jpg);"></div>
				<strong>HOSPITAL ÁNGELES</strong><br>
				Paseo del Tecnológico No. 909<br>
				Col. Residencial Tecnológico<br>
				Torreón, Coahuila<br>
				Tel: 8717290400<br><br>
				
				<div class="imagen" style="background-image: url(images/pablo.jpg);"></div>
				<strong>SANATORIO SAN JOSÉ</strong><br>
				Javier Mina 245<br>
				Col. Centro<br>
				Gómez Palacio, Durango<br>
				Tel: 8717051910<br><br>
				
				<div class="clearfix"></div>
			</div>-->
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>