<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('../core.php');
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
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
			mysqli_set_charset ( $dbc , "utf8mb4_unicode_ci" );
			if(!isset($_REQUEST['u'])){
		?>
		<div id="titulo">
			<div class="wrapper">UNIVERSIDADES PARTICIPANTES</div>
		</div>
		<section class="wrapper" id="items">
		
			<?php
				$sql = "SELECT delegacion_id, icono, imagen, nombre FROM tor_delegaciones";
				$result = mysqli_query($dbc,$sql);
				while($row = mysqli_fetch_assoc($result)){
					//$name = mb_convert_encoding($row['nombre'], "UTF-8", "auto");
					//$name = iconv('UTF-8','ASCII//TRANSLIT',);htmlspecialchars(utf8_encode(),ENT_QUOTES)
					echo '<div class="item" data-bg="'.$row['icono'].'" style="background-image: url(images/'.$row['imagen'].'.jpg);"><a href="?u='.$row['delegacion_id'].'"><b>La Salle</b><br>'.utf8_encode($row['nombre']).'</a></div>';
					printf ("\n");
				}
			?>
			<!--<div class="item" data-bg="uni_bajio" style="background-image: url(images/uni_bajio.jpg);"><a href="?u=10">BAJÍO</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="?u=4">CANCÚN</a></div>
			<div class="item" data-bg="uni_chihuahua" style="background-image: url(images/uni_chihuahua.jpg);"><a href="?u=11">CHIHUAHUA</a></div>
			<div class="item" data-bg="uni_cuernavaca" style="background-image: url(images/uni_cuernavaca.jpg);"><a href="?u=7">CUERNAVACA</a></div>
			<div class="item" data-bg="uni_laguna" style="background-image: url(images/uni_laguna.jpg);"><a href="?u=12">LAGUNA</a></div>
			<div class="item" data-bg="uni_morelia" style="background-image: url(images/uni_morelia.jpg);"><a href="?u=3">MORELIA</a></div>
			<div class="item" data-bg="uni_mexico" style="background-image: url(images/uni_mexico.jpg);"><a href="?u=1">MÉXICO</a></div>
			<div class="item" data-bg="uni_neza" style="background-image: url(images/uni_neza.jpg);"><a href="?u=8">NEZA</a></div>
			<div class="item" data-bg="uni_puebla" style="background-image: url(images/uni_puebla.jpg);"><a href="?u=2">PUEBLA</a></div>
			<div class="item" data-bg="uni_oaxaca" style="background-image: url(images/uni_oaxaca.jpg);"><a href="?u=5">OAXACA</a></div>
			<div class="item" data-bg="uni_pachuca" style="background-image: url(images/uni_pachuca.jpg);"><a href="?u=6">PACHUCA</a></div>
			<div class="item" data-bg="uni_saltillo" style="background-image: url(images/uni_saltillo.jpg);"><a href="?u=9">SALTILLO</a></div>-->
			<div class="clearfix"></div>
		</section>
		<?php
			}else{
				
				$_REQUEST['u'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['u']));
				$sql = 'SELECT delegacion_id,delegacion FROM tor_delegaciones WHERE delegacion_id='.$_REQUEST['u'];
				$result = @mysqli_query($dbc,$sql);
				if(@mysqli_num_rows($result) > 0){
					$r = @mysqli_fetch_array($result);
		?>
		<div id="titulo">
			<div class="wrapper"><?php echo utf8_encode($r['delegacion']); ?></div>
		</div>
		<section class="wrapper" id="items">
		<?php
					$sql = 'SELECT DISTINCT tor_deportes.deporte_id,tor_deportes.nombre,tor_deportes.imagen FROM tor_torneos
							INNER JOIN tor_equipos ON tor_torneos.deporte_id = tor_equipos.deporte_id AND tor_torneos.rama_id = tor_equipos.rama_id
							INNER JOIN tor_delegaciones ON tor_equipos.delegacion_id = tor_delegaciones.delegacion_id
							INNER JOIN tor_deportes ON tor_equipos.deporte_id = tor_deportes.deporte_id
							WHERE tor_delegaciones.delegacion_id='.$_REQUEST['u'].'
							ORDER BY tor_deportes.nombre';
					$result = @mysqli_query($dbc,$sql);
					while($r = @mysqli_fetch_array($result)){
		?>
			<div class="item" data-bg="<?php echo $r['imagen']; ?>" style="background-image: url(images/<?php echo $r['imagen']; ?>.jpg);"><a href="resultados.php?d=<?php echo $r['deporte_id']; ?>&u=<?php echo $_REQUEST['u']; ?>"><?php echo utf8_encode($r['nombre']); ?></a></div>
		<?php
					}
		?>
			<div class="clearfix"></div>
		</section>
		<?php
				}
				@mysqli_close($dbc);
			}
			include('footer.php');
		?>
	</body>
</html>