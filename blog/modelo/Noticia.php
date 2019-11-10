<?php

	class Noticia
	{

		//Atributos
		private $titulo_noticia;
		private $imagen_noticia;
		private $cuerpo;
		private $id_noticia;
		
		//Constructor
		public function __construct($post)
		{
			$this->titulo_noticia = $post['titulo_noticia'];
			$this->imagen_noticia = file_get_contents($_FILES['imagen_noticia']['tmp_name']);
			$this->cuerpo = $post['cuerpo'];
			$this->id_noticia = $post['id_noticia'];
		}
		//Metodos
		public function __set($name,$value){
		    if(method_exists($this, $name)){
		      $this->$name($value);
		    }
		    else{
		      /* Getter/Setter not defined so set as property of object*/
		      $this->$name = $value;
		    }
		}

		public function __get($name){
		    if(method_exists($this, $name)){
		      return $this->$name();
		    }
		    elseif(property_exists($this,$name)){
		      /* Getter/Setter not defined so return property if it exists*/
		      return $this->$name;
		    }
		    return null;
		}


	}


?>