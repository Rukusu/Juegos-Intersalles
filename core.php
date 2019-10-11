<?php
	function connect_bajio(){
		$servidor = '127.0.0.1';
		$db = 'intersalles_2019';
		$usuario = 'intersalles';
		$pass = "DvFOyE4UeTjaxScS";
		if(@$dbc = new mysqli($servidor,$usuario,$pass,$db)){
			//echo 'Conexión establecida<br>';
			return $dbc;
		}else{
			echo 'No se pudo conectar al servidor.<br>';
			exit();
		}
		return $dbc;
	}
	function convertHour($strHour){
		$elm = explode(':',$strHour);
		return date('g:'.$elm[1].' a', mktime($elm[0], 0, 0, date('n'), date('j'), date('Y')));
	}
?>