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
		<?php
			include('header_int.php');
			$dbc = connect_bajio();
		?>
		<div id="titulo">
			<div class="wrapper">PRONTUARIO</div>
		</div>
		
		<section class="wrapper" id="items">
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="?u=4">CANCÚN</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="?u=4">CANCÚN</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="?u=4">CANCÚN</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="?u=4">CANCÚN</a></div>
			<div class="clearfix"></div>
		</section>

		<?php	
			@mysqli_close($dbc);
			include('footer.php');
		?>
	</body>
</html>