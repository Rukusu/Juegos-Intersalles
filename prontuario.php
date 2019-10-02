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
			<div class="wrapper">PRONTUARIO</div>
		</div>
		
		<section class="wrapper" id="items">
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 01</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 02</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 03</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 04</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 05</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 06</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 07</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 08</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 09</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 10</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 11</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 12</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 13</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 14</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 15</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 16</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 17</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 18</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 19</a></div>
			<div class="item" data-bg="uni_cancun" style="background-image: url(images/uni_cancun.jpg);"><a href="#" data-toggle="modal" data-target="#myModal">Prueba 20</a></div>
			<div class="clearfix"></div>
		</section>
		
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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