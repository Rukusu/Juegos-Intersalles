<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	if (is_null($_SESSION['id'])){
			header("Location: lgin.php");
			die();
	}
	if ( $_SESSION['ldate'] < time()){
		header("Location: tout.php");
			die();
	}	
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
		<title>XXVI Juegos Deportivos Universitarios Lasallistas 2019</title>
		<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="../css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		<script type="text/javascript" src="js/validation.js"></script>
	</head>
	<body>
		<!-- Initialize Quill editor -->
		<?php include('../header_int.php'); ?>
		
		<div id="titulo">
			<div class="wrapper">EDITOR DE NOTICIAS</div>
		</div>
		<section class="wrapper" id="items" style="margin-top: 20px">
		<h2><a href="editor.php" style="color: blue;">Crear nueva noticia</a></h2>
			<?php 
				$dbc = connect_bajio(); 
				$sql = 'SELECT id,titulo FROM tor_noticias WHERE publicado = 1';
				$result = @mysqli_query($dbc,$sql);
				while ($row = mysqli_fetch_assoc($result)){
					echo "<hr>";
					echo "<h2>".$row['titulo']."</h2>";
					echo "<p><a style=\"color: blue;\" href=\"editor.php?id=".$row['id']."\">editar</a>";
					echo " | ";
					echo "<a style=\"color: red;\" href=\"eliminar.php?id=".$row['id']."\">borrar</a></p>";
					echo "<hr>";
				}
			?>
		</section>
		

		
		<?php include('../footer.php'); ?>
	</body>
</html>