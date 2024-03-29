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
		<title>XXVI Juegos Deportivos Lasallistas 2019</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/fancybox.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyCBhkioqB-BcnWHSZC-rbwQduJ03lv9n44"></script>
		<script type="text/javascript" src="../js/gmaps.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-21294178-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-21294178-1');
		</script>
	</head>
	<body>
		<?php include('header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">REGLAMENTOS</div>
		</div>
		<section class="wrapper" style="margin-top: 20px;">
			<div class="text">
				<a class="reglamento" href="documents/Estatutos.pdf" target="_blank"><strong>Estatutos</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
				<a class="reglamento" href="documents/Reglamento_General.pdf" target="_blank"><strong>Reglamento_General</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
				<a class="reglamento" href="documents/AJEDREZ.pdf" target="_blank"><img src="images/ico_chess.png" height="20" width="20"> <strong>Ajedrez</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/BALONCESTO.pdf" target="_blank"><img src="images/ico_basquet.png" height="20" width="20"> <strong>Basquetbol</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/FUTBOL_RAPIDO.pdf" target="_blank"><img src="images/ico_futfast.png" height="20" width="20"> <strong>Futbol Rápido</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/SOCCER.pdf" target="_blank"><img src="images/ico_futsoccer.png" height="20" width="20"> <strong>Futbol Soccer</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<!-- <a class="reglamento" href="#" target="_blank"><img src="images/ico_hockey_b.png" height="20" width="20"> <strong>Hockey sobre Pasto</strong><span></span></a> -->
				<a class="reglamento" href="documents/TAEKWONDO.pdf" target="_blank"><img src="images/ico_tae.png" height="20" width="20"> <strong>Tae Kwon Do</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/TENIS.pdf" target="_blank"><img src="images/ico_tennis.png" height="20" width="20"> <strong>Tenis</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/TOCHO_BANDERA.pdf" target="_blank"><img src="images/ico_tocho.png" height="20" width="20"> <strong>Tocho Bandera</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/VOLEIBOL.pdf" target="_blank"><img src="images/ico_volei.png" height="20" width="20"> <strong>Voleibol de Sala</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
				<!--<a class="reglamento" href="#" target="_blank"><img src="images/ico_natacion.png" height="20" width="20"> <strong>Natación</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>-->
				<a class="reglamento" href="documents/CROSSFIT.pdf" target="_blank"><img src="images/ico_crossfit.png" height="20" width="20"> <strong>Crossfit</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/HANDBALL.pdf" target="_blank"><img src="images/ico_handball.png" height="20" width="20"> <strong>Handball</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
			</div>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>