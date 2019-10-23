<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	//include('core.php');
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
		<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/hospitales.css">
		<link rel="stylesheet" type="text/css" href="../css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="../css/interior.css?<?php echo date('YmdHis'); ?>">
		
		<script src="js/quill/quill.js"></script>		
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
	</head>
	<body>
		<script>
			var quill = new Quill('#editor-container', {
				modules: {
					toolbar: [
						[{ header: [1, 2, false] }],
						['bold', 'italic', 'underline'],
						['image', 'code-block']
					]
				},
				placeholder: 'Compose an epic...',
				theme: 'snow'  // or 'bubble'
			});
		</script>
		<?php include('../header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">NOTICIAS</div>
		</div>
		<section class="wrapper" id="items" style="margin-top: 20px">
			<div id="editor-container"></div>
		</section>
		<?php include('../footer.php'); ?>
	</body>
</html>