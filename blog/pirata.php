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
		<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
		
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
	
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<script type="text/javascript" src="../js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
	</head>
	<body>
		<!-- Initialize Quill editor -->
		<?php include('../header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">NOTICIAS</div>
		</div>
		<section class="wrapper" id="items" style="margin-top: 20px">
			<form>
			<p>Titulo</p>
			<input type="text" id="titulo_noticia">

			<p>Cuerpo</p>
			<!-- Create the editor container -->
			<div id="editor"></div>

			<button type="button" id="send_noticia">Guardar</button>

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
			
			document.getElementById("send_noticia").onclick = function(){
			var myEditor = document.querySelector('#editor');
			var titulo_noticia = document.getElementById("titulo_noticia").value;
			var text = myEditor.children[0].innerHTML;
			console.log(titulo_noticia);
			console.log(text);
			
			$.ajax({
				type: "POST",
				url: url,
				data: form.serialize(), // serializes the form's elements.
				success: function(data)
				{
					alert(data); // show response from the php script.
				}
			});
			
			}
		</script>
		</section>
		<?php include('../footer.php'); ?>
	</body>
</html>