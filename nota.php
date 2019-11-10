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
		
		<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/hospitales.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		
		
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
		
	</head>
	<body>
		<?php include('header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">NOTICIAS</div>
		</div>
		<section class="wrapper" id="items" style="margin-top: 20px">
		<?php
			$dbc = connect_bajio(); 
			//mysqli_set_charset ( $dbc , "utf8" );
			//$query = "SELECT post.post_title, post.post_content, img.guid FROM hoylle_posts post inner join hoylle_posts img ON post.ID = img.post_parent WHERE post.ID = ".$_GET["id"]." AND post.post_type = \"post\" AND img.post_mime_type LIKE \"image%\" AND post.post_status = \"publish\"" ;
			$query = 'SELECT titulo, cuerpo, id FROM tor_noticias WHERE id ="'.$_GET["id"].'"';
			$result = mysqli_query ($dbc,$query);
			if (mysqli_num_rows($result) > 0) {
				
			if ($row = mysqli_fetch_row($result)){
			// output data of each row
					echo '<h2 style="font-size: 30px">'.$row[0].'</h2>';
					echo '<img src=\'blog/img/'.$row[2].'.jpg\' style="width: 50%; margin-left: auto; margin-right: auto; display: block">';
					echo '<div style="font-size: 16px;">';
					echo $row[1];
					echo '</div>';
			}
			}
				mysqli_close($dbc);
			?>
			</section>
			
		<?php include('footer.php'); ?>
	</body>
</html>