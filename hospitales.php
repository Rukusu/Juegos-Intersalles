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
		<title>XXVI Juegos Deportivos Universitarios Lasallistas 2019</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
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
					<button type="button">Descarga la guía</button> 
				</div>
				<div>
					<h2>Direcciones importantes</h2>
					<div style="width: 45%; display: inline-block; padding-left: 3%;">
						<strong>Universidad La Salle México<br>Unidad Condesa</strong><br>
						<p>Benjamín Franklin 45, Col. Condesa, Alc. Cuauhtémoc.</p>
						<b>5278 9500</b>
					</div>
					<div style="width: 45%; display: inline-block; padding-left: 3%;">
						<strong>Universidad La Salle México<br>Unidad Santa Lucía</strong><br>
						<p>Av. Tamaulipas 3, Zona Federal, 01357 Ciudad de México, CDMX.</p>
						<b>5602 1130</b>
					</div>
				</div>
				<hr style="color:blue;">
				<div>
					<h2 style="padding-bottom: 10px">Hospitales cerca de Unidad Condesa</h2>
					<div style="width: 45%; display: inline-block; padding-left: 3%;">
						<p><strong>-> Hospital Ángeles Mocel Torre de Consultorios</strong><br>
						Calle Gral. Juan Cano 107, San Miguel Chapultepec I Secc, 11850<br><b>55 5278 2600</b></p>
					</div>
					<div style="width: 45%; display: inline-block; padding-left: 3%;">
						<p><strong>Hospital Ángeles México</strong><br>
						Agrarismo 208, Escandón II Secc, 11800<br><b>55 5516 9900</b></p>
					</div>
					<br>
					<div style="width: 45%; display: inline-block; padding-left: 3%;">
						<p><strong>Torre Médica Dalinde</strong><br>
						Eje 3 Sur 218, Roma Sur, 06760<br><b>55 5265 2900</b></p>
					</div>
					<div style="width: 45%; display: inline-block; padding-left: 3%;">
						<p><strong>Nuevo Sanatorio Durango</strong><br>
						Durango 296 Col. Roma<br><b>5148 4646</b></p>
					</div>
					<br>
					<div style="width: 45%; display: inline-block; padding-left: 3%;">
						<p><strong>Hospital Ángeles Metropolitano</strong><br>
						Tlacotalpan 59, Roma Sur, 06760<br><b>55 5265 1800</b></p>
					</div>
				</div>
				<hr style="color:blue;">
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