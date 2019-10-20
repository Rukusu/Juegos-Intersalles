<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	//include('core.php');
	$website = file_get_contents('http://fe26llc.com/Juegos-Intersalles/nota.php?id='.$_GET["id"]);
			echo $website;
	
?>
