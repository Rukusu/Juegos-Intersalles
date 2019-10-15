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
				<a class="reglamento" href="documents/Ajedrez.pdf" target="_blank"><img src="images/ico_ajedrez_b.png" height="20" width="20"> <strong>Ajedrez</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Atletismo.pdf" target="_blank"><img src="images/ico_atletismo_b.png" height="20" width="20"> <strong>Atletismo</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Baloncesto.pdf" target="_blank"><img src="images/ico_basquetbol_b.png" height="20" width="20"> <strong>Basquetbol</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Beisbol.pdf" target="_blank"><img src="images/ico_beisbol_b.png" height="20" width="20"> <strong>Beisbol</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Futbol_Rapido.pdf" target="_blank"><img src="images/ico_rapido_b.png" height="20" width="20"> <strong>Futbol Rápido</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Futbol_Asociacion.pdf" target="_blank"><img src="images/ico_futbol_b.png" height="20" width="20"> <strong>Futbol Soccer</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<!-- <a class="reglamento" href="#" target="_blank"><img src="images/ico_hockey_b.png" height="20" width="20"> <strong>Hockey sobre Pasto</strong><span></span></a> -->
				<a class="reglamento" href="documents/Taekwondo.pdf" target="_blank"><img src="images/ico_taekwondo_b.png" height="20" width="20"> <strong>Tae Kwon Do</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Tenis.pdf" target="_blank"><img src="images/ico_tenis_b.png" height="20" width="20"> <strong>Tenis</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Tocho_bandera.pdf" target="_blank"><img src="images/ico_americano_b.png" height="20" width="20"> <strong>Tocho Bandera</strong><span><img src="images/pdf_mini.gif"> Descargar</a></span>
				<a class="reglamento" href="documents/Voleibol.pdf" target="_blank"><img src="images/ico_voleibol_b.png" height="20" width="20"> <strong>Voleibol de Sala</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
			</div>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>