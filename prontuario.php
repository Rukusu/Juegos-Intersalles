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
		<title>XVIII Juegos Deportivos 2019 </title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script src="../js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
	</head>
	<body>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<?php
			include('header_int.php');
			$dbc = connect_bajio();
		?>
		<div id="titulo">
			<div class="wrapper">CHILANGONARIO</div>
		</div>
		
		<section class="wrapper" id="items">
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal01">Torta de tamal</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal02">Torta de chilaquiles</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal03">Tacos al pastor</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal04">Luchas</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal05">Marchas / manifestaciones</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal06">Metro / metrobús</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal07">Ecobici y scooters</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal08">"Tráfico"</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal09">Chapultepec</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal10">Museos</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal11">Rascacielos</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal12">Edificios con nombres MUY extraños</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal13">Ángel de la Independencia</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal14">Paseo de la Reforma</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal15">Palacio de Bellas Artes</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal16">Plancha del Zócalo</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal17">Barrio Universitario</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal18">Las trajineras de Xochimilco</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal19">Alerta sísmica</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#Modal20">Estadios para todos los deportes</a></div>
			<div class="clearfix"></div>
		</section>
		
		<!-- Modals -->
		<div id="Modal01" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Torta de tamal</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal02" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Torta de chilaquiles</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal03" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tacos al pastor</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal04" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Luchas</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal05" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Marchas / manifestaciones</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal06" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Metro / metrobús</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal07" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Ecobici y scooters</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal08" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">"Tráfico"</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal09" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Chapultepec</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal10" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Museos</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal11" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Rascacielos</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal12" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edificios con nombres MUY extraños</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal13" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Ángel de la Independencia</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal14" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Paseo de la Reforma</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal15" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Palacio de Bellas Artes</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal16" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Plancha del Zócalo</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal17" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Barrio Universitario</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal18" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Las trajineras de Xochimilco</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal19" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Alerta sísmica</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="Modal20" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Estadios para todos los deportes</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php	
			@mysqli_close($dbc);
			include('footer.php');
		?>
	</body>
</html>