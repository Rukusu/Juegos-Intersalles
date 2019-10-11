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
		<link rel="stylesheet" href="../css/fancybox.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<style type="text/css">
			#mapasede{
				display: none;
				min-width: 240px;
				width: 100%;
			}
			.map{
				height: 300px !important;
				width: 100% !important;
			}
			@media screen and (min-width: 640px){
				#mapasede{
					width: 500px;
				}
			}
			@media screen and (min-width: 960px){
				#mapasede{
					width: 800px;
				}
				.map{
					height: 400px !important;
				}
			}
		</style>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyCBhkioqB-BcnWHSZC-rbwQduJ03lv9n44"></script>
		<script type="text/javascript" src="../js/gmaps.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		
	</head>
	<body>
		<?php include('header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">MAPAS Y SEDES</div>
		</div>
		<section class="wrapper">
			<div class="text">
			<?php
				$dbc = connect_bajio();
				$sql = 'SELECT DISTINCT tor_canchas.cancha_id,tor_canchas.cancha,tor_canchas.descripcion,tor_canchas.contacto,tor_canchas.responsable,tor_canchas.direccion,tor_canchas.latitud,tor_canchas.longitud,tor_deportes.deporte,tor_deportes.icono FROM tor_canchas
						INNER JOIN tor_deportes ON tor_canchas.deporte_id = tor_deportes.deporte_id
						WHERE tor_canchas.cancha_id<>5 AND tor_canchas.cancha_id<>16 AND tor_canchas.cancha_id<>18
						ORDER BY tor_deportes.deporte,tor_canchas.cancha';
				$result = @mysqli_query($sql);
				$deporte = '';
				while($r = @mysqli_fetch_array($result,MYSQLI_BOTH )){
					if($r['deporte'] != $deporte){
						if($deporte != '') echo '</blockquote><br>';
						$deporte = $r['deporte'];
						echo '<img src="images/'.$r['icono'].'_b.png" height="20" width="20"> <strong>'.utf8_encode($deporte).'</strong><br><br><blockquote>';
					}
					echo utf8_encode('<div class="imagen" style="background-image: url(images/cancha'.$r['cancha_id'].'.jpg);"></div><strong>'.$r['cancha'].'</strong><br>'.$r['direccion'].'<br>Responsable: '.$r['responsable'].'<br>Contacto: '.$r['contacto'].'<br><a href="#mapasede" class="fancybox showmap" data-id="'.$r['cancha_id'].'" data-lat="'.$r['latitud'].'" data-lon="'.$r['longitud'].'">Ver mapa</a><br><br><div class="clearfix"></div>');
				}
				echo '</blockquote>';
				@mysqli_close($dbc);
			?>
			</div>
		</section>
		<div id="mapasede">
			<div class="map" id="map"></div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				var map = new GMaps({
					div: '#map',
					lat: '21.152827487708752',
					lng: '-101.71100284583025',
					zoom: 17
				});
				$('.showmap').click(function(){
					id = $(this).attr('data-id');
					map.removeMarkers();
					map.setCenter($(this).attr('data-lat'), $(this).attr('data-lon'));
					map.setZoom(17);
					map.addMarker({
						lat: $(this).attr('data-lat'),
						lng: $(this).attr('data-lon')
					});
				});
			});
		</script>
		<?php include('footer.php'); ?>
	</body>
</html>