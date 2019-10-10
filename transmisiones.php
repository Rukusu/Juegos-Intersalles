<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('../core.php');
	function formatoFecha($fecha){
		$fecha = empty($fecha)?date('Y-m-d'):$fecha;
		$dias = array('Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado');
		$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		$dd = explode('-',$fecha);
		$ts   = mktime(0,0,0,$dd[1],$dd[2],$dd[0]);
		return $dias[date('w',$ts)].' '.date('d',$ts).' '.$meses[date('n',$ts)-1];
	}
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
		<link rel="stylesheet" href="../css/fancybox.css">
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
			<div class="wrapper">TRANSMISIONES EN VIVO</div>
		</div>
		<section class="wrapper" style="margin-top: 20px;">
			<div class="text">
			<?php
				$dbc = connect_bajio();
				$sql = 'SELECT tor_deportes.icono,tor_deportes.deporte,tor_ramas.rama,tor_partidos.local,tor_partidos.visitante,tor_canchas.cancha,tor_partidos.fecha,tor_partidos.hora,tor_transmisiones.url FROM tor_transmisiones
						INNER JOIN tor_partidos ON tor_transmisiones.partido_id = tor_partidos.partido_id
						INNER JOIN tor_torneos ON tor_partidos.torneo_id = tor_torneos.torneo_id
						INNER JOIN tor_canchas ON tor_partidos.cancha_id = tor_canchas.cancha_id
						INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
						INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
						ORDER BY tor_partidos.fecha ASC,tor_partidos.hora ASC';
				$trans = @mysqli_query($dbc,$sql);
				while($t = @mysqli_fetch_array($trans, MYSQLI_BOTH )){
					$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$t['local'];
					$local = @mysqli_query($dbc,$sql);
					$l = @mysqli_fetch_array($local, MYSQLI_BOTH );
					$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$t['visitante'];
					$visitante = @mysqli_query($dbc,$sql);
					$v = @mysqli_fetch_array($visitante, MYSQLI_BOTH );
			?>
				<div class="icono" style="background-image: url(images/<?php echo $t['icono']; ?>.png);"></div>
				<?php
					echo utf8_encode($t['deporte'].' '.$t['rama'].' - <strong>'.$l['equipo'].'</strong> VS <strong>'.$v['equipo'].'</strong><br>'.formatoFecha($t['fecha']).', '.convertHour($t['hora']).', '.$t['cancha'].'<br>');
					if($t['url'] != '#') echo '<a href="'.$t['url'].'" target="_blank">Ver transmisi&oacute;n</a>';
				?><br><br>
				<div class="clearfix"></div>
			<?php
				}
				@mysqli_close($dbc);
			?>
			</div>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>