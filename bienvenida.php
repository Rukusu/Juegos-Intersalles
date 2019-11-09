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
		<title>XXVI Juegos Deportivos 2019 </title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
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
				La Universidad La Salle CDMX les da la más cordial bienvenida a esta justa deportiva que nos permitirá compartir cuatro intensos días de emoción, alegría, euforia y la fraternidad que nos define como familia Lasallista. ¡Volemos muy alto! Porque Grandes Cosas son Posibles. Indivisa Manent <br><br><br>
				<strong>PROGRAMA</strong><br><br>
				<div class="programa">
					<strong>13 de noviembre 2019</strong>
					<ul>
						<li>9:00 en adelante.  Entrega de gafetes (Condesa).</li>
											</ul>
					<strong>14 de noviembre 2019  </strong>
					<ul>
						<li>10:00 hrs. Ceremonia de Inauguración (Sta. Lucía)</li>
											</ul>
					<strong>15 de noviembre 2019 </strong>
					<ul>
						<li>18:00 hrs. Ceremonia Eucarística (Auditorio Adrián Gibert)</li>
					</ul>
					<strong>17 de noviembre 2019</strong>
					<ul>
						<li>17:00 hrs. Clausura (Plaza La Salle)</li>
					</ul>
									</div>
			</div>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>