<?php
	header("Content-Type: text/html; ");
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
		<title>XXVI Juegos Deportivos Lasallistas 2019</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/fancybox.css">
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
			}elseif($_REQUEST['d'] == 2){
		?>
		<!--
		<div id="titulo">
			<div class="wrapper">Atletismo</div>
		</div>
		<section class="wrapper">
			<div class="programa">
				Sede: Deportiva de Lerdo, Durango <br><br>
				<strong>Viernes 22 de Marzo de 2019 </strong>
							</div><br>
			 <!-- <div class="text">
				<a class="reglamento" href="documents/Atletismo1erDia.pdf" target="_blank"><strong>Resultados 1er día</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
				<a class="reglamento" href="documents/AtletismoFinal.pdf" target="_blank"><strong>Resultados Finales</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
			</div> --> 	
		<!--		
			<div class="accordion r2">
				<input type="checkbox" id="chk100mf">
				<label class="tab" for="chk100mf">100 m Femenil <span></span></label>
				<div class="container">
					<table border="1" cellpadding="5" cellspacing="0">
						<tr><th>Nombre</th><th>Universidad</th><th>Carril</th><th>Heat</th><th>Número</th><th>Tiempo</th><th>Lugar</th></tr>
						<tr><td align="center">Jaqueline Ronquillo Rey</td><td align="center">Chihuahua</td><td align="center">6</td><td align="center">1</td><td align="center">17</td><td align="center">12.71</td><td align="center">1</td></tr>
						<tr><td align="center">Valeria Rodríguez Olivares</td><td align="center">Laguna</td><td align="center">4</td><td align="center">2</td><td align="center">35</td><td align="center">13.97</td><td align="center">2</td></tr>
						<tr><td align="center">Irma Vanessa Valdéz Ruíz</td><td align="center">Nezahualcóyotl</td><td align="center">3</td><td align="center">2</td><td align="center">24</td><td align="center">14.97</td><td align="center">3</td></tr>
					</table>
							</div>
			</div>
		
			<div class="accordion r2">
				<input type="checkbox" id="chk400mf">
				<label class="tab" for="chk400mf">400 m Femenil <span></span></label>
				<div class="container">
										<table border="1" cellpadding="5" cellspacing="0">
						<tr><th>Nombre</th><th>Universidad</th><th>Carril</th><th>Heat</th><th>Número</th><th>Tiempo</th><th>Lugar</th></tr>
						<tr><td align="center">Yesenia Delgado Hernández</td><td align="center">Bajío</td><td align="center">3</td><td align="center">1</td><td align="center">3</td><td align="center">1:04.98</td><td align="center">1</td></tr>
						<tr><td align="center">Morelia Trujillo Rivera</td><td align="center">Nezahualcóyotl</td><td align="center">1</td><td align="center">1</td><td align="center">26</td><td align="center">1:06.69</td><td align="center">2</td></tr>
						<tr><td align="center">Jennifer Alondra Venegas Torres</td><td align="center">Nezahualcóyotl</td><td align="center">2</td><td align="center">1</td><td align="center">25</td><td align="center">1:10.80</td><td align="center">3</td></tr>
					</table>
				
				</div>
			</div>
		
				<div class="accordion r2">
				<input type="checkbox" id="chk4100mf">
				<label class="tab" for="chk4100mf">4 x 100 m Femenil <span></span></label>
				<div class="container">
										<table border="1" cellpadding="5" cellspacing="0">
						<tr><th>Nombre</th><th>Universidad</th><th>Carril</th><th>Heat</th><th>Tiempo</th><th>Lugar</th></tr>
						<tr><td align="center">Bajío</td><td align="center">Bajío</td><td align="center">1</td><td align="center">1</td><td align="center">56.69</td><td align="center">1</td></tr>
						<tr><td align="center">Nezahualcóyotl</td><td align="center">Nezahualcóyotl</td><td align="center">3</td><td align="center">1</td><td align="center">59.95</td><td align="center">2</td></tr>
						<tr><td align="center">Laguna</td><td align="center">Laguna</td><td align="center">2</td><td align="center">1</td><td align="center">1:01.42</td><td align="center">3</td></tr>
					</table>
				</div>
			</div>
	
			<div class="accordion r1">
				<input type="checkbox" id="chk100mv">
				<label class="tab" for="chk100mv">100 m Varonil <span></span></label>
				<div class="container">
					<table border="1" cellpadding="5" cellspacing="0">
						<tr><th>Nombre</th><th>Universidad</th><th>Carril</th><th>Heat</th><th>Número</th><th>Tiempo</th><th>Lugar</th></tr>
						<tr><td align="center">Alberto Lozano Fernández</td><td align="center">Chihuahua</td><td align="center">6</td><td align="center">2</td><td align="center">22</td><td align="center">11.52</td><td align="center">1</td></tr>
						<tr><td align="center">Mauricio Ríos Magallanes</td><td align="center">Chihuahua</td><td align="center">8</td><td align="center">2</td><td align="center">20</td><td align="center">11.72</td><td align="center">2</td></tr>
						<tr><td align="center">Iván de Jesús Romero Ceja</td><td align="center">Bajío</td><td align="center">3</td><td align="center">1</td><td align="center">4</td><td align="center">11.97</td><td align="center">3</td></tr>
					</table>
				
				</div>
			</div>
		
			<div class="accordion r1">
				<input type="checkbox" id="chk400mv">
				<label class="tab" for="chk400mv">400 m Varonil <span></span></label>
				<div class="container">
				<div class="container">
					<table border="1" cellpadding="5" cellspacing="0">
						<tr><th>Nombre</th><th>Universidad</th><th>Carril</th><th>Heat</th><th>Número</th><th>Tiempo</th><th>Lugar</th></tr>
						<tr><td align="center">Ricardo Miranda Pérez</td><td align="center">Bajío</td><td align="center">5</td><td align="center">1</td><td align="center">8</td><td align="center">53.57</td><td align="center">1</td></tr>
						<tr><td align="center">Edson Alarcón Gutiérrez</td><td align="center">Chihuahua</td><td align="center">1</td><td align="center">1</td><td align="center">21</td><td align="center">54.5</td><td align="center">2</td></tr>
						<tr><td align="center">Luis Gabriel Pérez Morales</td><td align="center">Cancún</td><td align="center">3</td><td align="center">1</td><td align="center">15</td><td align="center">57.32</td><td align="center">3</td></tr>
					</table>
					
				</div>
			</div>
			</div>
		
			<div class="accordion r1">
				<input type="checkbox" id="chk1500mv">
				<label class="tab" for="chk1500mv">1500 m Varonil <span></span></label>
				<div class="container">
					<table border="1" cellpadding="5" cellspacing="0">
						<tr><th>Nombre</th><th>Universidad</th><th>Heat</th><th>Número</th><th>Tiempo</th><th>Lugar</th></tr>
						<tr><td align="center">Felipe Zinedine Carmona Soto </td><td align="center">Bajío</td><td align="center">1</td><td align="center">9</td><td align="center">05:23</td><td align="center">1</td></tr>
						<tr><td align="center">Osvaldo Melo Palacios</td><td align="center">Chihuahua</td><td align="center">1</td><td align="center">23</td><td align="center">05:32</td><td align="center">2</td></tr>
						<tr><td align="center">David López Delgado</td><td align="center">Cancún</td><td align="center">1</td><td align="center">16</td><td align="center">05:35</td><td align="center">3</td></tr>
					</table>
				</div>
			</div>
		
			<div class="accordion r1">
				<input type="checkbox" id="chk4100mv">
				<label class="tab" for="chk4100mv">4 x 100 m Varonil <span></span></label>
				<div class="container">
					<table border="1" cellpadding="5" cellspacing="0">
						<tr><th>Nombre</th><th>Universidad</th><th>Carril</th><th>Heat</th><th>Tiempo</th><th>Lugar</th></tr>
						<tr><td align="center">Chihuahua</td><td align="center">Chihuahua</td><td align="center">2</td><td align="center">1</td><td align="center">48.35</td><td align="center">1</td></tr>
						<tr><td align="center">Bajío</td><td align="center">Bajío</td><td align="center">1</td><td align="center">1</td><td align="center">51.26</td><td align="center">2</td></tr>
						<tr><td align="center">Cancún</td><td align="center">Cancún</td><td align="center">4</td><td align="center">1</td><td align="center">52.91</td><td align="center">3</td></tr>
					</table>
				</div>
			</div>
		
		</section>
		-->
		<?php
			}elseif($_REQUEST['d'] == 8){
		?>
		<!--	
		<div id="titulo">
			<div class="wrapper">Tae Kwon Do</div>
		</div>
		<section class="wrapper">
			<div class="text">
				<strong>PROGRAMA</strong><br><br>
				<div class="programa">
					<strong>Jueves 21 de Marzo | Instituto Francés La Salle</strong>
					<ul>
						<li>11:00 hrs. Junta Técnica</li>
						<li>12:00 a 14:00 hrs. Pesaje</li>
					</ul>
					<strong>Viernes 22 de Marzo del 2019</strong>
					<ul>
						<li>9:00 am a 16:00 pm</li>
					</ul>
					<strong> Sábado 23 de Marzo</strong>
					<ul>
						
						<li>9:00 am a 16:00 pm </li>
					</ul>
				</div>
			</div>
		</section>
		-->
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
							$visitante = @mysqli_query($dbc,$sql);
							$v = @mysqli_fetch_array($visitante, MYSQLI_BOTH);
							$sql = 'SELECT tor_marcadores.marcador_local,tor_marcadores.marcador_visitante FROM tor_marcadores
									WHERE tor_marcadores.partido_id='.$r['partido_id'];
							$marcador = @mysqli_query($dbc,$sql);
							if(@mysqli_num_rows($marcador) > 0){
								$m = @mysqli_fetch_array($marcador, MYSQLI_BOTH);
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
							<?php if($t['deporte_id'] == 1 || $t['deporte_id'] == 4 || $t['deporte_id'] == 5 || $t['deporte_id'] == 9){ ?><th>JE</th><?php } ?>
							<th>JP</th>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><th>PEG</th><?php } ?>
							<?php if($t['deporte_id'] == 1){ ?><th>PG</th><th>PP</th><?php } ?>
							<?php if($t['deporte_id'] == 3){ ?><th>TF</th><th>TC</th><?php } ?>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><th>GF</th><th>GC</th><?php } ?>
							<?php if($t['deporte_id'] == 6){ ?><th>JF</th><th>JC</th><?php } ?>
							<?php if($t['deporte_id'] == 7){ ?><th>PF</th><th>PC</th><?php } ?>
							<?php if($t['deporte_id'] == 9){ ?><th>PA</th><th>PR</th><?php } ?>
							<?php if($t['deporte_id'] == 10){ ?><th>CA</th><th>CR</th><?php } ?>
							<?php if($t['deporte_id'] == 11){ ?><th>TA</th><th>TC</th><?php } ?>
							<th>%</th>
							<th>DIF</th>
							<th>Pts.</th>
						</tr>
					<?php
						$sql = 'SELECT DISTINCT tor_equipos.equipo_id,tor_equipos.equipo,IFNULL(tor_estadisticas.jugados,0) AS jugados,IFNULL(tor_estadisticas.ganados,0) AS ganados,IFNULL(tor_estadisticas.empatados,0) AS empatados,IFNULL(tor_estadisticas.perdidos,0) AS perdidos,IFNULL(tor_estadisticas.extra,0) AS extra,IFNULL(tor_estadisticas.favor,0) AS favor,IFNULL(tor_estadisticas.contra,0) AS contra,IFNULL(tor_estadisticas.porcentaje,0) AS porcentaje,IFNULL(tor_estadisticas.diferencia,0) AS diferencia,IFNULL(tor_estadisticas.puntos,0) AS puntos FROM tor_equipos
								INNER JOIN tor_torneos ON tor_equipos.deporte_id = tor_torneos.deporte_id AND tor_equipos.rama_id = tor_torneos.rama_id
								INNER JOIN tor_partidos ON tor_torneos.torneo_id = tor_partidos.torneo_id
								LEFT JOIN tor_estadisticas ON tor_equipos.equipo_id = tor_estadisticas.equipo_id AND tor_torneos.torneo_id = tor_estadisticas.torneo_id
								WHERE tor_partidos.torneo_id='.$t['torneo_id'].' AND tor_partidos.grupo_id='.$t['grupo_id'].' AND (tor_partidos.local=tor_equipos.equipo_id OR tor_partidos.visitante=tor_equipos.equipo_id)
								ORDER BY tor_estadisticas.puntos DESC,tor_estadisticas.diferencia DESC,tor_estadisticas.porcentaje DESC,tor_equipos.equipo';
						$equipos = @mysqli_query($dbc,$sql);
						while($e = @mysqli_fetch_array($equipos,MYSQLI_BOTH)){
					?>
						<tr>
							<td align="center"><?php echo $e['equipo']; ?></td>
							<td align="center"><?php echo $e['jugados']; ?></td>
							<td align="center"><?php echo $e['ganados']; ?></td>
							<?php if($t['deporte_id'] == 1 || $t['deporte_id'] == 4 || $t['deporte_id'] == 5 || $t['deporte_id'] == 9){ ?><td align="center"><?php echo $e['empatados']; ?></td><?php } ?>
							<td align="center"><?php echo $e['perdidos']; ?></td>
							<?php if($t['deporte_id'] == 4 || $t['deporte_id'] == 5){ ?><td align="center"><?php echo $e['extra']; ?></td><?php } ?>
							<td align="center"><?php echo $e['favor']; ?></td>
							<td align="center"><?php echo $e['contra']; ?></td>
							<td align="center"><?php echo number_format($e['porcentaje'],2); ?></td>
							<td align="center"><?php echo $e['diferencia']; ?></td>
							<td align="center"><?php echo $e['puntos']; ?></td>
						</tr>
					<?php
						}
					?>
					</table>
		<?php
						if($_REQUEST['d'] == 1){
		?>
			<br><div class="text" style="padding: 10px;">
				<a class="reglamento" href="documents/AjedrezFinal.pdf" target="_blank"><strong>Informe</strong><span><img src="images/pdf_mini.gif"> Descargar</span></a>
			</div>
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