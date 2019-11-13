<?php

	class NoticiaBO
	{

		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function insertarNoticia($datos_solicitud)
		{
			$dbc = connect_bajio();
			$datos_solicitud->titulo_noticia = mysqli_real_escape_string($dbc, $datos_solicitud->titulo_noticia);
			$datos_solicitud->cuerpo = mysqli_real_escape_string($dbc, $datos_solicitud->cuerpo);
			$imagen_escapada = mysqli_real_escape_string($dbc, $datos_solicitud->imagen_noticia);
			

			if (strcmp ($datos_solicitud->slider,"true")==0){
				$sql = "INSERT INTO tor_noticias (titulo,cuerpo,imagen,slider) VALUES ('".$datos_solicitud->titulo_noticia."','".$datos_solicitud->cuerpo."','".$imagen_escapada."',1) ";
			} else {
				$sql = "INSERT INTO tor_noticias (titulo,cuerpo,imagen) VALUES ('".$datos_solicitud->titulo_noticia."','".$datos_solicitud->cuerpo."','".$imagen_escapada."') ";
			}
			echo $sql;
			mysqli_query($dbc,$sql);
			$fp = fopen('../img/'.mysqli_insert_id ($dbc).'.jpg', 'w');
				fwrite($fp, $datos_solicitud->imagen_noticia);
			fclose($fp);
			
			
			mysqli_close($dbc);
			/*$bdconectada = new ConectaBD();
			$resultado = array();
			$bdconectada->conectar();
			$datos_solicitud->nombre = $bdconectada->escapar_datos ($datos_solicitud->texto);
			$datos_solicitud->correo = $bdconectada->escapar_datos ($datos_solicitud->correo);
			$datos_solicitud->categoria = $bdconectada->escapar_datos ($datos_solicitud->categoria);
			$datos_solicitud->fileToUpload = $bdconectada->escapar_datos ($datos_solicitud->fileToUpload);
			
			$query = 'INSERT INTO incidencia (Anexo, prioridad, descripcion, solicitante, categoria) VALUES ("'.$datos_solicitud->fileToUpload.'","0","'.$datos_solicitud->texto.'",(SELECT id FROM solicitante WHERE persona=(SELECT id from persona WHERE correo="'.$datos_solicitud->correo.'")),(SELECT id from categoria WHERE nombre="'.$datos_solicitud->categoria.'") 	)';
			$bdconectada->escribir($query);
			$query = 'SELECT LAST_INSERT_ID()';
			$resultado['id'] = $bdconectada->fill($query); 
			$bdconectada->desconectar();
			return json_encode($resultado);*/
		}
		public function ActualizarNoticia($datos_solicitud)
		{
			$dbc = connect_bajio();
			$datos_solicitud->titulo_noticia = mysqli_real_escape_string($dbc, $datos_solicitud->titulo_noticia);
			$datos_solicitud->cuerpo = mysqli_real_escape_string($dbc, $datos_solicitud->cuerpo);
			
			if (empty ($datos_solicitud->imagen_noticia)){
				if (strcmp ($datos_solicitud->slider,"true")==0 ){
					$sql = 'UPDATE tor_noticias SET slider = 1, titulo = "'.$datos_solicitud->titulo_noticia.'", cuerpo = "'.$datos_solicitud->cuerpo.'" WHERE id = "'.$datos_solicitud->id_noticia.'"';
				} else {

					$sql = 'UPDATE tor_noticias SET slider = 0, titulo = "'.$datos_solicitud->titulo_noticia.'", cuerpo = "'.$datos_solicitud->cuerpo.'" WHERE id = "'.$datos_solicitud->id_noticia.'"';
				}
			}else {			
				$datos_solicitud->imagen_noticia = mysqli_real_escape_string($dbc, $datos_solicitud->imagen_noticia);

				if (strcmp ($datos_solicitud->slider,"true")==0 ){
					$sql = 'UPDATE tor_noticias SET slider = 1, titulo = "'.$datos_solicitud->titulo_noticia.'", cuerpo = "'.$datos_solicitud->cuerpo.'", imagen = "'.$datos_solicitud->imagen_noticia.'" WHERE id = "'.$datos_solicitud->id_noticia.'"';
				} else {

					$sql = 'UPDATE tor_noticias SET slider = 0, titulo = "'.$datos_solicitud->titulo_noticia.'", cuerpo = "'.$datos_solicitud->cuerpo.'", imagen = "'.$datos_solicitud->imagen_noticia.'" WHERE id = "'.$datos_solicitud->id_noticia.'"';
				}
				$fp = fopen('../img/'.$datos_solicitud->id_noticia.'.jpg', 'w');
					fwrite($fp, $datos_solicitud->imagen_noticia);
				fclose($fp);
			}
			mysqli_query($dbc,$sql);
			mysqli_close($dbc);
		}
	}


?>