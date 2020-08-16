<!DOCTYPE html>
<html>
<head>
	<title>Imprimir Pedidos</title>
</head>
<body>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Inicio</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<?php 

	include("conexao.php");
	$id = $_GET['id_pedido'];
	$sql = "select  * from tb_pedido where id_pedido =".$id;
	$lista = mysqli_query($link,$sql);

	if ($lista->num_rows > 0) {

		while($pedido = $lista->fetch_assoc()) {
			?>
			<h2> ID Venda :  <?php echo $pedido['id_pedido']; ?></h2>
			<hr>

			<dl class="dl-horizontal">
				<dt>Cpf Cliente : </dt>
				<dd><?php echo $pedido['cpf_cliente']; ?></dd>

				<dt>Nome Produto :</dt>
				<dd><?php echo $pedido['nome_produto']; ?></dd>

				<dt>Quantidade Produto :</dt>
				<dd><?php echo $pedido['qtd_produto']; ?></dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Tag Produto :</dt>
				<dd><?php echo $pedido['tag_produto']; ?></dd>

				<dt>Valor :</dt>
				<dd><?php echo "R$ ".$pedido['valor_produto']; ?></dd>
			</dl>

		<div id="actions" class="row">
		<div class="col-md-12">
			<a  onClick="window.print()" class="btn btn-success">Imprimir</a>
           	<a href="listar_venda.php" class="btn btn-danger">Voltar</a>
		</div>
	</div>
		
        <?php 
			}
        }
		 else {

    
            echo "Nenhum Resultado Econtrado !";


        }



?>




</body>
</html>