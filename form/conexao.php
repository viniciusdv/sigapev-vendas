<?php

$servidor ='localhost';
$banco    = 'db_projeto';
$usuario  = 'root';
$senha     ='';


$link     =mysqli_connect($servidor ,$usuario,$senha,$banco);


if(!$link){

	echo "Erro de Conexão! Tente Mais Tarde ";  exit();


}



?>