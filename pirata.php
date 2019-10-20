<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	$website = file_get_contents('http://fe26llc.com/Juegos-Intersalles/noticias.php');
	echo $website;
?>
