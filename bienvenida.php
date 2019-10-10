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
		<title>XVIII Juegos Deportivos Interprepas 2019 </title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script src="../js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
	
	</head>
	<body>
		<?php include('header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">BIENVENIDA</div>
		</div>
		<section class="wrapper" style="margin-top: 20px;">
			<div class="text">
				Bienvenidos a los XXVI Juegos Lasallistas<br><br><br>
				<strong>PROGRAMA</strong><br><br>
				<div class="programa">
					<strong>13 de noviembre 2019</strong>
					<ul>
						<li>9:00 en adelante.  Entrega de gafetes en los Hoteles.</li>
											</ul>
					<strong>14 de noviembre 2019  </strong>
					<ul>
						<li>10:00 hrs. Ceremonia de Inauguración</li>
											</ul>
					<strong>noviembre 2019 </strong>
					<ul>
						<li>TBA. Ceremonia Eucarística</li>
					</ul>
					<strong>17 de noviembre 2019</strong>
					<ul>
						<li>17:00 hrs. Clausura en plaza La Salle</li>
					</ul>
									</div>
			</div>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>