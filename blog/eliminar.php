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
		<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/hospitales.css">
		<link rel="stylesheet" type="text/css" href="../css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="../css/interior.css?<?php echo date('YmdHis'); ?>">
		
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		<script type="text/javascript" src="js/validation.js"></script>
	</head>
	<body>
		<!-- Initialize Quill editor -->
		<?php include('../header_int.php'); ?>
		<?php if (isset($_GET["id"])){ 
				$dbc = connect_bajio(); 
				mysqli_set_charset ( $dbc , "utf8" );
				$id = mysqli_real_escape_string($dbc, $_GET["id"]);
				$sql ="UPDATE tor_noticias SET publicado = '0' WHERE id = '".$id."'";
				@mysqli_query($dbc,$sql);
			}?>
		<div id="titulo">
			<div class="wrapper">EDITOR DE NOTICIAS</div>
		</div>
		<section class="wrapper" id="items" style="margin-top: 20px">
			<p>Noticia Eliminada</p>
		</section>
		

		
		<?php include('../footer.php'); ?>
	</body>
</html>