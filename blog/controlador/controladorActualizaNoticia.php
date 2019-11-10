<?php
include_once '../modelo/Noticia.php';
include_once '../modelo/NoticiaBO.php';
include_once '../core.php';

$noticia = new Noticia($_POST);
$noticiaLogica = new NoticiaBO();

echo $noticiaLogica->ActualizarNoticia($noticia);



?>