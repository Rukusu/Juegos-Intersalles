<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('../core.php');
	function estadistica($p){
		$sql = 'SELECT DISTINCT tor_partidos.partido_id,tor_partidos.torneo_id,tor_partidos.grupo_id,tor_equipos.equipo_id,tor_equipos.equipo,tor_equipos.deporte_id FROM tor_partidos
				INNER JOIN tor_equipos ON tor_partidos.local = tor_equipos.equipo_id
				WHERE tor_partidos.partido_id='.$p.'
				UNION
				SELECT DISTINCT tor_partidos.partido_id,tor_partidos.torneo_id,tor_partidos.grupo_id,tor_equipos.equipo_id,tor_equipos.equipo,tor_equipos.deporte_id FROM tor_partidos
				INNER JOIN tor_equipos ON tor_partidos.visitante = tor_equipos.equipo_id
				WHERE tor_partidos.partido_id='.$p;
		$partidos = @mysqli_query($dbc,$sql);
		$ok = 1;
		while($p = @mysqli_fetch_array($partidos,MYSQLI_BOTH )){
			// Jugados
			$sql = 'SELECT COUNT(tor_marcadores.marcador_id) AS jj FROM tor_marcadores
					INNER JOIN tor_partidos ON tor_partidos.partido_id = tor_marcadores.partido_id
					WHERE tor_partidos.tipo_id=1 AND (tor_partidos.local='.$p['equipo_id'].' OR tor_partidos.visitante='.$p['equipo_id'].')';
			$result = @mysqli_query($dbc,$sql);
			$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
			$jj = $r['jj'];
			// Ganados
			$sql = 'SELECT COUNT(tor_marcadores.marcador_id) AS jg FROM tor_marcadores
					INNER JOIN tor_partidos ON tor_partidos.partido_id = tor_marcadores.partido_id
					WHERE tor_partidos.tipo_id=1 AND tor_marcadores.ganador_id='.$p['equipo_id'];
			$result = @mysqli_query($dbc,$sql);
			$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
			$jg = $r['jg'];
			// Empatados
			$sql = 'SELECT COUNT(tor_marcadores.marcador_id) AS je FROM tor_marcadores
					INNER JOIN tor_partidos ON tor_partidos.partido_id = tor_marcadores.partido_id
					WHERE tor_partidos.tipo_id=1 AND (tor_partidos.local='.$p['equipo_id'].' OR tor_partidos.visitante='.$p['equipo_id'].') AND tor_marcadores.ganador_id=0';
			$result = @mysqli_query($dbc,$sql);
			$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
			$je = $r['je'];
			// Perdidos
			$sql = 'SELECT COUNT(tor_marcadores.marcador_id) AS jp FROM tor_marcadores
					INNER JOIN tor_partidos ON tor_partidos.partido_id = tor_marcadores.partido_id
					WHERE tor_partidos.tipo_id=1 AND (tor_partidos.local='.$p['equipo_id'].' OR tor_partidos.visitante='.$p['equipo_id'].') AND tor_marcadores.ganador_id<>0 AND tor_marcadores.ganador_id<>'.$p['equipo_id'];
			// echo $sql;
			$result = @mysqli_query($dbc,$sql);
			$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
			$jp = $r['jp'];
			// Ganados en penales
			$sql = 'SELECT COUNT(tor_marcadores.marcador_id) AS peg FROM tor_marcadores
					INNER JOIN tor_partidos ON tor_partidos.partido_id = tor_marcadores.partido_id
					WHERE tor_partidos.tipo_id=1 AND tor_marcadores.extra_id='.$p['equipo_id'];
			$result = @mysqli_query($dbc,$sql);
			$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
			$peg = $r['peg'];
			// A favor y en contra
			$favor = 0;
			$contra = 0;
			$sql = 'SELECT tor_marcadores.favor_local,tor_marcadores.favor_visitante FROM tor_partidos
					INNER JOIN tor_marcadores ON tor_partidos.partido_id = tor_marcadores.partido_id
					WHERE tor_partidos.tipo_id=1 AND tor_partidos.local='.$p['equipo_id'];
			$plocal = @mysqli_query($dbc,$sql);
			while($pl = @mysqli_fetch_array($plocal,MYSQLI_BOTH )){
				$favor += $pl['favor_local'];
				$contra += $pl['favor_visitante'];
			}
			$sql = 'SELECT tor_marcadores.favor_local,tor_marcadores.favor_visitante FROM tor_partidos
					INNER JOIN tor_marcadores ON tor_partidos.partido_id = tor_marcadores.partido_id
					WHERE tor_partidos.tipo_id=1 AND tor_partidos.visitante='.$p['equipo_id'];
			$pvisitante = @mysqli_query($dbc,$sql);
			while($pv = @mysqli_fetch_array($pvisitante,MYSQLI_BOTH )){
				$favor += $pv['favor_visitante'];
				$contra += $pv['favor_local'];
			}
			// Porcentaje
			$por = number_format($favor/$contra,2);
			// Diferencia
			$dif = $favor - $contra;
			// Puntos
			if($p['deporte_id'] == 1) // Ajedrez
				$pts = $jg+($je*.5);
			if($p['deporte_id'] == 3) // Basquetbol
				$pts = ($jg*2) + $jp;
			if($p['deporte_id'] == 4 || $p['deporte_id'] == 5) // Soccer y Rápido
				$pts = ($jg*3) + $je + $peg;
			if($p['deporte_id'] == 6) // Tenis
				$pts = ($jg*2) + $jp;
			if($p['deporte_id'] == 7) // Voleibol
				$pts = ($jg*2);
			if($p['deporte_id'] == 9) // Tocho bandera
				$pts = ($jg*2) + $je;
			if($p['deporte_id'] == 10) // Beisbol
				$pts = ($jg*2) + $jp;
			if($p['deporte_id'] == 11) // Hockey
				$pts = ($jg*2) + $jp;
			$sql = 'SELECT tor_estadisticas.equipo_id FROM tor_estadisticas WHERE tor_estadisticas.equipo_id='.$p['equipo_id'];
			$est = @mysqli_query($dbc,$sql);
			if(@mysqli_num_rows($est) == 0)
				$sql = 'INSERT INTO tor_estadisticas (torneo_id,grupo_id,equipo_id,jugados,ganados,empatados,perdidos,extra,favor,contra,porcentaje,diferencia,puntos) VALUES ('.$p['torneo_id'].','.$p['grupo_id'].','.$p['equipo_id'].','.$jj.','.$jg.','.$je.','.$jp.','.$peg.','.$favor.','.$contra.','.$por.','.$dif.','.$pts.')';
			else
				$sql = 'UPDATE tor_estadisticas SET jugados='.$jj.',ganados='.$jg.',empatados='.$je.',perdidos='.$jp.',extra='.$peg.',favor='.$favor.',contra='.$contra.',porcentaje='.$por.',diferencia='.$dif.',puntos='.$pts.'
						WHERE torneo_id='.$p['torneo_id'].' AND equipo_id='.$p['equipo_id'];
			if(!@mysqli_query($dbc,$sql))
				$ok = 0;
		}
		@mysqli_free_result($result);
		return $ok;
	}
	if(isset($_SESSION['user'])){
		if($_REQUEST['action'] == 'buscaTorneo'){
			$dbc = connect_bajio();
			$_REQUEST['torneo'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['torneo']));
			$f = 0;
			$sql = 'SELECT tor_torneos.torneo_id,tor_torneos.torneo,tor_deportes.deporte,tor_ramas.rama FROM tor_torneos
					INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
					INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id';
			if($_REQUEST['torneo'] != ''){
				$sql .= ' WHERE tor_torneos.torneo LIKE "%'.$_REQUEST['torneo'].'%"';
				$f = 1;
			}
			if($_REQUEST['deporte'] != ''){
				if($f) $sql .= ' AND';
				else $sql .= ' WHERE';
				$sql .= ' tor_torneos.deporte_id='.$_REQUEST['deporte'];
				$f = 1;
			}
			if($_REQUEST['rama'] != ''){
				if($f) $sql .= ' AND';
				else $sql .= ' WHERE';
				$sql .= ' tor_torneos.rama_id='.$_REQUEST['rama'];
				$f = 1;
			}
			$sql .= ' ORDER BY torneo_id DESC';
			$torneos = @mysqli_query($dbc,$sql);
			if(@mysqli_num_rows($torneos) > 0){
				while($t = @mysqli_fetch_array($torneos,MYSQLI_BOTH )){
					echo '<div class="item"><a class="link right" href="?op=3&t='.$t['torneo_id'].'">Editar</a><a class="link right" href="?op=7&t='.$t['torneo_id'].'">Roles</a>'.utf8_encode($t['torneo'].' - '.$t['deporte'].' - '.$t['rama']).'<div class="clearfix"></div></div>';
				}
			}else{
				echo 'La búsqueda no produjo resultados.';
			}
			@mysqli_free_result($torneos);
			@mysqli_close($dbc);
		}
		if($_REQUEST['action'] == 'nuevoTorneo'){
			$dbc = connect_bajio();
			$_REQUEST['torneo'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['torneo']));
			if($_REQUEST['torneo'] == ''){
				$warning = 'Debes escribir el nombre del torneo';
			}else{
				$sql = 'INSERT INTO tor_torneos (torneo,deporte_id,rama_id) VALUES ("'.utf8_decode($_REQUEST['torneo']).'",'.$_REQUEST['deporte'].','.$_REQUEST['rama'].')';
				if(@mysqli_query($dbc,$sql)){
					$success = 'Torneo guardado correctamente';
				}else{
					$error = 'Error al guardar el torneo';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'editaTorneo'){
			$dbc = connect_bajio();
			$_REQUEST['t'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['t']));
			$_REQUEST['torneo'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['torneo']));
			if($_REQUEST['torneo'] == ''){
				$warning = 'Debes escribir el nombre del torneo';
			}else{
				$sql = 'UPDATE tor_torneos SET torneo="'.utf8_decode($_REQUEST['torneo']).'",deporte_id='.$_REQUEST['deporte'].',rama_id='.$_REQUEST['rama'].'
						WHERE torneo_id='.$_REQUEST['t'];
				if(@mysqli_query($dbc,$sql)){
					$success = 'Torneo editado correctamente';
				}else{
					$error = 'Error al editar el torneo';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'buscaEquipo'){
			$dbc = connect_bajio();
			$_REQUEST['equipo'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['equipo']));
			$f = 0;
			$sql = 'SELECT tor_equipos.equipo_id,tor_equipos.equipo,tor_deportes.deporte,tor_ramas.rama,tor_equipos.vigente FROM tor_equipos
					INNER JOIN tor_deportes ON tor_equipos.deporte_id = tor_deportes.deporte_id
					INNER JOIN tor_ramas ON tor_equipos.rama_id = tor_ramas.rama_id';
			if($_REQUEST['equipo'] != ''){
				$sql .= ' WHERE tor_equipos.equipo LIKE "%'.$_REQUEST['equipo'].'%"';
				$f = 1;
			}
			if($_REQUEST['deporte'] != ''){
				if($f) $sql .= ' AND';
				else $sql .= ' WHERE';
				$sql .= ' tor_equipos.deporte_id='.$_REQUEST['deporte'];
				$f = 1;
			}
			if($_REQUEST['rama'] != ''){
				if($f) $sql .= ' AND';
				else $sql .= ' WHERE';
				$sql .= ' tor_equipos.rama_id='.$_REQUEST['rama'];
				$f = 1;
			}
			if($_REQUEST['estatus'] != ''){
				if($f) $sql .= ' AND';
				else $sql .= ' WHERE';
				$sql .= ' tor_equipos.vigente='.$_REQUEST['estatus'];
				$f = 1;
			}
			$sql .= ' ORDER BY equipo_id DESC';
			$equipos = @mysqli_query($dbc,$sql);
			if(@mysqli_num_rows($equipos) > 0){
				while($e = @mysqli_fetch_array($equipos,MYSQLI_BOTH )){
					if($e['vigente'] == 0) $vigente = ' inactive';
					else $vigente = '';
					echo '<div class="item'.$vigente.'"><a class="link right" href="?op=6&e='.$e['equipo_id'].'">Editar</a>'.utf8_encode($e['equipo'].' - '.$e['deporte'].' - '.$e['rama']).'<div class="clearfix"></div></div>';
				}
			}else{
				echo 'La búsqueda no produjo resultados.';
			}
			@mysqli_free_result($equipos);
			@mysqli_close($dbc);
		}
		if($_REQUEST['action'] == 'buscaUsuario' && isset($_REQUEST['usuario'])){
			$dbc = connect_bajio();
			$_REQUEST['usuario'] = htmlspecialchars($_REQUEST['usuario']);
			$sql = 'SELECT usuarios.Nombre,usuarios.ApPat,usuarios.ApMat FROM usuarios
					WHERE usuarios.Usuario="'.$_REQUEST['usuario'].'"';
			$result = @mysqli_query($dbc,$sql);
			if(@mysqli_num_rows($result) > 0){
				$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
				$success = utf8_encode('{"nombre":"'.$r['Nombre'].' '.$r['ApPat'].' '.$r['ApMat'].'"}');
			}
			@mysqli_close($dbc);
			if(isset($success)) echo '{"status":"Success","valor":['.$success.']}';
		}
		if($_REQUEST['action'] == 'nuevoEquipo'){
			$dbc = connect_bajio();
			$_REQUEST['equipo'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['equipo']));
			if($_REQUEST['equipo'] == ''){
				$warning = 'Debes escribir el nombre del equipo';
			}else{
				$sql = 'INSERT INTO tor_equipos (equipo,delegado,deporte_id,rama_id) VALUES ("'.utf8_decode($_REQUEST['equipo']).'","'.utf8_decode($_REQUEST['matricula']).'",'.$_REQUEST['deporte'].','.$_REQUEST['rama'].')';
				if(@mysqli_query($dbc,$sql)){
					$success = 'Equipo guardado correctamente';
				}else{
					$error = 'Error al guardar el equipo';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'editaEquipo'){
			$dbc = connect_bajio();
			$_REQUEST['e'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['e']));
			$_REQUEST['equipo'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['equipo']));
			if($_REQUEST['equipo'] == ''){
				$warning = 'Debes escribir el nombre del equipo';
			}else{
				$sql = 'UPDATE tor_equipos SET equipo="'.utf8_decode($_REQUEST['equipo']).'",delegado="'.utf8_decode($_REQUEST['matricula']).'",deporte_id='.$_REQUEST['deporte'].',rama_id='.$_REQUEST['rama'].',vigente='.$_REQUEST['vigente'].'
						WHERE equipo_id='.$_REQUEST['e'];
				if(@mysqli_query($dbc,$sql)){
					$success = 'Equipo editado correctamente';
				}else{
					$error = 'Error al editar el equipo';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'buscaCancha'){
			$dbc = connect_bajio();
			$_REQUEST['cancha'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['cancha']));
			$f = 0;
			$sql = 'SELECT tor_canchas.cancha_id,tor_canchas.cancha,tor_deportes.deporte FROM tor_canchas
					LEFT JOIN tor_deportes ON tor_canchas.deporte_id=tor_deportes.deporte_id';
			if($_REQUEST['cancha'] != ''){
				$sql .= ' WHERE tor_canchas.cancha LIKE "%'.$_REQUEST['cancha'].'%"';
				$f = 1;
			}
			$sql .= ' ORDER BY cancha';
			$canchas = @mysqli_query($dbc,$sql);
			if(@mysqli_num_rows($canchas) > 0){
				while($c = @mysqli_fetch_array($canchas,MYSQLI_BOTH )){
					echo '<div class="item"><a class="link right" href="?op=11&c='.$c['cancha_id'].'">Editar</a>'.utf8_encode($c['cancha']).' - '.utf8_encode($c['deporte']).'<div class="clearfix"></div></div>';
				}
			}else{
				echo 'La búsqueda no produjo resultados.';
			}
			@mysqli_free_result($canchas);
			@mysqli_close($dbc);
		}
		if($_REQUEST['action'] == 'nuevaCancha'){
			$dbc = connect_bajio();
			$_REQUEST['cancha'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['cancha']));
			if($_REQUEST['cancha'] == ''){
				$warning = 'Debes escribir el nombre de la cancha';
			}elseif($_REQUEST['latitud'] == '' || $_REQUEST['longitud'] == ''){
				$warning = 'Debes seleccionar la ubicación de la cancha';
			}else{
				$sql = 'INSERT INTO tor_canchas (cancha,descripcion,deporte_id,latitud,longitud) VALUES ("'.utf8_decode($_REQUEST['cancha']).'","'.utf8_decode($_REQUEST['descripcion']).'",'.$_REQUEST['deporte'].',"'.utf8_decode($_REQUEST['latitud']).'","'.utf8_decode($_REQUEST['longitud']).'")';
				if(@mysqli_query($dbc,$sql)){
					$success = 'Cancha guardada correctamente';
				}else{
					$error = 'Error al guardar la cancha';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'editaCancha'){
			$dbc = connect_bajio();
			$_REQUEST['c'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['c']));
			$_REQUEST['cancha'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['cancha']));
			if($_REQUEST['cancha'] == ''){
				$warning = 'Debes escribir el nombre de la cancha';
			}elseif($_REQUEST['latitud'] == '' || $_REQUEST['longitud'] == ''){
				$warning = 'Debes seleccionar la ubicación de la cancha';
			}else{
				$sql = 'UPDATE tor_canchas SET cancha="'.utf8_decode($_REQUEST['cancha']).'",descripcion="'.utf8_decode($_REQUEST['descripcion']).'",deporte_id='.$_REQUEST['deporte'].',latitud="'.utf8_decode($_REQUEST['latitud']).'",longitud="'.utf8_decode($_REQUEST['longitud']).'"
						WHERE cancha_id='.$_REQUEST['c'];
				if(@mysqli_query($dbc,$sql)){
					$success = 'Cancha editada correctamente';
				}else{
					$error = 'Error al editar la cancha';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'cargaGrupos'){
			$dbc = connect_bajio();
			$grupos = 0;
			for($x = 1; $x < 5; $x++){
				if($_REQUEST['grupo'.$x] != '')
					$grupos++;
			}
			if($grupos > 0){
				for($x = 1; $x <= $grupos; $x++){
					$equipos = 0;
					for($y = 1; $y < 7; $y++){
						if($_REQUEST['g'.$x.'e'.$y] != ''){
							$e[$x-1][$equipos] = $_REQUEST['g'.$x.'e'.$y];
							$equipos++;
						}
					}
					if($equipos < 2){
						if($x == 1) $serie = 'primer';
						if($x == 2) $serie = 'segunda';
						if($x == 3) $serie = 'tercer';
						if($x == 4) $serie = 'cuarta';
						$warning = 'Debes seleccionar al menos 2 equipos para la '.$serie.' serie';
					}
				}
				if(!isset($warning)){
					$success = '';
					for($x = 0; $x < $grupos; $x++){
						$sql = 'SELECT grupo FROM tor_grupos WHERE grupo_id='.$_REQUEST['grupo'.($x+1)];
						$result = @mysqli_query($dbc,$sql);
						$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
						$serie = $r['grupo'];
						mysqli_free_result($result);
						$equipos = count($e[$x]);
						for($z = 0; $z < $equipos; $z++){
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$e[$x][$z];
							$result = @mysqli_query($dbc,$sql);
							$r = @mysqli_fetch_array($result,MYSQLI_BOTH );
							$equipo[$z] = $r['equipo'];
							mysqli_free_result($result);
						}
						if($equipos == 2){
							// 2 equipos:	1 2
							if($success != '') $success .= ',';
							$success .= '{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"}';
						}elseif($equipos == 3){
							// 3 equipos:	'1' 2 3		'2' 1 3		'3' 1 2
							if($success != '') $success .= ',';
							$success .= '{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][1].',"local":"'.utf8_encode($equipo[1]).'","idvisitante":'.$e[$x][2].',"visitante":"'.utf8_encode($equipo[2]).'","iddescansa":"'.$e[$x][0].'","descansa":"'.utf8_encode($equipo[0]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][2].',"visitante":"'.utf8_encode($equipo[2]).'","iddescansa":"'.$e[$x][1].'","descansa":"'.utf8_encode($equipo[1]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"'.$e[$x][2].'","descansa":"'.utf8_encode($equipo[2]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"}';
						}elseif($equipos == 4){
							// 4 equipos:	1 2		3 1		1 4
							// 				3 4		4 2		2 3
							if($success != '') $success .= ',';
							$success .= '{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][0].',"visitante":"'.utf8_encode($equipo[0]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][3].',"local":"'.utf8_encode($equipo[3]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][1].',"local":"'.utf8_encode($equipo[1]).'","idvisitante":'.$e[$x][2].',"visitante":"'.utf8_encode($equipo[2]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"}';
						}elseif($equipos == 5){
							// 5 equipos:	'1'	5 2		'2'	1 3		'3'	2 4		'4'	3 5		'5'	4 1
							// 					3 4			4 5			5 1			1 2			2 3
							if($success != '') $success .= ',';
							$success .= '{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][4].',"local":"'.utf8_encode($equipo[4]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"'.$e[$x][0].'","descansa":"'.utf8_encode($equipo[0]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][2].',"visitante":"'.utf8_encode($equipo[2]).'","iddescansa":"'.$e[$x][1].'","descansa":"'.utf8_encode($equipo[1]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][3].',"local":"'.utf8_encode($equipo[3]).'","idvisitante":'.$e[$x][4].',"visitante":"'.utf8_encode($equipo[4]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][1].',"local":"'.utf8_encode($equipo[1]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"'.utf8_encode($equipo[2]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][4].',"local":"'.utf8_encode($equipo[4]).'","idvisitante":'.$e[$x][0].',"visitante":"'.utf8_encode($equipo[0]).'","iddescansa":"'.$e[$x][2].'","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":4,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][4].',"visitante":"'.utf8_encode($equipo[4]).'","iddescansa":"'.$e[$x][3].'","descansa":"'.utf8_encode($equipo[3]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":4,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":5,"idlocal":'.$e[$x][3].',"local":"'.utf8_encode($equipo[3]).'","idvisitante":'.$e[$x][0].',"visitante":"'.utf8_encode($equipo[0]).'","iddescansa":"'.$e[$x][4].'","descansa":"'.utf8_encode($equipo[4]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":5,"idlocal":'.$e[$x][1].',"local":"'.utf8_encode($equipo[1]).'","idvisitante":'.$e[$x][2].',"visitante":"'.utf8_encode($equipo[2]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"}';
						}elseif($equipos == 6){
							// 6 equipos:	1 2		3 1		5 3		5 1		1 6
							// 				3 6		4 2		1 4		6 4		2 5
							// 				5 4		6 5		2 6		3 2		4 3
							if($success != '') $success .= ',';
							$success .= '{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][5].',"visitante":"'.utf8_encode($equipo[5]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][4].',"local":"'.utf8_encode($equipo[4]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][0].',"visitante":"'.utf8_encode($equipo[0]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][3].',"local":"'.utf8_encode($equipo[3]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][5].',"local":"'.utf8_encode($equipo[5]).'","idvisitante":'.$e[$x][4].',"visitante":"'.utf8_encode($equipo[4]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][4].',"local":"'.utf8_encode($equipo[4]).'","idvisitante":'.$e[$x][2].',"visitante":"'.utf8_encode($equipo[2]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":3,"idlocal":'.$e[$x][1].',"local":"'.utf8_encode($equipo[1]).'","idvisitante":'.$e[$x][5].',"visitante":"'.utf8_encode($equipo[5]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":4,"idlocal":'.$e[$x][4].',"local":"'.utf8_encode($equipo[4]).'","idvisitante":'.$e[$x][0].',"visitante":"'.utf8_encode($equipo[0]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":4,"idlocal":'.$e[$x][5].',"local":"'.utf8_encode($equipo[5]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":4,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":5,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][5].',"visitante":"'.utf8_encode($equipo[5]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":5,"idlocal":'.$e[$x][1].',"local":"'.utf8_encode($equipo[1]).'","idvisitante":'.$e[$x][4].',"visitante":"'.utf8_encode($equipo[4]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":5,"idlocal":'.$e[$x][3].',"local":"'.utf8_encode($equipo[3]).'","idvisitante":'.$e[$x][2].',"visitante":"'.utf8_encode($equipo[2]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"}';
						}elseif($equipos == 7){
							// 7 equipos:	'7'	1 2		'6'	1 3		'4'	1 5		'2'	1 7		'3'	1 6		'5' 1 4		'1' 4 6
							// 					3 4			5 2			7 3			6 3			4 2			2 3			3 5
							// 					5 6			7 4			6 2			4 5			5 7			6 7			2 7
							if($success != '') $success .= ',';
							$success .= '{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"'.$e[$x][6].'","descansa":"'.utf8_encode($equipo[6]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":1,"idlocal":'.$e[$x][4].',"local":"'.utf8_encode($equipo[4]).'","idvisitante":'.$e[$x][5].',"visitante":"'.utf8_encode($equipo[5]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][0].',"local":"'.utf8_encode($equipo[0]).'","idvisitante":'.$e[$x][1].',"visitante":"'.utf8_encode($equipo[1]).'","iddescansa":"'.$e[$x][6].'","descansa":"'.utf8_encode($equipo[6]).'","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][2].',"local":"'.utf8_encode($equipo[2]).'","idvisitante":'.$e[$x][3].',"visitante":"'.utf8_encode($equipo[3]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"},{"torneo":'.$_REQUEST['t'].',"jornada":2,"idlocal":'.$e[$x][4].',"local":"'.utf8_encode($equipo[4]).'","idvisitante":'.$e[$x][5].',"visitante":"'.utf8_encode($equipo[5]).'","iddescansa":"","descansa":"","idserie":'.$_REQUEST['grupo'.($x+1)].',"serie":"'.$serie.'"}';
						}
					}
				}
			}else{
				$warning = 'Debes seleccionar al menos una serie';
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":['.$success.']}';
		}
		if($_REQUEST['action'] == 'guardaRoles'){
			$dbc = connect_bajio();
			$juegos = json_decode($_REQUEST['json'],true);
			$sql = 'INSERT INTO tor_partidos (torneo_id,jornada,local,visitante,descansa,grupo_id,tipo_id) VALUES ';
			$f = 0;
			foreach($juegos as $j){
				if($f) $sql .= ',';
				if($j['iddescansa'] == '') $descansa = 'NULL';
				else $descansa = $j['iddescansa'];
				$sql .= '('.$j['torneo'].','.$j['jornada'].','.$j['idlocal'].','.$j['idvisitante'].','.$descansa.','.$j['idserie'].',1)';
				$f = 1;
				$torneo = $j['torneo'];
			}
			$sql .= ';';
			if(@mysqli_query($dbc,$sql)){
				$success = 'Partidos guardados correctamente.';
			}else{
				$error = 'Error al guardar los partidos';
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'editaPartido'){
			$dbc = connect_bajio();
			$_REQUEST['p'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['p']));
			if($_REQUEST['fecha'] == ''){
				$warning = 'Debes seleccionar la fecha';
			}elseif($_REQUEST['hora'] == ''){
				$warning = 'Debes seleccionar la hora';
			}elseif($_REQUEST['cancha'] == ''){
				$warning = 'Debes seleccionar la cancha';
			}else{
				$sql = 'SELECT partido_id FROM tor_partidos
						WHERE fecha="'.$_REQUEST['fecha'].'" AND hora="'.$_REQUEST['hora'].'" AND cancha_id='.$_REQUEST['cancha'];
				$result = @mysqli_query($dbc,$sql);
				if(@mysqli_num_rows($result) > 0 && $_REQUEST['d'] != 6){
					$warning = 'Hay un empalme de horarios';
				}else{
					$sql = 'UPDATE tor_partidos SET fecha="'.$_REQUEST['fecha'].'",hora="'.$_REQUEST['hora'].'",cancha_id='.$_REQUEST['cancha'].'
							WHERE partido_id='.$_REQUEST['p'];
					if(@mysqli_query($dbc,$sql)){
						$success = 'Partido guardado';
					}else{
						$error = 'Error al guardar el partido';
					}
				}
				@mysqli_free_result($result);
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'agregaPartido'){
			$dbc = connect_bajio();
			$_REQUEST['t'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['t']));
			if($_REQUEST['tipo'] == 0){
				$warning = 'Selecciona el tipo de partido';
			}/*elseif($_REQUEST['grupo'] == 0){
				$warning = 'Selecciona la serie';
			}*/elseif($_REQUEST['local'] == $_REQUEST['visitante']){
				$warning = 'Los equipos deben ser diferentes';
			}elseif($_REQUEST['fecha'] == ''){
				$warning = 'Debes seleccionar la fecha';
			}elseif($_REQUEST['hora'] == ''){
				$warning = 'Debes seleccionar la hora';
			}elseif($_REQUEST['cancha'] == ''){
				$warning = 'Debes seleccionar la cancha';
			}else{
				$sql = 'INSERT INTO tor_partidos (torneo_id,jornada,local,visitante,descansa,grupo_id,fecha,hora,cancha_id,tipo_id)
						VALUES ('.$_REQUEST['t'].',99,'.$_REQUEST['local'].','.$_REQUEST['visitante'].',NULL,0,"'.$_REQUEST['fecha'].'","'.$_REQUEST['hora'].'",'.$_REQUEST['cancha'].','.$_REQUEST['tipo'].')';
				if(@mysqli_query($dbc,$sql)){
					$success = 'Partido guardado';
				}else{
					$error = 'Error al guardar el partido';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'obtenRamas'){
			$dbc = connect_bajio();
			$success = '<option value="">--</option>';
			$sql = 'SELECT DISTINCT tor_torneos.rama_id,tor_ramas.rama FROM tor_torneos
					INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
					WHERE tor_torneos.deporte_id='.$_REQUEST['d'].'
					ORDER BY tor_ramas.rama';
			$result = @mysqli_query($dbc,$sql);
			while($r = @mysqli_fetch_array($result,MYSQLI_BOTH )){
				$success .= '<option value="'.$r['rama_id'].'">'.utf8_encode($r['rama']).'</option>';
			}
			@mysqli_free_result($result);
			@mysqli_close($dbc);
			echo $success;
		}
		if($_REQUEST['action'] == 'obtenTorneos'){
			$dbc = connect_bajio();
			$success = '<option value="">--</option>';
			$sql = 'SELECT DISTINCT tor_torneos.torneo_id,tor_torneos.torneo FROM tor_torneos
					WHERE tor_torneos.deporte_id='.$_REQUEST['d'].' AND tor_torneos.rama_id='.$_REQUEST['r'].'
					ORDER BY tor_torneos.torneo_id DESC';
			$result = @mysqli_query($dbc,$sql);
			while($r = @mysqli_fetch_array($result,MYSQLI_BOTH )){
				$success .= '<option value="'.$r['torneo_id'].'">'.utf8_encode($r['torneo']).'</option>';
			}
			@mysqli_free_result($result);
			@mysqli_close($dbc);
			echo $success;
		}
		if($_REQUEST['action'] == 'obtenPartidos'){
			$dbc = connect_bajio();
			$sql = 'SELECT DISTINCT tor_partidos.partido_id,tor_partidos.jornada,tor_partidos.local,tor_partidos.visitante,tor_partidos.fecha,tor_partidos.hora FROM tor_partidos
					WHERE tor_partidos.torneo_id='.$_REQUEST['t'].'
					ORDER BY tor_partidos.jornada ASC,tor_partidos.fecha ASC,tor_partidos.hora ASC';
			$result = @mysqli_query($dbc,$sql);
			$success = '';
			if(@mysqli_num_rows($result) > 0){
				while($r = @mysqli_fetch_array($result,MYSQLI_BOTH )){
					$mlocal = '';
					$mvisitante = '';
					$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['local'];
					$local = @mysqli_query($dbc,$sql);
					$l = @mysqli_fetch_array($local,MYSQLI_BOTH );
					$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['visitante'];
					$visitante = @mysqli_query($dbc,$sql);
					$v = @mysqli_fetch_array($visitante,MYSQLI_BOTH );
					$sql = 'SELECT marcador_local,marcador_visitante FROM tor_marcadores WHERE partido_id='.$r['partido_id'];
					$marcador = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($marcador) > 0){
						$m = @mysqli_fetch_array($marcador,MYSQLI_BOTH );
						$mlocal = ' [ '.$m['marcador_local'].' ] ';
						$mvisitante = ' [ '.$m['marcador_visitante'].' ] ';
					}
					$success .= utf8_encode('<div class=\"item\"><a class=\"link right\" href=\"?op=13&p='.$r['partido_id'].'&d='.$_REQUEST['d'].'&r='.$_REQUEST['r'].'&t='.$_REQUEST['t'].'\">Editar</a>Jornada '.$r['jornada'].' - '.$l['equipo'].$mlocal.' vs '.$mvisitante.$v['equipo'].' - '.$r['fecha'].' '.$r['hora'].' <div class=\"clearfix\"></div></div>');
				}
			}else{
				$error = '<div class=\"error\">No se encontraron partidos para este torneo.</div>';
			}
			@mysqli_free_result($result);
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'guardaMarcador'){
			$dbc = connect_bajio();
			$_REQUEST['p'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['p']));
			$_REQUEST['d'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['d']));
			$_REQUEST['t'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['t']));
			$_REQUEST['mLocal'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['mLocal']));
			$_REQUEST['mVisitante'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['mVisitante']));
			if($_REQUEST['d'] == 3 || $_REQUEST['d'] == 7){
				$favor = 'los tantos a favor';
				$contra = 'los tantos en contra';
			}elseif($_REQUEST['d'] == 1){
				$favor = 'las artidas ganadas';
				$contra = 'las partidas perdidas';
			}elseif($_REQUEST['d'] == 6){
				$favor = 'los juegos a favor';
				$contra = 'los juegos en contra';
			}
			if(!isset($_REQUEST['ganador'])){
				$warning = 'Debes seleccionar el ganador';
			}elseif($_REQUEST['ganador'] == 0 && !isset($_REQUEST['extra']) && $_REQUEST['d'] != 1 && $_REQUEST['d'] != 9 && $_REQUEST['d'] != 12){
				$warning = 'Debes seleccionar el ganador del punto extra';
			}elseif($_REQUEST['mLocal'] == '' || $_REQUEST['mVisitante'] == ''){
				$warning = 'Debes escribir el marcador final';
			}elseif($_REQUEST['ganador'] == 0 && $_REQUEST['mLocal'] != $_REQUEST['mVisitante']){
				$warning = 'El marcador final no es un empate';
			}elseif(($_REQUEST['d'] == 1 || $_REQUEST['d'] == 3 || $_REQUEST['d'] == 6 || $_REQUEST['d'] == 7) && ($_REQUEST['mLocal'] == '' || $_REQUEST['mVisitante'] == '')){
				$warning = 'Debes escribir '.$favor;
			}else{
				if($_REQUEST['ganador'] != 0) $extra = 0;
				elseif($_REQUEST['d'] == 1 || $_REQUEST['d'] == 9) $extra = 0;
				else $extra = $_REQUEST['extra'];
				if($_REQUEST['d'] == 7){
					$_REQUEST['favorLocal'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['favorLocal']));
					$_REQUEST['favorVisitante'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['favorVisitante']));
					$flocal = $_REQUEST['favorLocal'];
					$fvisitante = $_REQUEST['favorVisitante'];
					$clocal = $_REQUEST['favorVisitante'];
					$cvisitante = $_REQUEST['favorLocal'];
				}else{
					if ($_REQUEST['d'] == 12){ $extra = 0;}
					$flocal = $_REQUEST['mLocal'];
					$fvisitante = $_REQUEST['mVisitante'];
					$clocal = $_REQUEST['mVisitante'];
					$cvisitante = $_REQUEST['mLocal'];
				}
				$sql = 'SELECT partido_id FROM tor_marcadores WHERE partido_id='.$_REQUEST['p'];
				$result = @mysqli_query($dbc,$sql);
				if(@mysqli_num_rows($result) == 0){
					$sql = 'INSERT INTO tor_marcadores (partido_id,ganador_id,extra_id,marcador_local,marcador_visitante,favor_local,favor_visitante,contra_local,contra_visitante) VALUES ('.$_REQUEST['p'].','.$_REQUEST['ganador'].','.$extra.','.$_REQUEST['mLocal'].','.$_REQUEST['mVisitante'].','.$flocal.','.$fvisitante.','.$clocal.','.$cvisitante.')';
				}else{
					$sql = 'UPDATE tor_marcadores SET ganador_id='.$_REQUEST['ganador'].',extra_id='.$extra.',marcador_local='.$_REQUEST['mLocal'].',marcador_visitante='.$_REQUEST['mVisitante'].',favor_local='.$flocal.',favor_visitante='.$fvisitante.',contra_local='.$clocal.',contra_visitante='.$cvisitante.'
							WHERE partido_id='.$_REQUEST['p'];
				}
				@mysqli_free_result($result);
				if(@mysqli_query($dbc,$sql)){
					$ok = 'Marcador guardado.';
					if(estadistica($_REQUEST['p'])){
						$ok .= ' Estadística generada correctamente.';
						$success = $ok;
					}else{
						$error = 'Error al calcular la estadística';
					}
				}else{
					$error = 'Error al guardar el marcador';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'obtenPartidosTrans'){
			$dbc = connect_bajio();
			$sql = 'SELECT DISTINCT tor_partidos.partido_id,tor_partidos.jornada,tor_partidos.local,tor_partidos.visitante,tor_partidos.fecha,tor_partidos.hora FROM tor_partidos
					WHERE tor_partidos.torneo_id='.$_REQUEST['t'].'
					ORDER BY tor_partidos.jornada ASC,tor_partidos.fecha ASC,tor_partidos.hora ASC';
			$result = @mysqli_query($dbc,$sql);
			$success = '';
			if(@mysqli_num_rows($result) > 0){
				while($r = @mysqli_fetch_array($result,MYSQLI_BOTH )){
					$mlocal = '';
					$mvisitante = '';
					$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['local'];
					$local = @mysqli_query($dbc,$sql);
					$l = @mysqli_fetch_array($local,MYSQLI_BOTH );
					$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$r['visitante'];
					$visitante = @mysqli_query($dbc,$sql);
					$v = @mysqli_fetch_array($visitante,MYSQLI_BOTH );
					$sql = 'SELECT marcador_local,marcador_visitante FROM tor_marcadores WHERE partido_id='.$r['partido_id'];
					$marcador = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($marcador) > 0){
						$m = @mysqli_fetch_array($marcador,MYSQLI_BOTH );
						$mlocal = ' ['.$m['marcador_local'].'] ';
						$mvisitante = ' ['.$m['marcador_visitante'].'] ';
					}
					$success .= utf8_encode('<div class=\"item\"><a class=\"link right\" href=\"?op=16&p='.$r['partido_id'].'&d='.$_REQUEST['d'].'&r='.$_REQUEST['r'].'&t='.$_REQUEST['t'].'\">Crear transmisi&oacute;n</a>Jornada '.$r['jornada'].' - '.$l['equipo'].$mlocal.' vs '.$mvisitante.$v['equipo'].' - '.$r['fecha'].' '.$r['hora'].' <div class=\"clearfix\"></div></div>');
				}
			}else{
				$error = '<div class=\"error\">No se encontraron partidos para este torneo.</div>';
			}
			@mysqli_free_result($result);
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
		if($_REQUEST['action'] == 'guardaTransmision'){
			$dbc = connect_bajio();
			$_REQUEST['p'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['p']));
			$_REQUEST['url'] = htmlspecialchars( mysqli_real_escape_string($dbc,$_REQUEST['url']));
			if($_REQUEST['url'] == ''){
				$warning = 'Debes escribir la URL donde se transmitirá el partido';
			}else{
				$sql = 'SELECT transmision_id FROM tor_transmisiones WHERE partido_id='.$_REQUEST['p'];
				$result = @mysqli_query($dbc,$sql);
				if(@mysqli_num_rows($result) == 0){
					$sql = 'INSERT INTO tor_transmisiones (partido_id,url) VALUES ('.$_REQUEST['p'].',"'.$_REQUEST['url'].'")';
				}else{
					$sql = 'UPDATE tor_transmisiones SET partido_id='.$_REQUEST['p'].',url="'.$_REQUEST['url'].'"
							WHERE partido_id='.$_REQUEST['p'];
				}
				@mysqli_free_result($result);
				if(@mysqli_query($dbc,$sql)){
					$success = 'Transmisión guardada';
				}else{
					$error = 'Error al guardar la transmisión';
				}
			}
			@mysqli_close($dbc);
			if(isset($error)) echo '{"status":"Error","valor":"'.$error.'"}';
			elseif(isset($warning)) echo '{"status":"Warning","valor":"'.$warning.'"}';
			elseif(isset($success)) echo '{"status":"Success","valor":"'.$success.'"}';
		}
	}else{
		echo '{"status":"Error","valor":"La sesión ha caducado"}';
	}
?>