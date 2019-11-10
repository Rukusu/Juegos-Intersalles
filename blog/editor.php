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
		<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/hospitales.css">
		<link rel="stylesheet" type="text/css" href="../css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="../css/interior.css?<?php echo date('YmdHis'); ?>">
		<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
	</head>
	<body>
		<!-- Initialize Quill editor -->
		<?php include('../header_int.php'); ?>
		<?php if (isset($_GET["id"])){ 
				$dbc = connect_bajio(); 
				mysqli_set_charset ( $dbc , "utf8" );
				$id = mysqli_real_escape_string($dbc, $_GET["id"]);
				$sql = 'SELECT titulo, cuerpo FROM tor_noticias WHERE id = "'.$id.'"';
				$result = @mysqli_query($dbc,$sql);
				$row = mysqli_fetch_assoc($result);
			}?>
		<div id="titulo">
			<div class="wrapper">EDITOR DE NOTICIAS</div>
		</div>
		<section class="wrapper" id="items" style="margin-top: 20px">
			<form id="form_noticia" enctype="multipart/form-data" method="post">
				<p>Título</p>
				<input type="text" style="width: 50%;" name="titulo_noticia" id="titulo_noticia" <?php if (isset($_GET["id"])){ echo 'value="'.$row['titulo'].'"'; }?>>
				
				<p>Imagen destacada (jpg)</p>
				<input type="file" name="imagen_noticia" id="imagen_noticia" accept="image/jpeg">

				<p>Cuerpo</p>
				<!-- Create the editor container -->
				<div id="editor">
					<?php 
						if (isset($_GET["id"])){ 
							echo $row['cuerpo'];
							mysqli_close($dbc);
						}
					?>
				</div>
				<input type="text" style="display: none;" name="id_noticia" id="id_noticia" value="<?php if (isset($_GET["id"])){ echo $id; }else {echo '0';}?>">
				<button type="button" name="send_noticia" id="send_noticia" class="send_noticia">Guardar</button>
			</form>
			<script>
				var toolbarOptions = [
					['bold', 'italic', 'underline', 'strike'],        // toggled buttons
					['blockquote', 'code-block'],

					[{ 'header': 1 }, { 'header': 2 }],               // custom button values
					[{ 'list': 'ordered'}, { 'list': 'bullet' }],
					[{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
					[{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
					[{ 'direction': 'rtl' }],                         // text direction

					[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
					[{ 'header': [1, 2, 3, 4, 5, 6, false] }],
					[ 'link', 'image', 'video', 'formula' ],          // add's image support
					[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
					[{ 'font': [] }],
					[{ 'align': [] }],

					['clean']                                         // remove formatting button
				];

			var quill = new Quill('#editor', {
				modules: {
					toolbar: toolbarOptions
				},

				theme: 'snow'
			});
			
		</script>
		</section>
		
		<!-- Ventana Exito -->
		<div class="modal fade" id="Ventana_Exito" role="dialog">
			<div class="modal-dialog"> 
				<!-- Contenido Ventana -->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Registro Correcto</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
					</div>
				</div>     
			</div>
		</div>
		
		<?php include('../footer.php'); ?>
	</body>
</html>