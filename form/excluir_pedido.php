<!DOCTYPE html>
<html>
<head>
	<title>Exclusão de Produtos</title>
</head>
<body>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Excluir Produto </title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<div class="row">
    <div class="col-md-12">
    <a href="lista.php" class="btn btn-primary"> Voltar </a>
     
    </div>
  </div>
</body>
</html>

<?php

include("conexao.php");

$id = $_GET['id_pedido'];
$sql = "delete  from tb_pedido  where id_pedido =".$id;
$excluir= mysqli_query($link,$sql);
echo "Produto :  ", $id , "Deletado Com Sucesso !";
header("Location:listar_venda.php");

 ?>