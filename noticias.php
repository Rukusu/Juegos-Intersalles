<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('blog/core.php');
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
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/hospitales.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
	</head>
	<body>
		<?php include('header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">NOTICIAS</div>
		</div>
		<div class="wrapper" style="margin-top: 20px;">
		<?php
			if(!isset($conn)) {
				/*$config = parse_ini_file('config.ini');*/
				/*$conn = mysqli_connect('localhost',$config['user'],$config['password'],$config['dbname']);*/
				//$conn = mysqli_connect ("144.208.67.4","lasall8_laguna","J9L3DF)i#g)I","lasalle5_bdlog");
				$dbc = connect_bajio(); 
				mysqli_set_charset ( $dbc , "utf8" );
				//$conn = mysqli_connect("vps39255.inmotionhosting.com","lasall8_juegos_lasallistas","J9L3DF)i#g)I","lasalle5_bdlog");
				//$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
			}
			// Check connection
			/*
			if (!$conn) {
				//if($conn === false){
				die("Connection failed: " . mysqli_connect_error());
				die(mysqli_error($conn));
			}*/
			$sql = 'SELECT titulo, id, imagen FROM tor_noticias WHERE publicado = 1';
			//$query ='SELECT post.post_title, post.ID, img.guid FROM hoylle_term_relationships, hoylle_posts post left join hoylle_posts img ON post.ID = img.post_parent WHERE hoylle_term_relationships.term_taxonomy_id=525 AND post.ID = hoylle_term_relationships.object_id  AND post.post_type = "post" AND img.post_mime_type LIKE "image%" AND post.post_status = "publish" ORDER BY img.post_date DESC';
				
			$result = mysqli_query ($dbc,$sql);

			if (mysqli_num_rows($result) > 0) {
			// output data of each row
				$previous = 0;
				while($row = mysqli_fetch_row($result)) {
					if ($previous <> $row[1]){
					echo "<section class=\"wrapper caja_inicio\" style=\"display:inline-block;\">\n";
					echo "<div>\n";
					echo '<article style="background: url(blog/img/'.$row[1].'.jpg); background-position: center;background-size: cover;" id="generico">';
					echo '<a href="nota.php?id='.$row[1].'"><span class="ribbon">'.utf8_encode($row[0]).'</span></a>';
					echo "</article>\n";
					echo "</div>\n";
					echo "</section>\n";
					}
					$previous = $row[1];
				}			
				$result->close();
			}
				mysqli_close($dbc);
			?>
			</div>
			
		<?php include('footer.php'); ?>
	</body>
</html>