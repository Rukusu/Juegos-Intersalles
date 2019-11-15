<?php
	header("Content-Type: text/html; ");
	session_start();
	include('core.php');
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
		</head>
	<body>
		<?php
			include('header_int.php');
			$dbc = connect_bajio();
			mysqli_set_charset ( $dbc , "utf8" );
			if(!isset($_REQUEST['d'])){
		?>
		<div id="titulo">
			<div class="wrapper">ROL DE JUEGOS Y RESULTADOS</div>
		</div>
		<section class="wrapper" id="items" style="margin-top: 20px;">
			<?php
				$sql = "SELECT deporte_id, imagen, nombre, icono FROM tor_deportes WHERE Activo = 1";
				$result = @mysqli_query($dbc,$sql);
				while($row = mysqli_fetch_assoc($result)){
					printf ("<div class=\"item\" data-bg=\"".$row['imagen']."\" style=\"background-image: url(images/".$row['imagen'].");\"><a href=\"?d=".$row['deporte_id']."\"><img src=\"images/".$row['icono'].".png\" alt=\"%s\" style=\"width: 80%% \"></a></div>",$row['nombre']);
					printf ("\n");
				}
				
			?>
			<div class="item" data-bg="fondo-est" style="background-image: url(images/fondo-est.jpg);"><a href="documents/Juegos_2019_ROLES-min.pdf"><img src="images/descarga.png" alt="descarga" style="width: 80% "></a></div>
			<!--
			<div class="item" data-bg="dep_ajedrez" style="background-image: url(images/dep_ajedrez.jpg);"><a href="?d=1">AJEDREZ</a></div>
			<div class="item" data-bg="dep_atletismo" style="background-image: url(images/dep_atletismo.jpg);"><a href="?d=2">ATLETISMO</a></div>
			<div class="item" data-bg="dep_basquetbol" style="background-image: url(images/dep_basquetbol.jpg);"><a href="?d=3">BASQUETBOL</a></div>
			<div class="item" data-bg="dep_beisbol" style="background-image: url(images/dep_beisbol.jpg);"><a href="?d=10">BEISBOL</a></div>
			<div class="item" data-bg="dep_rapido" style="background-image: url(images/dep_rapido.jpg);"><a href="?d=4">FUTBOL RÁPIDO</a></div>
			<div class="item" data-bg="dep_futbol" style="background-image: url(images/dep_futbol.jpg);"><a href="?d=5">FUTBOL SOCCER</a></div>
			<div class="item" data-bg="dep_hockey" style="background-image: url(images/dep_hockey.jpg);"><a href="?d=11">HOCKEY SOBRE PASTO</a></div>
			<div class="item" data-bg="dep_taekwondo" style="background-image: url(images/dep_taekwondo.jpg);"><a href="?d=8">TAE KWON DO</a></div>
			<div class="item" data-bg="dep_tenis" style="background-image: url(images/dep_tenis.jpg);"><a href="?d=6">TENIS</a></div>
			<div class="item" data-bg="dep_americano" style="background-image: url(images/dep_americano.jpg);"><a href="?d=9">TOCHO BANDERA</a></div>
			<div class="item" data-bg="dep_voleibol" style="background-image: url(images/dep_voleibol.jpg);"><a href="?d=7">VOLEIBOL</a></div>-->
			<div class="clearfix"></div>
		</section>
		<?php
			}elseif($_REQUEST['d'] == 14){
		?>
		<div id="titulo">
			<div class="wrapper">Cross Fit</div>
		</div>
		<section class="wrapper">
			<div class="text">
				<strong>PROGRAMA</strong><br><br>
				<div class="programa">
					<strong>Jueves 14 | GYM Polideportivo</strong>
					<ul>
						<li>13:00 Junta Técnica y Afloje</li>
						<li>14:00 Inicio de competencia</li>
					</ul>
					<strong>Viernes 15 | GYM Polideportivo</strong>
					<ul>
						<li>9:00 Inicio de competencia</li>
					</ul>
					<strong>Sabado 16 | GYM Polideportivo</strong>
					<ul>
						<li>9:00 Inicio de competencia</li>
					</ul>
				</div>
			</div>
		</section>
		<?php
			}elseif($_REQUEST['d'] == 13){
		?>
		<div id="titulo">
			<div class="wrapper">Natación</div>
		</div>
		<section class="wrapper">
			<div class="text">
				<strong>PROGRAMA</strong><br><br>
				<div class="programa">
					<strong>Jueves 14 | Alberca Unidad 2</strong>
					<ul>
						<li>13:00 Junta Técnica y Afloje</li>
						<li>14:00 Inicio de competencia</li>
					</ul>
					<strong>Viernes 15 | Alberca Unidad 2</strong>
					<ul>
						<li>8:00 Afloje</li>
						<li>9:00 Inicio de competencia</li>
					</ul>
					<strong>Sabado 16 | Alberca Unidad 2</strong>
					<ul>
						<li>8:00 Afloje</li>
						<li>9:00 Inicio de competencia</li>
					</ul>
					
					<p><b>HOMBRES 50 METROS LIBRE</b></p>
					
					<table border="1" style="border-spacing: 0;"><tbody style="text-align:center">
						 <tr style="background-color: #443a8f;; color: #fff;"><td><b>LUGAR</b></td><td><b>NOMBRE</b></td><td><b>CAT</b></td><td><b>EQUIPO</b></td><td><b>TIEMPO</b></td><td><b>PUNTOS</b></td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">1</td><td>Domínguez Francisco</td><td>20</td><td>CDMX</td><td>25.52</td><td>9</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">2</td><td>Hernández Juan</td><td>21</td><td>CDMX</td><td>26.32</td><td>7</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">3</td><td>Ramos Roy</td><td>29</td><td>CDMX</td><td>26.79</td><td>6</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">4</td><td>García Abraham</td><td>19</td><td>CDMX</td><td>26.84</td><td>5</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">5</td><td>Calderón Erick</td><td>18</td><td>Santa Teresa</td><td>27.21</td><td>4</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">6</td><td>Olvera Alejandro</td><td>22</td><td>CDMX</td><td>27.24</td><td>3</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">7</td><td>López Emilio</td><td>18</td><td>Santa Teresa</td><td>27.25</td><td>2</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">8</td><td>Ruíz Francisco</td><td>17</td><td>CDMX</td><td>27.43</td><td>1</td></tr>
					</tbody></table>
					
					<p><b>MUJERES 200 METROS DORSO</b></p>
					<table border="1" style="border-spacing: 0;"><tbody style="text-align:center">
						<tr style="background-color: #443a8f;; color: #fff;"><td><b>LUGAR</b></td><td><b>NOMBRE</b></td><td><b>CAT</b></td><td><b>EQUIPO</b></td><td><b>TIEMPO</b></td><td><b>PUNTOS</b></td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">1</td><td>Santana Fernanda</td><td>16</td><td>Santa Teresa</td><td>2.47.08</td><td>9</td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">2</td><td>Guadalupe Martínez</td><td>19</td><td>Chihuahua</td><td>2.48.14</td><td>7</td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">3</td><td>Mariana Villanueva</td><td>18</td><td>Santa Teresa</td><td>2.51.85</td><td>6</td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">4</td><td>Lozano Alejandra</td><td>16</td><td>Santa Teresa</td><td>3.00.33</td><td>5</td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">5</td><td>Fernanda Dimas</td><td>22</td><td>Victoria</td><td>3.01.01</td><td>4</td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">6</td><td>Victoria Hernández</td><td>19</td><td>CDMX</td><td>3.02.67</td><td>3</td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">7</td><td>Leslie Guzmán</td><td>17</td><td>CDMX</td><td>3.16.62</td><td>2</td></tr>
						<tr><td style="background-color: #2caac6; color: #fff;">8</td><td>Sanroman Lucia</td><td>16</td><td>Santa Teresa</td><td>3.25.14</td><td>1</td></tr>
					</tbody></table>
					
					<p><b>HOMBRES 200 METROS DORSO</b></p>
					<table border="1" style="border-spacing: 0;"><tbody style="text-align:center">
						<tr style="background-color: #443a8f;; color: #fff;"><td><b>LUGAR</b></td><td><b>NOMBRE</b></td><td><b>CAT</b></td><td><b>EQUIPO</b></td><td><b>TIEMPO</b></td><td><b>PUNTOS</b></td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">1</td><td>Arellano Carlos</td><td>20</td><td>CDMX</td><td>2.16.56</td><td>9</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">2</td><td>Aranda Jorge</td><td>18</td><td>Santa Teresa</td><td>2.19.13</td><td>7</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">3</td><td>Domínguez Francisco</td><td>20</td><td>CDMX</td><td>2.20.61</td><td>6</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">4</td><td>López Emilio</td><td>18</td><td>CDMX</td><td>2.21.95</td><td>5</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">5</td><td>Meneses Alexander</td><td>15</td><td>Santa Teresa</td><td>2.37.48</td><td>4</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">6</td><td>Salcedo Jorge</td><td>16</td><td>CDMX</td><td>2.48.84</td><td>3</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">7</td><td>Leon Gael</td><td>17</td><td>Santa Teresa</td><td>2.51.32</td><td>2</td></tr>
						 <tr><td style="background-color: #2caac6; color: #fff;">8</td><td>Castañeda Rodrigo</td><td>17</td><td>CDMX</td><td>2.51.68</td><td>1</td></tr>
					</tbody></table>
					
					
				</div>
			</div>
		</section>
		<?php
			}elseif($_REQUEST['d'] == 8){
		?>
		
		<div id="titulo">
			<div class="wrapper">Tae Kwon Do</div>
		</div>
		<section class="wrapper">
			<div class="text">
				<strong>PROGRAMA</strong><br><br>
				<div class="programa">
					<strong>Jueves 14 | SUM / Santa Lucía</strong>
					<ul>
						<li>11:30 Pesaje</li>
					</ul>
					<strong>Viernes 15 | SUM / Unidad 2</strong>
					<ul>
						<li>9:00 Inicio de competencia</li>
					</ul>
					<strong>Sabado 16 | SUM / Unidad 2</strong>
					<ul>
						<li>9:00 Inicio de competencia</li>
					</ul>
					<strong>Domingo 17 | SUM / Unidad 2</strong>
					<ul>
						<li>9:00 Inicio de competencia</li>
					</ul>
				</div>
			</div>
		</section>
		<?php
			}else{
				
				$_REQUEST['d'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['d']));
				if(isset($_REQUEST['u'])) $_REQUEST['u'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['u']));
				$sql = 'SELECT deporte_id,deporte FROM tor_deportes WHERE deporte_id='.$_REQUEST['d'];
				$result = @mysqli_query($dbc,$sql);
				if(@mysqli_num_rows($result) > 0){
					$r = @mysqli_fetch_array($result,MYSQLI_BOTH);
		?>
		<div id="titulo">
			<div class="wrapper"><?php echo $r['deporte']; ?></div>
		</div>
		<section class="wrapper" style="margin-top: 20px;">
		<?php
					// Se obtienen los torneos por rama y grupo
					$sql = 'SELECT DISTINCT tor_torneos.torneo_id,tor_torneos.deporte_id,tor_ramas.rama_id,tor_ramas.rama,tor_grupos.grupo_id,tor_grupos.grupo FROM tor_torneos
							INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
							INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
							INNER JOIN tor_partidos ON tor_partidos.torneo_id = tor_torneos.torneo_id
							INNER JOIN tor_grupos ON tor_partidos.grupo_id = tor_grupos.grupo_id
							INNER JOIN tor_equipos ON tor_equipos.deporte_id = tor_torneos.deporte_id AND tor_equipos.rama_id = tor_torneos.rama_id
							WHERE tor_torneos.tipo_id=1 AND tor_torneos.deporte_id='.$_REQUEST['d'].' AND (tor_partidos.local=tor_equipos.equipo_id OR tor_partidos.visitante=tor_equipos.equipo_id) AND tor_partidos.tipo_id = 1';
					if(isset($_REQUEST['u']) && $_REQUEST['u'] != '') $sql .= ' AND tor_equipos.delegacion_id='.$_REQUEST['u'];
					$sql .=' ORDER BY tor_ramas.rama,tor_grupos.grupo';
					$torneos = @mysqli_query($dbc,$sql);
					$tor = 1;
					$selected = 1;
					$detalle = '';
					while($t = @mysqli_fetch_array($torneos, MYSQLI_BOTH)){
						if($detalle == '') $detalle = 'rad'.$tor;
		?>
			<div class="torneo r<?php echo $t['rama_id']; if($selected) echo ' selected'; ?>">
				<label for="rad<?php echo $tor; ?>"><?php echo '<span>'.$t['rama'].'</span> <strong>'.$t['grupo'].'</strong>'; ?></label>
			</div>
			<input type="radio" name="radTorneos" class="radTorneo r<?php echo $t['rama_id']; ?>" id="rad<?php echo $tor; ?>"<?php if($tor == 1) echo ' checked'; ?>>
			<div class="torneoDetalle">
		<?php
						echo '
				<div class="jornadas">';
						$sql = 'SELECT tor_partidos.partido_id,tor_partidos.jornada,tor_partidos.local,tor_partidos.visitante,tor_partidos.fecha,tor_partidos.hora,tor_canchas.cancha_id,tor_canchas.cancha,tor_partidos.tipo_id,tor_tipo_partidos.tor_tipo_partido FROM tor_partidos
								LEFT JOIN tor_grupos ON tor_partidos.grupo_id = tor_grupos.grupo_id
								LEFT JOIN tor_canchas ON tor_partidos.cancha_id = tor_canchas.cancha_id
								INNER JOIN tor_tipo_partidos ON tor_partidos.tipo_id = tor_tipo_partidos.tor_tipo_partido_id
								WHERE tor_partidos.torneo_id='.$t['torneo_id'].' AND tor_grupos.grupo_id='.$t['grupo_id'].' AND tor_partidos.tipo_id=1
								ORDER BY tor_partidos.jornada,tor_partidos.fecha,tor_partidos.hora,tor_partidos.partido_id';
						$roles = @mysqli_query($dbc,$sql);
						$jor = 0;
						$tipo = '';
						while($r = @mysqli_fetch_array($roles, MYSQLI_BOTH)){
							if($r['jornada'] != $jor){
								if($jor != 0) echo '
					</div>';
								$jor = $r['jornada'];
								echo '
					<div class="jornadaTitulo">Jornada '.$jor.'</div>
					<div class="partidos">';
							}
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['local'];
							$local = @mysqli_query($dbc,$sql);
							$l = @mysqli_fetch_array($local, MYSQLI_BOTH);
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['visitante'];
							$sqllocalshootout = 'SELECT marcador_id from tor_marcadores WHERE extra_id = '.$r['local'].' AND partido_id = '.$r['partido_id'];
							$localshootout = @mysqli_query($dbc,$sqllocalshootout);
							$localasterix = mysqli_num_rows($localshootout);
							
							$sqlvisitanteshootout = 'SELECT marcador_id from tor_marcadores WHERE extra_id = '.$r['visitante'].' AND partido_id = '.$r['partido_id'];
							$visitanteshootout = @mysqli_query($dbc,$sqlvisitanteshootout);
							$visitanteasterix = mysqli_num_rows($visitanteshootout);
							
							
							$visitante = @mysqli_query($dbc,$sql);
							$v = @mysqli_fetch_array($visitante, MYSQLI_BOTH);
							$sql = 'SELECT tor_marcadores.marcador_local,tor_marcadores.marcador_visitante FROM tor_marcadores
									WHERE tor_marcadores.partido_id='.$r['partido_id'];
							$marcador = @mysqli_query($dbc,$sql);
							if(@mysqli_num_rows($marcador) > 0){
								$m = @mysqli_fetch_array($marcador, MYSQLI_BOTH);
								if ($localasterix <> 0){
									$vs = '<strong>'.$m['marcador_local'].'*</strong> - <strong>'.$m['marcador_visitante'].'</strong>';
								}
								else if ($visitanteasterix <> 0){
									$vs = '<strong>'.$m['marcador_local'].'</strong> - <strong>'.$m['marcador_visitante'].'*</strong>';
								} else {
									$vs = '<strong>'.$m['marcador_local'].'</strong> - <strong>'.$m['marcador_visitante'].'</strong>';
								}
							}else{
								$vs = 'vs';
							}
							if($r['fecha'] != '') $fecha = formatoFecha($r['fecha']); else $fecha = '';
							if($r['hora'] != '') $hora = convertHour($r['hora']); else $hora = '';
							echo '
						<div class="partido">
							<a href="#cancha" data-id="'.$r['cancha_id'].'" class="cancha fancybox">'.$r['cancha'].'</a>
							<div class="fechaHora"><span>'.$fecha.'</span> <span>'.$hora.'</span></div>
							<div class="versus">
								<div class="local"><strong>'.$l['equipo'].'</strong></div>
								<div class="vs">'.$vs.'</div>
								<div class="visitante"><strong>'.$v['equipo'].'</strong></div>
							</div>
						<div class="clearfix"></div></div>';
						}
						echo '
					</div>';

						$sql = 'SELECT tor_partidos.partido_id,tor_partidos.jornada,tor_partidos.local,tor_partidos.visitante,tor_partidos.fecha,tor_partidos.hora,tor_canchas.cancha_id,tor_canchas.cancha,tor_partidos.tipo_id,tor_tipo_partidos.tor_tipo_partido FROM tor_partidos
								LEFT JOIN tor_grupos ON tor_partidos.grupo_id = tor_grupos.grupo_id
								LEFT JOIN tor_canchas ON tor_partidos.cancha_id = tor_canchas.cancha_id
								INNER JOIN tor_tipo_partidos ON tor_partidos.tipo_id = tor_tipo_partidos.tor_tipo_partido_id
								WHERE tor_partidos.torneo_id='.$t['torneo_id'].' AND tor_grupos.grupo_id='.$t['grupo_id'].' AND tor_partidos.tipo_id<>1
								ORDER BY tor_partidos.jornada,tor_partidos.fecha,tor_partidos.hora,tor_partidos.partido_id';
						$roles = @mysqli_query($dbc,$sql);
						if(@mysqli_num_rows($roles) > 0){
							$jor = 0;
							$tipo = '';
							while($r = @mysqli_fetch_array($roles,MYSQLI_BOTH)){
								if($jor != 0) echo '
					</div>';
								$jor = $r['jornada'];
								if($tipo != $r['tor_tipo_partido']){
									$tipo = $r['tor_tipo_partido'];
									echo '
					<div class="jornadaTitulo">'.$r['tor_tipo_partido'].'</div>
					<div class="partidos">';
								}
								$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['local'];
								$local = @mysqli_query($dbc,$sql);
								$l = @mysqli_fetch_array($local,MYSQLI_BOTH);
								$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['visitante'];
								$visitante = @mysqli_query($dbc,$sql);
								$v = @mysqli_fetch_array($visitante,MYSQLI_BOTH);
								$sql = 'SELECT tor_marcadores.marcador_local,tor_marcadores.marcador_visitante FROM tor_marcadores
										WHERE tor_marcadores.partido_id='.$r['partido_id'];
								$marcador = @mysqli_query($dbc,$sql);
								if(@mysqli_num_rows($marcador) > 0){
									$m = @mysqli_fetch_array($marcador,MYSQLI_BOTH);
									$vs = '<strong>'.$m['marcador_local'].'</strong> - <strong>'.$m['marcador_visitante'].'</strong>';
								}else{
									$vs = 'vs';
								}
								if($r['fecha'] != '') $fecha = formatoFecha($r['fecha']); else $fecha = '';
								if($r['hora'] != '') $hora = convertHour($r['hora']); else $hora = '';
								echo '
						<div class="partido">
							<a href="#cancha" data-id="'.$r['cancha_id'].'" class="cancha fancybox">'.$r['cancha'].'</a>
							<div class="fechaHora"><span>'.$fecha.'</span> <span>'.$hora.'</span></div>
							<div class="versus">
								<div class="local"><strong>'.$l['equipo'].'</strong></div>
								<div class="vs">'.$vs.'</div>
								<div class="visitante"><strong>'.$v['equipo'].'</strong></div>
							</div>
						<div class="clearfix"></div></div>';
							}
							echo '
					</div>';
						}else{

							
							$sql = 'SELECT tor_partidos.partido_id,tor_partidos.jornada,tor_partidos.local,tor_partidos.visitante,tor_partidos.fecha,tor_partidos.hora,tor_canchas.cancha_id,tor_canchas.cancha,tor_partidos.tipo_id,tor_tipo_partidos.tor_tipo_partido FROM tor_partidos
									LEFT JOIN tor_grupos ON tor_partidos.grupo_id = tor_grupos.grupo_id
									LEFT JOIN tor_canchas ON tor_partidos.cancha_id = tor_canchas.cancha_id
									INNER JOIN tor_tipo_partidos ON tor_partidos.tipo_id = tor_tipo_partidos.tor_tipo_partido_id
									WHERE tor_partidos.torneo_id='.$t['torneo_id'].' AND tor_partidos.grupo_id=0 AND tor_partidos.tipo_id<>1
									ORDER BY tor_partidos.jornada,tor_partidos.fecha,tor_partidos.hora,tor_partidos.partido_id';
							// echo $sql;
							$roles = @mysqli_query($dbc,$sql);
							if(@mysqli_num_rows($roles) > 0){
								$jor = 0;
								$tipo = '';
								while($r = @mysqli_fetch_array($roles,MYSQLI_BOTH)){
									if($jor != 0 && $tipo != $r['tor_tipo_partido']) echo '
						</div>';
									$jor = $r['jornada'];
									if($tipo != $r['tor_tipo_partido']){
										$tipo = $r['tor_tipo_partido'];
										echo '
						<div class="jornadaTitulo">'.$r['tor_tipo_partido'].'</div>
						<div class="partidos">';
									}
									$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['local'];
									$local = @mysqli_query($dbc,$sql);
									$l = @mysqli_fetch_array($local,MYSQLI_BOTH);
									$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['visitante'];
									$visitante = @mysqli_query($dbc,$sql);
									$v = @mysqli_fetch_array($visitante,MYSQLI_BOTH);
									$sql = 'SELECT tor_marcadores.marcador_local,tor_marcadores.marcador_visitante FROM tor_marcadores
											WHERE tor_marcadores.partido_id='.$r['partido_id'];
									$marcador = @mysqli_query($dbc,$sql);
									if(@mysqli_num_rows($marcador) > 0){
										$m = @mysqli_fetch_array($marcador,MYSQLI_BOTH);
										$vs = '<strong>'.$m['marcador_local'].'</strong> - <strong>'.$m['marcador_visitante'].'</strong>';
									}else{
										$vs = 'vs';
									}
									if($r['fecha'] != '') $fecha = formatoFecha($r['fecha']); else $fecha = '';
									if($r['hora'] != '') $hora = convertHour($r['hora']); else $hora = '';
									echo '
							<div class="partido">
								<a href="#cancha" data-id="'.$r['cancha_id'].'" class="cancha fancybox">'.$r['cancha'].'</a>
								<div class="fechaHora"><span>'.$fecha.'</span> <span>'.$hora.'</span></div>
								<div class="versus">
									<div class="local"><strong>'.$l['equipo'].'</strong></div>
									<div class="vs">'.$vs.'</div>
									<div class="visitante"><strong>'.$v['equipo'].'</strong></div>
								</div>
							<div class="clearfix"></div></div>';
								}
								echo '
						</div>';
							}


						}

						echo '
				</div>';
		?>
				<div class="estadisticas" id="<?php echo 't'.$t['torneo_id'].'g'.$t['grupo_id']; ?>">
					<table border="1" cellspacing="0" width="100%">
						<tr>
							<th></th>
							<th>JJ</th>
							<th>JG</th>
							<?php if($t['deporte_id'] == 1 || $t['deporte_id'] == 5 || $t['deporte_id'] == 9 || $t['deporte_id'] == 12){ ?><th>JE</th><?php } ?>
							<th>JP</th>
							<?php if($t['deporte_id'] == 6){ ?><th>JF</th><th>JC</th><?php } ?>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><th>JGSO</th><?php } ?>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><th>JPSO</th><?php } ?>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5 || $t['deporte_id'] == 12){ ?><th>GF</th><th>GC</th><?php } ?>
							<?php if($t['deporte_id'] == 7 || $t['deporte_id'] == 1){ ?><th>PF</th><th>PC</th><?php } ?>
							<?php if($t['deporte_id'] == 9) { ?><th>TF</th><th>TC</th><?php } ?>
							<?php if($t['deporte_id'] == 3) { ?><th>PA</th><th>PC</th><?php } ?>
							<?php if($t['deporte_id'] == 6){ ?><th>%</th><?php } ?>
							<th>DIF</th>
							<?php if($t['deporte_id'] <> 7 && $t['deporte_id'] <> 6){ ?><th>Pts.</th><?php } ?>
						</tr>
					<?php
						$sql = 'SELECT DISTINCT tor_partidos.local, tor_equipos.equipo FROM tor_partidos, tor_equipos WHERE tor_partidos.grupo_id = '.$t['grupo_id'].' AND tor_partidos.torneo_id = '.$t['torneo_id'].' AND tor_equipos.equipo_id = tor_partidos.local';
						$equipos = @mysqli_query($dbc,$sql);
						$i=0;
						while($e = @mysqli_fetch_array($equipos,MYSQLI_BOTH)){
							$inner_sql = 'SELECT tor_partidos.local, tor_marcadores.marcador_local, tor_marcadores.marcador_visitante, tor_marcadores.extra_id,  tor_marcadores.sets_contra, tor_marcadores.sets_favor FROM tor_marcadores, tor_partidos WHERE tor_marcadores.partido_id = tor_partidos.partido_id AND (tor_partidos.visitante = '.$e['local'].' OR tor_partidos.local = '.$e['local'].')';
							$sub = @mysqli_query($dbc,$inner_sql);
							$JJ = 0;
							$JG = 0;
							$JP = 0;
							$JE = 0;
							$PG = 0;
							$PP = 0;
							$PS = 0;
							$JGSO = 0;
							$JPSO = 0;
							$SF = 0;
							$SC = 0;
							while($f = @mysqli_fetch_array($sub,MYSQLI_BOTH)){
								if($f['local'] == $e['local']){
									if ($f['marcador_local'] > $f['marcador_visitante']){
										$JG = $JG+1;
										$PG = $PG + $f['marcador_local'];
										$PP = $PP + $f['marcador_visitante'];
										$SF = $SF + $f['sets_favor'];
										$SC = $SC + $f['sets_contra'];
									}
									else {
										if ($f['marcador_local'] < $f['marcador_visitante']){
											$JP = $JP+1;
											$PG = $PG + $f['marcador_local'];
											$PP = $PP + $f['marcador_visitante'];
											$SF = $SF + $f['sets_favor'];
											$SC = $SC + $f['sets_contra'];
										}
										if ($f['marcador_local'] == $f['marcador_visitante']){
											$JE = $JE+1;
											$PG = $PG + $f['marcador_local'];
											$PP = $PP + $f['marcador_local'];
											$SF = $SF + $f['sets_favor'];
											$SC = $SC + $f['sets_contra'];
											if ($f['extra_id'] == $e['local']) {
												$JGSO = $JGSO +1;
											}
											else {
												$JPSO = $JPSO +1;
											}
										}
									}
								}
								else {
									if ($f['marcador_local'] > $f['marcador_visitante']){
											$JP = $JP+1;
											$PG = $PG + $f['marcador_visitante'];
											$PP = $PP + $f['marcador_local'];
											$SF = $SF + $f['sets_favor'];
											$SC = $SC + $f['sets_contra'];
									}
									else {
										if ($f['marcador_local'] < $f['marcador_visitante']){
											$JG = $JG+1;
											$PG = $PG + $f['marcador_visitante'];
											$PP = $PP + $f['marcador_local'];
											$SF = $SF + $f['sets_favor'];
											$SC = $SC + $f['sets_contra'];
										}
										if ($f['marcador_local'] == $f['marcador_visitante']){
											$JE = $JE+1;
											$PG = $PG + $f['marcador_local'];
											$PP = $PP + $f['marcador_local'];
											$SF = $SF + $f['sets_favor'];
											$SC = $SC + $f['sets_contra'];
											if ($f['extra_id'] == $e['local']) {
												$JGSO = $JGSO +1;
											}
											else {
												$JPSO = $JPSO +1;
											}
										}
									}
								}
								$JJ = $JJ+1;
								if ($PP > 0 ){$PS = $PG/$PP;}
								
							}
							$resultados [$i][0]= $e['equipo'];
							$resultados [$i][1]= $JJ;
							$resultados [$i][2]= $JG;
							$resultados [$i][3]= $JE;
							$resultados [$i][4]= $JGSO;
							$resultados [$i][5]= $JPSO;
							$resultados [$i][6]= $PG;
							$resultados [$i][7]= $PP;
							if ($t['deporte_id'] == 4 || $t['deporte_id'] == 5){
								$resultados [$i][8]= ($JG*3)+($JGSO*2)+$JPSO;
							} else {
								$resultados [$i][8]= ($JG*2)+$JP;
							}
							$resultados [$i][9]= $JP;
							$resultados [$i][10]= $SF;
							$resultados [$i][11]= $SC;
							
							$i = $i +1;
						}
						
							for ($j=0;$j<$i;$j++){
								for ($k=0;$k<$i-1;$k++){
									if ($resultados [$k][8] < $resultados [$k+1][8]){
										$aux[0] = $resultados [$k][0];
										$aux[1] = $resultados [$k][1];
										$aux[2] = $resultados [$k][2];
										$aux[3] = $resultados [$k][3];
										$aux[4] = $resultados [$k][4];
										$aux[5] = $resultados [$k][5];
										$aux[6] = $resultados [$k][6];
										$aux[7] = $resultados [$k][7];
										$aux[8] = $resultados [$k][8];
										$aux[9] = $resultados [$k][9];
										$aux[10] = $resultados [$k][10];
										$aux[11] = $resultados [$k][11];
										
										$resultados [$k][0] = $resultados [$k+1][0];
										$resultados [$k][1] = $resultados [$k+1][1];
										$resultados [$k][2] = $resultados [$k+1][2];
										$resultados [$k][3] = $resultados [$k+1][3];
										$resultados [$k][4] = $resultados [$k+1][4];
										$resultados [$k][5] = $resultados [$k+1][5];
										$resultados [$k][6] = $resultados [$k+1][6];
										$resultados [$k][7] = $resultados [$k+1][7];
										$resultados [$k][8] = $resultados [$k+1][8];
										$resultados [$k][9] = $resultados [$k+1][9];
										$resultados [$k][10] = $resultados [$k+1][10];
										$resultados [$k][11] = $resultados [$k+1][11];
										
										$resultados [$k+1][0] = $aux[0];
										$resultados [$k+1][1] = $aux[1];
										$resultados [$k+1][2] = $aux[2];
										$resultados [$k+1][3] = $aux[3];
										$resultados [$k+1][4] = $aux[4];
										$resultados [$k+1][5] = $aux[5];
										$resultados [$k+1][6] = $aux[6];
										$resultados [$k+1][7] = $aux[7];
										$resultados [$k+1][8] = $aux[8];
										$resultados [$k+1][9] = $aux[9];
										$resultados [$k+1][10] = $aux[10];
										$resultados [$k+1][11] = $aux[11];
										
										
										
										
									}
								}
							}
						
						for ($k=0;$k<$i;$k++){
							$e['equipo'] = $resultados [$k][0];
							$JJ = $resultados [$k][1];
							$JG = $resultados [$k][2];
							$JE = $resultados [$k][3];
							$JGSO = $resultados [$k][4];
							$JPSO = $resultados [$k][5];
							$PG = $resultados [$k][6];
							$PP = $resultados [$k][7];
							$JP = $resultados [$k][9];
							$SF = $resultados [$k][10];
							$SC = $resultados [$k][11];
							
					?>
						<tr>
							<td align="center"><?php echo $e['equipo']; ?></td>
							<td align="center"><?php echo $JJ; ?></td>
							<td align="center"><?php echo $JG; ?></td>
							<?php if($t['deporte_id'] == 1 || $t['deporte_id'] == 5 || $t['deporte_id'] == 9 || $t['deporte_id'] == 12){ ?><td align="center"><?php echo $JE; ?></td><?php } ?>
							<td align="center"><?php echo $JP; ?></td>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><td align="center"><?php echo $JGSO; ?></td><?php } ?>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><td align="center"><?php echo $JPSO; ?></td><?php } ?>
							<?php if($t['deporte_id'] == 6){ ?><td align="center"><?php echo $SF; ?></td><?php } ?>
							<?php if($t['deporte_id'] == 6){ ?><td align="center"><?php echo $SC; ?></td><?php } ?>
							<?php /*if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><td align="center"><?php echo $e['extra']; ?></td><?php }*/ ?>
							<?php if($t['deporte_id'] <> 6){ ?><td align="center"><?php echo $PG; ?></td><?php } ?>
							<?php if($t['deporte_id'] <> 6){ ?><td align="center"><?php echo $PP; ?></td><?php } ?>
							<?php if($t['deporte_id'] == 6) { ?><td align="center"><?php if ($SC == 0) {echo '0';} else {echo $SF/$SC;} ?></td><?php } ?>
							<td align="center"><?php echo $PG-$PP; ?></td>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><td align="center"><?php echo ($JG*3)+($JGSO*2)+$JPSO; ?></td><?php } ?>
							<?php if($t['deporte_id'] == 3) { ?><td align="center"><?php echo ($JG*2)+($JP); ?></td><?php } ?>
							<?php if($t['deporte_id'] == 12) { ?><td align="center"><?php echo ($JG*3)+($JE*1); ?></td><?php } ?>			
							<?php if($t['deporte_id'] <> 7 && $t['deporte_id'] <> 6 && $t['deporte_id'] <> 4 && $t['deporte_id'] <> 3 && $t['deporte_id'] <> 5 && $t['deporte_id'] <> 12){ ?><td align="center"><?php echo $JG; ?></td><?php } ?>
						</tr>
					<?php
						}
					?>
					</table>
					<p style="color: black;">Descarga el rol de juegos: <a href="documents/Juegos_2019_ROLES-min.pdf" style="color: blue;">aquí</a></p>
					<?php if($t['deporte_id']==6 && $t['grupo_id'] == 1 && $t['torneo_id'] == 26) {echo '<p style="color: black;">Descarga el estado de campeonato: <a href="documents/campeonato/TENIS_FEMENIL_SERIE_A.pdf" style="color: blue;">aquí</a></p>';}?>
					<?php if($t['deporte_id']==6 && $t['grupo_id'] == 1 && $t['torneo_id'] == 27) {echo '<p style="color: black;">Descarga el estado de campeonato: <a href="documents/campeonato/TENIS_VARONIL_SERIE_A.pdf" style="color: blue;">aquí</a></p>';}?>
		<?php
						if($_REQUEST['d'] == 1){
		?>
			<!--<br><div class="text" style="padding: 10px;">
				<a class="reglamento" href="documents/AjedrezFinal.pdf" target="_blank"><strong>Informe</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
			</div>-->
		<?php
						}
		?>
				</div>
				<div class="clearfix"></div>
		<?php
						@mysqli_free_result($roles);
		?>
			</div>
		<?php
						$selected = 0;
						$tor++;
					}
					$sql = 'SELECT cancha_id,cancha,descripcion,contacto,responsable,direccion,latitud,longitud FROM tor_canchas
							ORDER BY cancha_id';
					$result = @mysqli_query($dbc,$sql);
					while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
		?>
			<div class="canchadata" id="canchadata<?php echo $r['cancha_id']; ?>" data-desc="<?php echo $r['descripcion'].'<br><br>Responsable<br>'.$r['responsable'].'<br><br>Contacto<br>'.$r['contacto']; ?>" data-lat="<?php echo $r['latitud']; ?>" data-lon="<?php echo $r['longitud']; ?>"></div>
		<?php
					}
				}
				@mysqli_close($dbc);
		?>
			<div class="canchaInfo" id="cancha">
				<div class="info">
					<div class="foto"></div>
					<div class="nombre"></div>
				</div>
				<div class="map" id="map"></div>
				<div class="clearfix"></div>
			</div>
		</section>
		<script type="text/javascript">
			$(document).ready(function(){
				height = parseInt($('#<?php echo $detalle; ?> + .torneoDetalle').height());
				height += 200;
				$('section').css('min-height',height+'px');

				var map = new GMaps({
					div: '#map',
					lat: '21.152827487708752',
					lng: '-101.71100284583025',
					zoom: 17
				});
				$('.cancha').click(function(){
					id = $(this).attr('data-id');
					$('#cancha .foto').css('background-image','url(images/cancha'+id+'.jpg)');
					$('#cancha .nombre').html($('#canchadata'+id).attr('data-desc'));
					map.removeMarkers();
					map.setCenter($('#canchadata'+id).attr('data-lat'), $('#canchadata'+id).attr('data-lon'));
					map.setZoom(17);
					map.addMarker({
						lat: $('#canchadata'+id).attr('data-lat'),
						lng: $('#canchadata'+id).attr('data-lon')
					});
				});
			});
		</script>
		<?php
			}
			include('footer.php');
		?>
	</body>
</html>