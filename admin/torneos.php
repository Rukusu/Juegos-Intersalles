<?php
	header("Content-Type: text/html; charset=utf8");
	ini_set('session.gc_maxlifetime', 3600);
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

	if(!isset($_SESSION['user'])){
		header('Location: lgin.php');
		exit();
	}else{
		$dbc = connect_bajio();
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
		<link type="image/x-icon" href="favicon.png" rel="icon">
		<link type="image/x-icon" href="favicon.png" rel="shortcut icon">
		<title>Torneos deportivos</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="../css/jquery-clockpicker.css">
		<link rel="stylesheet" type="text/css" href="../bluesteel/css/tcrs.css">
		<link rel="stylesheet" type="text/css" href="../bluesteel/css/bluesteel.css">
		<link rel="stylesheet" type="text/css" href="../bluesteel/css/jquery.modal.css">
		<link rel="stylesheet" type="text/css" href="css/deportes.css?<?php echo date('YmdHis'); ?>">
		<style type="text/css">
			.tile{
				color: #333;
				padding-top: 90px;
				text-align: center;
			}
			.tile:hover{
				background-color: #ff8e00;
			}
		</style>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		<!--<script type="text/javascript" src="../js/jquery.js"></script>-->
		<script type="text/javascript" src="../js/jquery-ui.js"></script>
		<script type="text/javascript" src="../js/jquery-clockpicker.js"></script>
		<script src="//maps.google.com/maps/api/js?key=API_KEY"></script>
		<script type="text/javascript" src="../js/gmaps.js"></script>
		<script type="text/javascript" src="../bluesteel/js/jquery.modal.js"></script>
		<script type="text/javascript" src="../bluesteel/js/xlsx-core.js"></script>
		<script type="text/javascript" src="../bluesteel/js/filesaver.js"></script>
		<script type="text/javascript" src="../bluesteel/js/tableexport.js"></script>
		<script type="text/javascript" src="js/deportes.js?<?php echo date('YmdHis'); ?>"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="delasalle"></div>
				<div id="title">DEPORTES</div>
			</header>
			<section>
			<?php
				$dbc = connect_bajio();
				if(!isset($_REQUEST['op']) || $_REQUEST['op'] == 0){
			?>
				<a href="./" id="back"></a>
				<h1>Administrador de torneos deportivos</h1><br>
				<a class="tile" href="?op=4" style="background-image: url('images/tor_equipos.png');"><strong>Equipos</strong></a>
				<a class="tile" href="?op=9" style="background-image: url('images/tor_canchas.png');"><strong>Canchas</strong></a>
				<a class="tile" href="?op=1" style="background-image: url('images/tor_torneos.png');"><strong>Torneos</strong></a>
				<a class="tile" href="?op=12" style="background-image: url('images/tor_marcadores.png');"><strong>Marcadores</strong></a>
			<?php
				}elseif($_REQUEST['op'] == 1 && $_SESSION['type'] == 1){
			?>
				<a class="link right" href="?op=2">NUEVO TORNEO</a>
				<a href="torneos.php" id="back"></a>
				<h1>Buscar torneo</h1><br>
				<form class="bluesteel" method="post" id="buscaTorneo">
					<input type="hidden" name="action" value="buscaTorneo">
					<label class="twocol">Nombre</label>
					<input class="ninecol" type="text" name="torneo">
					<div class="clearfix"></div>
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte">
						<option value="">--</option>
					<?php
						$sql = 'SELECT deporte_id,deporte FROM tor_deportes ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'">'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Rama</label>
					<select class="twocol" name="rama">
						<option value="">--</option>
					<?php
						$sql = 'SELECT rama_id,rama FROM tor_ramas ORDER BY rama';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['rama_id'].'">'.utf8_encode($r['rama']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Buscar</button>
					<div class="clearfix"></div>
				</form><br>
				<div id="torneos"></div>
			<?php
				}elseif($_REQUEST['op'] == 2 && $_SESSION['type'] == 1){
			?>
				<a href="?op=1" id="back"></a>
				<h1>Nuevo torneo</h1><br>
				<form class="bluesteel" method="post" id="nuevoTorneo">
					<input type="hidden" name="action" value="nuevoTorneo">
					<label class="twocol">Nombre</label>
					<input class="ninecol" type="text" name="torneo">
					<div class="clearfix"></div>
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte">
					<?php
						$sql = 'SELECT deporte_id,deporte FROM tor_deportes ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'">'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Rama</label>
					<select class="twocol" name="rama">
					<?php
						$sql = 'SELECT rama_id,rama FROM tor_ramas ORDER BY rama';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['rama_id'].'">'.utf8_encode($r['rama']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Guardar</button>
					<div class="clearfix"></div>
				</form>
			<?php
				}elseif($_REQUEST['op'] == 3 && $_REQUEST['t'] != '' && $_SESSION['type'] == 1){
					$_REQUEST['t'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['t']));
					$sql = 'SELECT torneo_id,torneo,deporte_id,rama_id FROM tor_torneos
							WHERE torneo_id='.$_REQUEST['t'];
					$result = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($result) > 0){
						$t = @mysqli_fetch_array($result,MYSQLI_BOTH);
			?>
				<a href="?op=1" id="back"></a>
				<h1>Editar torneo</h1><br>
				<form class="bluesteel" method="post" id="editaTorneo">
					<input type="hidden" name="action" value="editaTorneo">
					<input type="hidden" name="t" value="<?php echo $_REQUEST['t']; ?>">
					<label class="twocol">Nombre</label>
					<input class="ninecol last" type="text" name="torneo" value="<?php echo utf8_encode($t['torneo']); ?>">
					<div class="clearfix"></div>
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte">
					<?php
						$sql = 'SELECT deporte_id,deporte FROM tor_deportes ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'"';
							if($r['deporte_id'] == $t['deporte_id']) echo ' selected';
							echo '>'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Rama</label>
					<select class="twocol" name="rama">
					<?php
						$sql = 'SELECT rama_id,rama FROM tor_ramas ORDER BY rama';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['rama_id'].'"';
							if($r['rama_id'] == $t['rama_id']) echo ' selected';
							echo '>'.utf8_encode($r['rama']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Guardar</button>
					<div class="clearfix"></div>
				</form>
			<?php
					}
				}elseif($_REQUEST['op'] == 4 && $_SESSION['type'] == 1){
			?>
				<a class="link right" href="?op=5">NUEVO EQUIPO</a>
				<a href="torneos.php" id="back"></a>
				<h1>Buscar equipo</h1><br>
				<form class="bluesteel" method="post" id="buscaEquipo">
					<input type="hidden" name="action" value="buscaEquipo">
					<label class="twocol">Nombre</label>
					<input class="tencol last" type="text" name="equipo">
					<div class="clearfix"></div>
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte">
						<option value="">--</option>
					<?php
						$sql = 'SELECT deporte_id,deporte FROM tor_deportes ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'">'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Rama</label>
					<select class="twocol" name="rama">
						<option value="">--</option>
					<?php
						$sql = 'SELECT rama_id,rama FROM tor_ramas ORDER BY rama';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['rama_id'].'">'.utf8_encode($r['rama']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Estatus</label>
					<select class="twocol" name="estatus">
						<option value="">--</option>
						<option value="1">Vigente</option>
						<option value="0">No vigente</option>
					</select>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Buscar</button>
					<div class="clearfix"></div>
				</form><br>
				<div id="equipos"></div>
			<?php
				}elseif($_REQUEST['op'] == 5 && $_SESSION['type'] == 1){
			?>
				<a href="?op=4" id="back"></a>
				<h1>Nuevo equipo</h1><br>
				<form class="bluesteel" method="post" id="nuevoEquipo">
					<input type="hidden" name="action" value="nuevoEquipo">
					<label class="twocol">Nombre</label>
					<input class="tencol last" type="text" name="equipo">
					<div class="clearfix"></div>
					<label class="twocol">Delegado</label>
					<input class="twocol" type="text" id="matricula" name="matricula" placeholder="Matrícula 8 dígitos">
					<input class="eightcol last" type="text" id="delegado" name="delegado">
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte">
					<?php
						$sql = 'SELECT deporte_id,deporte FROM tor_deportes ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'">'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Rama</label>
					<select class="twocol" name="rama">
					<?php
						$sql = 'SELECT rama_id,rama FROM tor_ramas ORDER BY rama';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['rama_id'].'">'.utf8_encode($r['rama']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Guardar</button>
					<div class="clearfix"></div>
				</form>
			<?php
				}elseif($_REQUEST['op'] == 6 && $_REQUEST['e'] != '' && $_SESSION['type'] == 1){
					$_REQUEST['e'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['e']));
					$sql = 'SELECT tor_equipos.equipo_id,tor_equipos.equipo,tor_equipos.delegado,tor_equipos.deporte_id,tor_equipos.rama_id,tor_equipos.vigente,usuarios.Nombre,usuarios.ApPat,usuarios.ApMat FROM tor_equipos
							INNER JOIN usuarios ON tor_equipos.delegado = usuarios.Usuario
							WHERE equipo_id='.$_REQUEST['e'];
					$equipos = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($equipos) > 0){
						$e = @mysqli_fetch_array($equipos,MYSQLI_BOTH );
			?>
				<a href="?op=4" id="back"></a>
				<h1>Editar equipo</h1><br>
				<form class="bluesteel" method="post" id="editaEquipo">
					<input type="hidden" name="action" value="editaEquipo">
					<input type="hidden" name="e" value="<?php echo $_REQUEST['e']; ?>">
					<label class="twocol">Nombre</label>
					<input class="tencol last" type="text" name="equipo" value="<?php echo utf8_encode($e['equipo']); ?>">
					<div class="clearfix"></div>
					<label class="twocol">Delegado</label>
					<input class="twocol" type="text" id="matricula" name="matricula" placeholder="Matrícula 8 dígitos" value="<?php echo utf8_encode($e['delegado']); ?>">
					<input class="eightcol last" type="text" id="delegado" name="delegado" value="<?php echo utf8_encode($e['Nombre'].' '.$e['ApPat'].' '.$e['ApMat']); ?>">
					<div class="clearfix"></div>
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte">
					<?php
						$sql = 'SELECT deporte_id,deporte FROM tor_deportes ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'"';
							if($r['deporte_id'] == $e['deporte_id']) echo ' selected';
							echo '>'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Rama</label>
					<select class="twocol" name="rama">
					<?php
						$sql = 'SELECT rama_id,rama FROM tor_ramas ORDER BY rama';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['rama_id'].'"';
							if($r['rama_id'] == $e['rama_id']) echo ' selected';
							echo '>'.utf8_encode($r['rama']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Vigente</label>
					<select class="twocol" name="vigente">
						<option value="1"<?php if($e['vigente'] == 1) echo ' selected'; ?>>Si</option>
						<option value="0"<?php if($e['vigente'] == 0) echo ' selected'; ?>>No</option>
					</select>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Guardar</button>
					<div class="clearfix"></div>
				</form>
			<?php
					}
					@mysqli_free_result($equipos);
				}elseif($_REQUEST['op'] == 7 && $_REQUEST['t'] != '' && $_SESSION['type'] == 1){
					$_REQUEST['t'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['t']));
			?>
				<a href="?op=1" id="back"></a>
				<h1>Roles de juego</h1><br>
			<?php
					$sql = 'SELECT tor_torneos.torneo,tor_deportes.deporte_id,tor_deportes.deporte,tor_ramas.rama_id,tor_ramas.rama FROM tor_torneos
							INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
							INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
							WHERE tor_torneos.torneo_id='.$_REQUEST['t'];
					$torneos = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($torneos) > 0){
						$t = @mysqli_fetch_array($torneos,MYSQLI_BOTH);
						echo '<strong>'.utf8_encode($t['torneo'].'<br><span style="font-size: 18px;">'.$t['deporte'].' - '.$t['rama']).'</span></strong><br><br>';
						$sql = 'SELECT DISTINCT torneo_id FROM tor_partidos WHERE torneo_id='.$_REQUEST['t'];
						$partidos = @mysqli_query($dbc,$sql);
						if(@mysqli_num_rows($partidos) < 1){
			?>
				<form class="bluesteel" id="cargaGrupos" method="post">
					<input type="hidden" name="action" value="cargaGrupos">
					<input type="hidden" name="t" value="<?php echo $_REQUEST['t']; ?>">
			<?php
							for($y = 1; $y < 5; $y++){
			?>
					<div class="grupo" id="grupo<?php echo $y; ?>">
						<label class="threecol">Serie</label>
						<select class="ninecol last" name="grupo<?php echo $y; ?>">
							<option value="">--</option>
							<?php
								$sql = 'SELECT tor_grupos.grupo_id,tor_grupos.grupo FROM tor_grupos ORDER BY tor_grupos.grupo_id';
								$result = @mysqli_query($dbc,$sql);
								while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
									echo '<option value="'.$r['grupo_id'].'">'.utf8_encode($r['grupo']).'</option>';
								}
								@mysqli_free_result($result);
							?>
						</select>
						<div class="clearfix"></div><br>
							<?php
								for($x = 1; $x < 7; $x++){
									echo '<label class="threecol">'.$x.'</label>
							<select class="ninecol last" name="g'.$y.'e'.$x.'"><option value="">--</option>';
									$sql = 'SELECT DISTINCT tor_equipos.equipo_id,tor_equipos.equipo FROM tor_equipos
											INNER JOIN tor_torneos ON tor_torneos.deporte_id = tor_equipos.deporte_id AND tor_torneos.rama_id = tor_equipos.rama_id
											WHERE tor_torneos.torneo_id='.$_REQUEST['t'].' AND tor_equipos.deporte_id='.$t['deporte_id'].' AND tor_equipos.rama_id='.$t['rama_id'].' AND tor_equipos.vigente=1
											ORDER BY tor_equipos.equipo';
									$result = @mysqli_query($dbc,$sql);
									while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
										echo '<option value="'.$r['equipo_id'].'">'.utf8_encode($r['equipo']).'</option>';
									}
									echo '</select>';
									@mysqli_free_result($result);
								}
							?>
						<div class="clearfix"></div>
					</div>
			<?php
							}
			?>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">VER ROL DE JUEGOS</button>
					<div class="clearfix"></div>
				</form>
				<div id="roles"></div>
			<?php
						}else{
							$sql = 'SELECT tor_partidos.partido_id,tor_partidos.jornada,tor_partidos.local,tor_partidos.visitante,tor_partidos.descansa,tor_partidos.fecha,tor_partidos.hora,tor_canchas.cancha,tor_grupos.grupo,tor_partidos.tipo_id,tor_tipo_partidos.tor_tipo_partido FROM tor_partidos
									LEFT JOIN tor_grupos ON tor_partidos.grupo_id = tor_grupos.grupo_id
									LEFT JOIN tor_canchas ON tor_partidos.cancha_id = tor_canchas.cancha_id
									INNER JOIN tor_tipo_partidos ON tor_partidos.tipo_id = tor_tipo_partidos.tor_tipo_partido_id
									WHERE tor_partidos.torneo_id='.$_REQUEST['t'].'
									ORDER BY tor_partidos.jornada,tor_partidos.fecha,tor_partidos.hora,tor_partidos.tipo_id';
							$roles = @mysqli_query($dbc,$sql);
							echo '<table class="roles" align="center" border="1" cellpadding="5" cellspacing="0"><th>Juego</th><th>Local</th><th></th><th>Visitante</th><th>Descansa</th><th>Fecha</th><th>Hora</th><th>Lugar</th><th>Serie</th><th></th>';
							$x = 1;
							$jor = 0;
							$tipo = '';
							while($r = @mysqli_fetch_array($roles,MYSQLI_BOTH )){
								if($r['jornada'] != $jor || $jor == 99){
									$jor = $r['jornada'];
									if($jor != 99){
										echo '<tr><th colspan="10">Jornada '.$jor.'</th></tr>';
									}else{
										if($tipo != $r['tor_tipo_partido']){
											$tipo = $r['tor_tipo_partido'];
											echo '<tr><th colspan="10">'.$r['tor_tipo_partido'].'</th></tr>';
										}
									}
								}
								$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['local'];
								$local = @mysqli_query($dbc,$sql);
								$l = @mysqli_fetch_array($local,MYSQLI_BOTH );
								$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['visitante'];
								$visitante = @mysqli_query($dbc,$sql);
								$v = @mysqli_fetch_array($visitante,MYSQLI_BOTH );
								$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['descansa'];
								$descansa = @mysqli_query($dbc,$sql);
								$d = @mysqli_fetch_array($descansa,MYSQLI_BOTH );
								echo '<tr><td align="center">'.$x.'</td><td align="center">'.utf8_encode($l['equipo']).'</td><td>vs</td><td align="center">'.utf8_encode($v['equipo']).'</td><td align="center">'.utf8_encode($d['equipo']).'</td><td align="center">'.$r['fecha'].'</td><td align="center">'.$r['hora'].'</td><td align="center">'.utf8_encode($r['cancha']).'</td><td align="center">'.$r['grupo'].'</td><td><a class="link" href="?op=8&t='.$_REQUEST['t'].'&p='.$r['partido_id'].'">Editar</a></td></tr>';
								$x++;
							}
							echo '</table><br>';
							@mysqli_free_result($roles);
			?>
				<strong>Agregar partido</strong><br><br>
				<form class="bluesteel" id="agregaPartido" method="post">
					<input type="hidden" name="action" value="agregaPartido">
					<input type="hidden" name="t" value="<?php echo $_REQUEST['t']; ?>">
					<label class="onecol">Tipo</label>
					<select class="threecol" name="tipo">
						<option value="0">--</option>
					<?php
						$sql = 'SELECT tor_tipo_partidos.tor_tipo_partido_id,tor_tipo_partidos.tor_tipo_partido FROM tor_tipo_partidos
								WHERE tor_tipo_partidos.tor_tipo_partido_id<>1
								ORDER BY tor_tipo_partidos.tor_tipo_partido_id';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['tor_tipo_partido_id'].'">'.utf8_encode($r['tor_tipo_partido']).'</option>';
						}
					?>
					</select>
					<label class="onecol">Serie</label>
					<select class="threecol" name="grupo">
						<option value="0">--</option>
					<?php
						$sql = 'SELECT DISTINCT tor_grupos.grupo_id,tor_grupos.grupo FROM tor_grupos
								ORDER BY tor_grupos.grupo_id';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['grupo_id'].'">'.utf8_encode($r['grupo']).'</option>';
						}
					?>
					</select>
					<div class="clearfix"></div>
					<label class="onecol">Local</label>
					<select class="fivecol" name="local">
					<?php
						$sql = 'SELECT DISTINCT tor_equipos.equipo_id,tor_equipos.equipo FROM tor_equipos
								INNER JOIN tor_torneos ON tor_torneos.deporte_id = tor_equipos.deporte_id AND tor_torneos.rama_id = tor_equipos.rama_id
								WHERE tor_torneos.torneo_id='.$_REQUEST['t'].' AND tor_equipos.deporte_id='.$t['deporte_id'].' AND tor_equipos.rama_id='.$t['rama_id'].' AND tor_equipos.vigente=1
								ORDER BY tor_equipos.equipo';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['equipo_id'].'">'.utf8_encode($r['equipo']).'</option>';
						}
					?>
					</select>
					<label class="onecol">Visitante</label>
					<select class="fivecol last" name="visitante">
					<?php
						$sql = 'SELECT DISTINCT tor_equipos.equipo_id,tor_equipos.equipo FROM tor_equipos
								INNER JOIN tor_torneos ON tor_torneos.deporte_id = tor_equipos.deporte_id AND tor_torneos.rama_id = tor_equipos.rama_id
								WHERE tor_torneos.torneo_id='.$_REQUEST['t'].' AND tor_equipos.deporte_id='.$t['deporte_id'].' AND tor_equipos.rama_id='.$t['rama_id'].' AND tor_equipos.vigente=1
								ORDER BY tor_equipos.equipo';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['equipo_id'].'">'.utf8_encode($r['equipo']).'</option>';
						}
					?>
					</select>
					<label class="onecol">Fecha</label>
					<input class="twocol" type="text" name="fecha" id="fecha" value="<?php echo $r['fecha']; ?>">
					<label class="onecol">Hora</label>
					<input class="twocol" type="text" name="hora" id="hora" value="<?php echo $r['hora']; ?>">
					<label class="onecol">Cancha</label>
					<select class="fivecol last" name="cancha">
						<option value="">--</option>
					<?php
						$sql = 'SELECT tor_canchas.cancha_id,tor_canchas.cancha FROM tor_canchas
								WHERE tor_canchas.deporte_id='.$t['deporte_id'].'
								ORDER BY tor_canchas.cancha';
						$canchas = @mysqli_query($dbc,$sql);
						while($c = @mysql_fetch_array($canchas)){
							echo '<option value="'.$c['cancha_id'].'"';
							if($c['cancha_id'] == $r['cancha_id']) echo ' selected';
							echo '>'.utf8_encode($c['cancha']).'</option>';
						}
					?>
					</select>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">GUARDAR</button>
					<div class="clearfix"></div>
				</form><br><br>
			<?php
						}
					}
					@mysqli_free_result($torneos);
				}elseif($_REQUEST['op'] == 8 && $_REQUEST['t'] != '' && $_REQUEST['p'] != '' && $_SESSION['type'] == 1){
					$_REQUEST['t'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['t']));
					$_REQUEST['p'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['p']));
			?>
				<a href="?op=7&t=<?php echo $_REQUEST['t']; ?>" id="back"></a>
				<h1>Editar partido</h1><br>
			<?php
					$sql = 'SELECT tor_torneos.torneo,tor_deportes.deporte_id,tor_deportes.deporte,tor_ramas.rama FROM tor_torneos
							INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
							INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
							WHERE tor_torneos.torneo_id='.$_REQUEST['t'];
					$torneos = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($torneos) > 0){
						$t = @mysqli_fetch_array($torneos,MYSQLI_BOTH );
						echo '<strong>'.utf8_encode($t['torneo'].'<br><span style="font-size: 18px;">'.$t['deporte'].' - '.$t['rama']).'</span></strong><br><br>';
						$sql = 'SELECT tor_partidos.partido_id,tor_partidos.torneo_id,tor_partidos.jornada,tor_partidos.local,tor_partidos.visitante,tor_partidos.descansa,tor_partidos.grupo_id,tor_partidos.fecha,tor_partidos.hora,tor_partidos.cancha_id,tor_partidos.tipo_id FROM tor_partidos
								WHERE tor_partidos.partido_id='.$_REQUEST['p'];
						$result = @mysqli_query($dbc,$sql);
						$r = @mysqli_fetch_array($result,MYSQLI_BOTH);
						@mysqli_free_result($result);
						$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['local'];
						$local = @mysqli_query($dbc,$sql);
						$l = @mysqli_fetch_array($local,MYSQLI_BOTH );
						$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['visitante'];
						$visitante = @mysqli_query($dbc,$sql);
						$v = @mysqli_fetch_array($visitante,MYSQLI_BOTH );
			?>
				<form class="bluesteel" id="editaPartido" method="post">
					<div id="versus">
						<?php echo utf8_encode('<strong>'.$l['equipo'].'</strong> vs <strong>'.$v['equipo'].'</strong>'); ?>
					</div><br>
					<input type="hidden" name="action" value="editaPartido">
					<input type="hidden" name="p" value="<?php echo $_REQUEST['p']; ?>">
					<input type="hidden" name="d" value="<?php echo $t['deporte_id']; ?>">
					<label class="onecol">Fecha</label>
					<input class="twocol" type="text" name="fecha" id="fecha" value="<?php echo $r['fecha']; ?>">
					<label class="onecol">Hora</label>
					<input class="twocol" type="text" name="hora" id="hora" value="<?php echo $r['hora']; ?>">
					<label class="onecol">Cancha</label>
					<select class="fivecol last" name="cancha">
						<option value="">--</option>
					<?php
						$sql = 'SELECT tor_canchas.cancha_id,tor_canchas.cancha FROM tor_canchas
								WHERE tor_canchas.deporte_id='.$t['deporte_id'].'
								ORDER BY tor_canchas.cancha';
						$canchas = @mysqli_query($dbc,$sql);
						while($c = @mysqli_fetch_array($canchas,MYSQLI_BOTH )){
							echo '<option value="'.$c['cancha_id'].'"';
							if($c['cancha_id'] == $r['cancha_id']) echo ' selected';
							echo '>'.utf8_encode($c['cancha']).'</option>';
						}
					?>
					</select>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">GUARDAR</button>
					<div class="clearfix"></div>
				</form>
			<?php
					}
				}elseif($_REQUEST['op'] == 9 && $_SESSION['type'] == 1){
			?>
				<a class="link right" href="?op=10">NUEVA CANCHA</a>
				<a href="torneos.php" id="back"></a>
				<h1>Buscar canchas</h1><br>
				<form class="bluesteel" method="post" id="buscaCancha">
					<input type="hidden" name="action" value="buscaCancha">
					<label class="twocol">Nombre</label>
					<input class="ninecol" type="text" name="cancha">
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Buscar</button>
					<div class="clearfix"></div>
				</form><br>
				<div id="canchas"></div>
			<?php
				}elseif($_REQUEST['op'] == 10 && $_SESSION['type'] == 1){
			?>
				<a href="?op=9" id="back"></a>
				<h1>Nueva cancha</h1><br>
				<form class="bluesteel" method="post" id="nuevaCancha">
					<input type="hidden" name="action" value="nuevaCancha">
					<label class="twocol">Nombre</label>
					<input class="tencol last" type="text" name="cancha">
					<label class="twocol">Descripción</label>
					<input class="tencol last" type="text" name="descripcion">
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte" id="deporte">
						<option value="">--</option>
					<?php
						$sql = 'SELECT DISTINCT tor_deportes.deporte_id,tor_deportes.deporte FROM tor_deportes
								ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'">'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<div class="clearfix"></div>
					<label class="twocol">Latitud</label>
					<input class="fourcol" type="text" name="latitud" id="latitud" readonly>
					<label class="twocol">Longitud</label>
					<input class="fourcol last" type="text" name="longitud" id="longitud" readonly>
					<div class="clearfix"></div>
					<label class="twocol">Ubicación</label>
					<div class="tencol last">
						<div id="map"></div>
					</div>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Guardar</button>
					<div class="clearfix"></div>
				</form>
			<?php
				}elseif($_REQUEST['op'] == 11 && $_REQUEST['c'] != '' && $_SESSION['type'] == 1){
					$_REQUEST['c'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['c']));
					$sql = 'SELECT cancha_id,cancha,descripcion,deporte_id,contacto,responsable,direccion,latitud,longitud FROM tor_canchas
							WHERE cancha_id='.$_REQUEST['c'];
					$result = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($result) > 0){
						$c = @mysqli_fetch_array($result,MYSQLI_BOTH);
			?>
				<a href="?op=9" id="back"></a>
				<h1>Editar cancha</h1><br>
				<form class="bluesteel" method="post" id="editaCancha">
					<input type="hidden" name="action" value="editaCancha">
					<input type="hidden" name="c" value="<?php echo $_REQUEST['c']; ?>">
					<label class="twocol">Nombre</label>
					<input class="tencol last" type="text" name="cancha" value="<?php echo utf8_encode($c['cancha']); ?>">
					<label class="twocol">Descripción</label>
					<input class="tencol last" type="text" name="descripcion" value="<?php echo utf8_encode($c['descripcion']); ?>">
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte" id="deporte">
						<option value="">--</option>
					<?php
						$sql = 'SELECT DISTINCT tor_deportes.deporte_id,tor_deportes.deporte FROM tor_deportes
								ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'"';
							if($r['deporte_id'] == $c['deporte_id']) echo ' selected';
							echo '>'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<div class="clearfix"></div>
					<label class="twocol">Latitud</label>
					<input class="fourcol" type="text" name="latitud" id="latitud" readonly value="<?php echo utf8_encode($c['latitud']); ?>">
					<label class="twocol">Longitud</label>
					<input class="fourcol last" type="text" name="longitud" id="longitud" readonly value="<?php echo utf8_encode($c['longitud']); ?>">
					<div class="clearfix"></div>
					<label class="twocol">Ubicación</label>
					<div class="tencol last">
						<div id="map"></div>
					</div>
					<div class="clearfix"></div>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit">Guardar</button>
					<div class="clearfix"></div>
				</form>
			<?php
					}
				}elseif($_REQUEST['op'] == 12){
					if(isset($_REQUEST['p'])) $_REQUEST['p'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['p']));
					if(isset($_REQUEST['d'])) $_REQUEST['d'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['d']));
					if(isset($_REQUEST['r'])) $_REQUEST['r'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['r']));
					if(isset($_REQUEST['t'])) $_REQUEST['t'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['t']));
			?>
				<a href="torneos.php" id="back"></a>
				<h1>Marcadores</h1><br>
				<form class="bluesteel" method="post" id="muestraPartidos">
					<label class="twocol">Disciplina</label>
					<select class="threecol" name="deporte" id="deporte">
						<option value="">--</option>
					<?php
						$sql = 'SELECT DISTINCT tor_deportes.deporte_id,tor_deportes.deporte FROM tor_torneos
								INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
								ORDER BY deporte';
						$result = @mysqli_query($dbc,$sql);
						while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
							echo '<option value="'.$r['deporte_id'].'"';
							if(isset($_REQUEST['d']) && $_REQUEST['d'] == $r['deporte_id']) echo ' selected';
							echo '>'.utf8_encode($r['deporte']).'</option>';
						}
						@mysqli_free_result($result);
					?>
					</select>
					<label class="onecol">Rama</label>
					<select class="twocol" name="rama" id="rama">
						<option value="">--</option>
					<?php
						if(isset($_REQUEST['r'])){
							$sql = 'SELECT DISTINCT tor_torneos.rama_id,tor_ramas.rama FROM tor_torneos
									INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
									WHERE tor_torneos.deporte_id='.$_REQUEST['d'].'
									ORDER BY tor_ramas.rama';
							$result = @mysqli_query($dbc,$sql);
							while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
								echo '<option value="'.$r['rama_id'].'"';
								if(isset($_REQUEST['r']) && $_REQUEST['r'] == $r['rama_id']) echo ' selected';
								echo '>'.utf8_encode($r['rama']).'</option>';
							}
							@mysqli_free_result($result);
						}
					?>
					</select>
					<div class="clearfix"></div>
					<label class="twocol">Torneo</label>
					<select class="ninecol" name="torneo" id="torneo">
						<option value="">--</option>
					<?php
						if(isset($_REQUEST['t'])){
							$sql = 'SELECT DISTINCT tor_torneos.torneo_id,tor_torneos.torneo FROM tor_torneos
									WHERE tor_torneos.deporte_id='.$_REQUEST['d'].' AND tor_torneos.rama_id='.$_REQUEST['r'].'
									ORDER BY tor_torneos.torneo_id DESC';
							$result = @mysqli_query($dbc,$sql);
							while($r = @mysqli_fetch_array($result,MYSQLI_BOTH)){
								echo '<option value="'.$r['torneo_id'].'"';
								if(isset($_REQUEST['t']) && $_REQUEST['t'] == $r['torneo_id']) echo ' selected';
								echo '>'.utf8_encode($r['torneo']).'</option>';
							}
							@mysqli_free_result($result);
						}
					?>
					</select>
					<div class="clearfix"></div>
				</form><br>
				<div id="partidos"></div>
			<?php
					if(isset($_REQUEST['t']) && $_REQUEST['t'] != '') echo '<script type="text/javascript">$(document).ready(function(){ $("#muestraPartidos #torneo").change(); });</script>';
				}elseif($_REQUEST['op'] == 13){
					if(isset($_REQUEST['p'])) $_REQUEST['p'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['p']));
					if(isset($_REQUEST['d'])) $_REQUEST['d'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['d']));
					if(isset($_REQUEST['r'])) $_REQUEST['r'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['r']));
					if(isset($_REQUEST['t'])) $_REQUEST['t'] = htmlspecialchars(mysqli_real_escape_string($dbc,$_REQUEST['t']));
					$back = 'torneos.php?op=12&d='.$_REQUEST['d'].'&r='.$_REQUEST['r'].'&t='.$_REQUEST['t'];
			?>
				<a href="<?php echo $back; ?>" id="back"></a>
				<h1>Editar marcador</h1><br>
			<?php
					$sql = 'SELECT tor_torneos.torneo,tor_deportes.deporte_id,tor_deportes.deporte,tor_ramas.rama,tor_partidos.`local`,tor_partidos.visitante FROM tor_partidos
							INNER JOIN tor_torneos ON tor_partidos.torneo_id = tor_torneos.torneo_id
							INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
							INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
							WHERE tor_partidos.partido_id='.$_REQUEST['p'];
					$partido = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($partido) > 0){
						$p = @mysqli_fetch_array($partido,MYSQLI_BOTH );
						echo '<strong>'.utf8_encode($p['torneo'].' - '.$p['deporte'].' '.$p['rama']).'</strong><br><br>';
						$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$p['local'];
						$local = @mysqli_query($dbc,$sql);
						$l = @mysqli_fetch_array($local,MYSQLI_BOTH );
						$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$p['visitante'];
						$visitante = @mysqli_query($dbc,$sql);
						$v = @mysqli_fetch_array($visitante,MYSQLI_BOTH );
						$sql = 'SELECT tor_marcadores.ganador_id,tor_marcadores.extra_id,tor_marcadores.marcador_local,tor_marcadores.marcador_visitante,tor_marcadores.favor_local,tor_marcadores.favor_visitante FROM tor_marcadores
								WHERE tor_marcadores.partido_id='.$_REQUEST['p'];
						$marcador = @mysqli_query($dbc,$sql);
						if(@mysqli_num_rows($marcador) > 0){
							$m = @mysqli_fetch_array($marcador,MYSQLI_BOTH );
							$ganador = $m['ganador_id'];
							$extra = $m['extra_id'];
							$mlocal = $m['marcador_local'];
							$mvisitante = $m['marcador_visitante'];
							$flocal = $m['favor_local'];
							$fvisitante = $m['favor_visitante'];
						}else{
							$ganador = -1;
							$extra = '';
							$mlocal = '';
							$mvisitante = '';
							$flocal = '';
							$fvisitante = '';
						}
			?>
				<form class="bluesteel" method="post" id="guardaMarcador">
					<input type="hidden" name="action" value="guardaMarcador">
					<input type="hidden" name="p" value="<?php echo $_REQUEST['p']; ?>">
					<input type="hidden" name="d" value="<?php echo $p['deporte_id']; ?>">
					<input type="hidden" name="t" value="<?php echo $_REQUEST['t']; ?>">
					<label class="twocol"><strong>Ganador</strong></label>
					<label class="twocol"><input type="radio" name="ganador" value="<?php echo $p['local']; ?>" class="noempate"<?php if($ganador == $p['local']) echo ' checked'; ?>> <?php echo utf8_encode($l['equipo']); ?></label>
				<?php if($p['deporte_id'] == 1 || $p['deporte_id'] == 4 || $p['deporte_id'] == 5 || $p['deporte_id'] == 9){ ?>
					<label class="twocol"><input type="radio" name="ganador" value="0" id="empate"<?php if($ganador == 0) echo ' checked'; ?>> Empate</label>
				<?php } ?>
					<label class="twocol"><input type="radio" name="ganador" value="<?php echo $p['visitante']; ?>" class="noempate"<?php if($ganador == $p['visitante']) echo ' checked'; ?>> <?php echo utf8_encode($v['equipo']); ?></label>
					<div class="clearfix"></div>
				<?php if($p['deporte_id'] == 4 || $p['deporte_id'] == 5){ ?>
					<label class="twocol extra"<?php if($ganador == 0) echo ' style="display: block;"'; ?>><strong>Punto extra</strong></label>
					<label class="twocol extra"<?php if($ganador == 0) echo ' style="display: block;"'; ?>><input type="radio" name="extra" value="<?php echo $p['local']; ?>"<?php if($extra == $p['local']) echo ' checked'; ?>> <?php echo utf8_encode($l['equipo']); ?></label>
					<label class="twocol extra"<?php if($ganador == 0) echo ' style="display: block;"'; ?>><input type="radio" name="extra" value="<?php echo $p['visitante']; ?>"<?php if($extra == $p['visitante']) echo ' checked'; ?>> <?php echo utf8_encode($v['equipo']); ?></label>
				<?php } ?>
					<div class="clearfix"></div>
				<?php if($p['deporte_id'] == 7){ ?>
					<label class="twocol"><strong>Marcador final</strong></label>
					<label class="twocol"><?php echo utf8_encode($l['equipo']); ?></label>
					<select class="onecol" name="mLocal">
						<option value="0"<?php if($mlocal == 0) echo ' selected'; ?>>0</option>
						<option value="1"<?php if($mlocal == 1) echo ' selected'; ?>>1</option>
						<option value="2"<?php if($mlocal == 2) echo ' selected'; ?>>2</option>
					</select>
					<label class="twocol"><?php echo utf8_encode($v['equipo']); ?></label>
					<select class="onecol" name="mVisitante">
						<option value="0"<?php if($mvisitante == 0) echo ' selected'; ?>>0</option>
						<option value="1"<?php if($mvisitante == 1) echo ' selected'; ?>>1</option>
						<option value="2"<?php if($mvisitante == 2) echo ' selected'; ?>>2</option>
					</select>
					<div class="clearfix"></div>
					<label class="twocol"><strong>Suma de parciales</strong></label>
					<label class="twocol"><?php echo utf8_encode($l['equipo']); ?></label>
					<input class="onecol" type="text" name="favorLocal" value="<?php echo $flocal; ?>"></input>
					<label class="twocol"><?php echo utf8_encode($v['equipo']); ?></label>
					<input class="onecol" type="text" name="favorVisitante" value="<?php echo $fvisitante; ?>"></input>
					<div class="clearfix"></div>
				<?php }else{ ?>
					<label class="twocol"><strong>Marcador final</strong></label>
					<label class="twocol"><?php echo utf8_encode($l['equipo']); ?></label>
					<input class="onecol" type="text" name="mLocal" value="<?php echo $mlocal; ?>"></input>
					<label class="twocol"><?php echo utf8_encode($v['equipo']); ?></label>
					<input class="onecol" type="text" name="mVisitante" value="<?php echo $mvisitante; ?>"></input>
					<div class="clearfix"></div>
				<?php } ?>
					<label class="fourcol"></label>
					<button class="fourcol" type="submit" id="btnGuarda">Guardar</button>
					<div class="clearfix"></div>
				</form>
			<?php
					}
				}
				@mysqli_close($dbc);
			?>
			<p style="display: none;" id="msgGuardado">Guardado</p>
			<script>
				document.getElementById("btnGuarda").onclick = function() {myFunction()};
				function myFunction() {
				  var x = document.getElementById("msgGuardado");
					x.style.display = "block";
				}
			</script>
			</section>
		</div>
	</body>
</html>
<?php
	}
?>