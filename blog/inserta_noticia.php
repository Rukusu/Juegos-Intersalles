<?php
		public $titulo;
		public $cuerpo;
		public $imagen;
		
		$this->texto = $post['titulo_noticia'];
		$this->cuerpo = $post['cuerpo_noticia'];
		$this->imagen = file_get_contents($_FILES['imagen_noticia']['tmp_name']);
		
		$dbc = connect_bajio();
		mysqli_set_charset ( $dbc , "utf8" );
		$sql = "INSERT INTO Tor_noticias () VALUES '".$titulo."','".$cuerpo."','".$imagen."' ";
		
?>