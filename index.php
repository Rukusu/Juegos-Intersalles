<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('../core.php');
	date_default_timezone_set ( "America/Mexico_City" );
	function formatoFecha($fecha){
		$fecha = empty($fecha)?date('Y-m-d'):$fecha;
		$dias = array('Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado');
		$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		$dd = explode('-',$fecha);
		$ts   = mktime(0,0,0,$dd[1],$dd[2],$dd[0]);
		return $dias[date('w',$ts)].' '.date('d',$ts).' '.$meses[date('n',$ts)-1];
	}
	$dbc = connect_bajio();
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="theme-color" content="#001e61">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
		<link type="image/x-icon" href="../favicon.ico" rel="icon">
		<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon">
		<title>XVIII Juegos Deportivos 2019 </title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/lineaDelTiempo.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script src="../js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		<script type="text/javascript" src="js/index.js?<?php echo date('YmdHis'); ?>"></script>
	
	</head>
	<body>
		<?php include('header.php'); ?>
		<div id="banner" style="height: 730px; max-height: 800px;">
			<div class="wrapper">
				<div id="juegos_w"></div>
				<label id="menu" for="chkMenu"></label>
			</div>
			<div class="flexslider banner" style="margin-top: 60px;">
				<ul class="slides">
					<li style="background-image: url(images/bann1-2019.png); margin-right: auto; margin-left: auto; max-width: 1280px;">
						<div class="slide">
							<!--<div class="lineas"></div>-->
							<div class="frase"><strong>XXVI<br>JUEGOS DEPORTIVOS<br>LASALLISTAS</strong>Ciudad de México<br>Red de Universidades<br>La Salle<br>2019</div>
							<div class="delasalle"></div>
						</div>
					</li>
				</ul>
			</div>
		</div><!--
		<div class="wrapper">
			<div style="max-width: 468px; margin-right: 10px; margin-left: auto;">
			<p style="padding-right: 60px; color: white; font-size: 40px; text-align: right; font-family: 'Indivisa Text Sans BoldItalic', Verdana, sans-serif;">Disciplinas</p>
			<div style="margin-right: 10px; margin-left: auto; background: linear-gradient(to right, #d85d72 ,#e3894b); color: white; height: 36px; width: 132px; margin-top: -60px;"></div>
			<p style="color: white; font-size: 20px; text-align: right; font-family: 'Indivisa Text Sans', Verdana, sans-serif;"> El CONADELA, que es el organismo encargado de supervisar los Juegos Deportivos Lasallistas, establece que en su XXVI edición se jugaran 7 deportes oficiales y 4 de exhibición con sus respectivas ramas y series<p>
			</div>
			<div style="margin-right: 10px; margin-left: auto; width: 132px; margin-bottom: 26px">
			<button onclick="location.href='resultados.php';" style="box-shadow: 5px 5px 2px #484848; border-radius: 30px; background: linear-gradient(to right, #d85d72 , #e3894b); color: white; height: 36px; width: 132px;"><b>CONSULTA</b></button>
			</div>
		</div>-->
		
		<div id="disciplinas">
			<div class="wrapper">
				<strong>DISCIPLINAS<span></span></strong>
				<a href="resultados.php?d=1" class="disciplina" alt="Ajedrez" style="background-image: url(images/Juegos2019_Ajedrez0.jpg);"></a>
				<a href="resultados.php?d=3" class="disciplina" alt="Basquetbol" style="background-image: url(images/Juegos2019_Basquetbol0.jpg);"></a>
				<a href="resultados.php?d=4" class="disciplina" alt="Futbol Rápido" style="background-image: url(images/Juegos2019_FutbolRapido0.jpg);"></a>
				<a href="resultados.php?d=5" class="disciplina" alt="Futbol Soccer" style="background-image: url(images/Juegos2019_FutbolSoccer0.jpg);"></a>
				<a href="resultados.php?d=6" class="disciplina" alt="Tenis" style="background-image: url(images/Juegos2019_Tenis0.jpg);"></a>
				<a href="resultados.php?d=7" class="disciplina" alt="Voleibol" style="background-image: url(images/Juegos2019_Voleibol0.jpg);"></a>
				<a href="resultados.php?d=8" class="disciplina" alt="Tae Kwon Do" style="background-image: url(images/Juegos2019_Taekondo0.jpg);"></a>
				<a href="resultados.php?d=9" class="disciplina" alt="Tocho Bandera" style="background-image: url(images/Juegos2019_TochoBandera0.jpg);"></a>
				<a href="resultados.php?d=10" class="disciplina" alt="Handball" style="background-image: url(images/Juegos2019_HandBall0.jpg);"></a>
				<a href="resultados.php?d=11" class="disciplina" alt="CrossFit" style="background-image: url(images/Juegos2019_Crossfit0.jpg);"></a>
				<a href="resultados.php?d=11" class="disciplina" alt="Natacion" style="background-image: url(images/Juegos2019_Natacion0.jpg);"></a>
				<a class="disciplina filler"></a>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="wrapper">
			<section id="process" class="wrapper respond"  style="padding-top: 40px; width: 97%; box-shadow: 5px 5px 2px #484848;">
				<div class="row">
					<div class="section-heading">
						<!--<h2 class="text-center orange">Responsive Horizontal Timeline</h2>-->
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="steps-timeline text-center">
							<div class="steps-one">
								<h3>2016</h3>
								<div class="end-circle back-orange"></div>
								<div class="step-wrap">
									<div class="steps-stops">
										<div class="verticle-line back-orange"></div>
									</div>
								</div>
								<div class="pane-warp back-blue">
									<div class="steps-pane">
										<img src="images/uni_cancun.jpg">
									</div>
								</div>
								<div class="inverted-pane-warp back-blue">
									<div class="inverted-steps-pane">
										<p>Cancún</p>
									</div>
								</div>
							</div>
							<div class="steps-two">
								<h3>2017</h3>
								<div class="step-wrap">
									<div class="steps-stops">
										<div class="verticle-line back-orange"></div>
									</div>
								</div>
								<div class="pane-warp back-orange">
									<div class="steps-pane">
										<img src="images/uni_neza.jpg">
									</div>
								</div>
								<div class="inverted-pane-warp back-orange">
									<div class="inverted-steps-pane">
										<p>Nezahualcoyotl</p>
									</div>
								</div>
							</div>

							<div class="steps-three">
								<h3>2018</h3>
								<div class="step-wrap">
									<div class="steps-stops">
										<div class="verticle-line back-orange"></div>
									</div>
								</div>
								<div class="pane-warp back-blue">
									<div class="steps-pane">
										<img class="third" src="images/uni_bajio.jpg">
									</div>
								</div>
								<div class="inverted-pane-warp back-blue">
									<div class="inverted-steps-pane">
										<p>Bajío</p>
									</div>
								</div>
							</div>

							<div class="steps-four">
								<h3>2019</h3>
								<div class="step-wrap">
									<div class="steps-stops">
										<div class="verticle-line back-orange"></div>
									</div>
								</div>
								<div class="pane-warp back-orange">
									<div class="steps-pane">
										<img src="images/uni_mexico.jpg">
									</div>
								</div>
								<div class="inverted-pane-warp back-orange">
									<div class="inverted-steps-pane">
										<p>México</p>
									</div>
								</div>
							</div>

							<div class="steps-five">
								<h3>2020</h3>
								<div class="inverted-end-circle back-orange"></div>
								<div class="step-wrap">
									<div class="steps-stops">
										<div class="verticle-line back-orange"></div>
									</div>
								</div>
								<div class="pane-warp back-blue">
									<div class="steps-pane">
										<img src="https://imgur.com/5U7IJvy.png">
									</div>
								</div>
								<div class="inverted-pane-warp back-blue">
									<div class="inverted-steps-pane">
										<p>¿?</p>									
									</div>
								</div>
							</div>

						</div>
				  <!-- /.steps-timeline -->
					</div>
				</div>
			</section>
		</div>
		
		<div class="wrapper">
		<section class="wrapper caja_inicio" style="display:inline-block;">
			<div>
				<article id="redesSociales">
					<div class="title">REDES SOCIALES</div>
					<a href="https://twitter.com/LASALLELAGUNA" target="_blank" class="socialNetwork"><img src="images/twitter_w.png"></a>
					<a href="https://www.facebook.com/Red-La-Salle-México-2760673140824619/" target="_blank" class="socialNetwork"><img src="images/facebook_w.png"></a>
					<a href="https://www.instagram.com/redlasallemx" target="_blank" class="socialNetwork"><img src="images/instagram_w.png"></a>
				</article>
				<div class="clearfix"></div>
			</div>
		</section>
		<section class="wrapper caja_inicio" style="display:inline-block;">
			<div>
				<article id="resultados">
				<?php
					$sql = 'SELECT tor_marcadores.partido_id FROM tor_marcadores
							WHERE tor_marcadores.ganador_id IS NOT NULL';
					$result = @mysqli_query($dbc,$sql);
					if(@mysqli_num_rows($result) == 0){
				?>
					<div class="title">PRÓXIMOS JUEGOS</div>
					<div id="ultimos">
						<table border="1" border-color="001863" cellspacing="0" width="100%">
				<?php
						$sql = 'SELECT tor_partidos.local,tor_partidos.visitante,tor_deportes.icono FROM tor_partidos
								INNER JOIN tor_torneos ON tor_partidos.torneo_id = tor_torneos.torneo_id
								INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
								WHERE tor_partidos.torneo_id BETWEEN 1 AND 15 AND tor_partidos.fecha IS NOT NULL AND tor_partidos.fecha>=CURRENT_DATE()
								ORDER BY tor_partidos.fecha ASC,tor_partidos.hora ASC
								LIMIT 20';
						$partidos = @mysqli_query($dbc,$sql);
						while($p = @mysqli_fetch_array($partidos, MYSQLI_NUM)){
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$p['local'];
							$local = @mysqli_query($dbc,$sql);
							$l = @mysqli_fetch_array($local, MYSQLI_NUM);
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$p['visitante'];
							$visitante = @mysqli_query($dbc,$sql);
							$v = @mysql_fetch_array($visitante);
				?>
							<tr>
								<td class="icon" style="background-image: url(images/<?php echo $p['icono']; ?>_b.png);"></td>
								<td><?php echo utf8_encode($l['equipo']); ?></td>
								<td><strong>-</strong></td>
								<td><strong>-</strong></td>
								<td><?php echo utf8_encode($v['equipo']); ?></td>
							</tr>
				<?php
						}
						@mysqli_free_result($partidos);
				?>
						</table>
					</div>
				<?php
					}else{
				?>
					<div class="title">ÚLTIMOS RESULTADOS</div>
					<div id="ultimos">
						<table border="1" border-color="001863" cellspacing="0" width="100%">
				<?php
						$sql = 'SELECT tor_partidos.local,tor_partidos.visitante,tor_deportes.icono,tor_marcadores.marcador_local,tor_marcadores.marcador_visitante FROM tor_marcadores
								INNER JOIN tor_partidos ON tor_marcadores.partido_id = tor_partidos.partido_id
								INNER JOIN tor_torneos ON tor_torneos.torneo_id = tor_partidos.torneo_id
								INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
								WHERE tor_partidos.torneo_id BETWEEN 1 AND 15 AND tor_marcadores.ganador_id IS NOT NULL
								ORDER BY tor_partidos.fecha DESC,tor_partidos.hora DESC
								LIMIT 20';
						$partidos = @mysqli_query($dbc,$sql);
						while($p = @mysqli_fetch_array($partidos, MYSQLI_NUM)){
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$p['local'];
							$local = @mysqli_query($dbc,$sql);
							$l = @mysqli_fetch_array($local, MYSQLI_NUM);
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$p['visitante'];
							$visitante = @mysqli_query($dbc,$sql);
							$v = @mysqli_fetch_array($visitante, MYSQLI_NUM);
				?>
							<tr>
								<td class="icon" style="background-image: url(images/<?php echo $p['icono']; ?>_b.png);"></td>
								<td><?php echo utf8_encode($l['equipo']); ?></td>
								<td><strong><?php echo $p['marcador_local']; ?></strong></td>
								<td><strong><?php echo $p['marcador_visitante']; ?></strong></td>
								<td><?php echo utf8_encode($v['equipo']); ?></td>
							</tr>
				<?php
						}
						@mysqli_free_result($partidos);
				?>
						</table>
					</div>
				<?php
					}
					@mysqli_free_result($result);
				?>
				</article>
				<div class="clearfix"></div>
			</div>
		</section>
		<section class="wrapper caja_inicio" style="display:inline-block;">
			<div>
				
				<!-- <div id="skewed">
					<article id="transmisiones">
					<?php
						/*$sql = 'SELECT tor_deportes.icono,tor_deportes.deporte,tor_ramas.rama,tor_partidos.local,tor_partidos.visitante,tor_canchas.cancha,tor_partidos.fecha,tor_partidos.hora,tor_transmisiones.url FROM tor_transmisiones
								INNER JOIN tor_partidos ON tor_transmisiones.partido_id = tor_partidos.partido_id
								INNER JOIN tor_torneos ON tor_partidos.torneo_id = tor_torneos.torneo_id
								INNER JOIN tor_canchas ON tor_partidos.cancha_id = tor_canchas.cancha_id
								INNER JOIN tor_deportes ON tor_torneos.deporte_id = tor_deportes.deporte_id
								INNER JOIN tor_ramas ON tor_torneos.rama_id = tor_ramas.rama_id
								WHERE tor_partidos.fecha>=CURRENT_DATE()
								ORDER BY tor_partidos.fecha ASC,tor_partidos.hora ASC LIMIT 1';
						$trans = @mysql_query($sql);
						while($t = @mysql_fetch_array($trans)){
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$t['local'];
							$local = @mysql_query($sql);
							$l = @mysql_fetch_array($local);
							$sql = 'SELECT equipo FROM tor_equipos WHERE equipo_id='.$t['visitante'];
							$visitante = @mysql_query($sql);
							$v = @mysql_fetch_array($visitante);
					?>
						<a href="transmisiones.php">
							<div class="icon" style="background-image: url(images/<?php echo $t['icono']; ?>.png);"></div>
							<div class="game">
								<div><strong><?php echo formatoFecha($t['fecha']).'<br>'.convertHour($t['hora']); ?></strong></div>
								<div class="versus">
									<span><?php echo utf8_encode($l['equipo']); ?></span><span>vs</span><span><?php echo utf8_encode($v['equipo']); ?></span>
									<div class="clearfix"></div>
								</div>
								<div style="font-size: 16px;"><?php echo utf8_encode($t['cancha']); ?></div>
							</div>
							<span class="bottom">TRANSMISIONES</span>
						</a>
					<?php
						}*/
					?>
					</article>
					<article id="galeria">
						<a href="https://www.facebook.com/pg/JuegosUniversitariosLasallistas/photos/?ref=page_internal" target="_blank"><span class="bottom">GALERÍA</span></a>
					</article>
					<div class="clearfix"></div>
				</div>-->
				<article id="hospitales">
					<a href="hospitales.php"><span class="ribbon">SERVICIO MÉDICO Y HOSPITALES</span></a>
				</article>
			</div>
		</section>
		<section class="wrapper caja_inicio" style="display:inline-block;">
			<div>
				<article id="mapas">
					<a href="sedes.php"><span class="ribbon">MAPAS Y SEDES</span></a>
				</article>
				<div class="clearfix"></div>
			</div>
		</section>
		
			<!-- Load Facebook SDK for JavaScript -->
			<div class="wrapper">
				<div id="fb-root"></div>
				<script>
					window.fbAsyncInit = function() {
					  FB.init({
						xfbml            : true,
						version          : 'v4.0'
					  });
					};

					(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = 'http://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>

				<!-- Your customer chat code -->
				<div class="fb-customerchat"
					attribution=setup_tool
					page_id="2760673140824619"
					logged_in_greeting="Hola, ¿En qué podemos ayudarte? "
					logged_out_greeting="Hola, ¿En qué podemos ayudarte? ">
				</div>

			</div>	
		
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>
<?php
	@mysqli_close($dbc);
?>