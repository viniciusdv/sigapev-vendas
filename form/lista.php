<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Produtos</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<?php

	include("conexao.php");

	if (@$_POST['procurar'] ){


		$sql = "select * from tb_produto WHERE nome_produto LIKE '%".$_POST['procurar']."%' or tag_produto = '".$_POST['procurar']."'";
	}
	else{

		$sql = "SELECT * FROM tb_produto";

	}

	$lista = mysqli_query($link,$sql);

	?>

</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="painel.php">SIGAPEV</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="formularioc.php">Produto</a></li>
					<li><a href="painel.php">Ínicio</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="main" class="container-fluid" style="margin-top: 50px">

		<div id="top" class="row">
			<div class="col-sm-3">
				<h2>Itens</h2>
			</div>
			<div class="col-sm-6">
                  <form action="lista.php" method="POST">
					
				    <div class="input-group h2">

				    </form>
				 	<input name="procurar" class="form-control" id="search" type="text" placeholder="Digite o nome ou a Tag para procurar o produto">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="submit">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>

			</div>
			<div class="col-sm-3">
				<a href="formularioc.php" class="btn btn-primary pull-right h2">Novo Cadastro</a>
			</div>
		</div>


		<hr />
		<div id="list" class="row">

			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>

						<tr>
							<th>ID</th>
							<th>Produto</th>
							<th>Quantidade</th>
							<th>Valor</th>
							<th>Tag Produto</th>
						</tr>

					</thead>
					<tbody>

						<?php 

						if ($lista->num_rows > 0) {

							while($rows = $lista->fetch_assoc()) {

								echo  '<tr>
								<td>'.$rows['id'].'</td>
								<td> '.$rows['nome_produto'].'</td>
								<td> '.$rows['qtd_produto']. '</td>
								<td> R$ '.$rows['valor_produto']. '</td>
								<td> '.$rows['tag_produto']. '</td>
								

								<td class="actions">
									<a class="btn btn-success btn-xs" href="vizualizar.php?id='.$rows['id'].'">Visualizar</a>
									<a class="btn btn-warning btn-xs" href="atualizar.php?id='.$rows['id'].'">Editar</a>
									<a class="btn btn-danger btn-xs"  href="excluir.php?id='.$rows['id'].'">Excluir</a>
								</td>
							</tr>';
						}

					} else {
						echo "Nenhum Resultado encontrado na Base : Produtos" ;

					}
					
					?>

				</td>
			</tr>
		</tbody>
	</table>
</div>

</div>

<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modalLabel">Excluir Item</h4>
			</div>

		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>