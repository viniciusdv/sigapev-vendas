<!DOCTYPE html>
<html>
<head>
	<title>Formulario Alteração</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body>

</body>
</html>
	<?php 

	include("conexao.php");
	$id = $_GET['id'];	
	$sql = "select   * from tb_produto where id =".$id;
	$lista = mysqli_query($link,$sql);

	if ($lista->num_rows > 0) {

	while($produto = $lista->fetch_assoc()) {
    
 ?>
			<h2>Produto :  <?php echo $produto['id']; ?></h2>
			<hr>
              
            
 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Atualizar Produto </h3>
  
  <form action="atualizac.php" method="POST">
    <div class="row">
      <div class="form-group col-md-4">
      <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
        <label for="">Nome Produto : </label>
      <input type="text" name="nome_produto" class="form-control" value="<?php echo $produto['nome_produto']; ?>">
      </div>
    <div class="form-group col-md-4">
        <label for="">Descrição Produto :</label>
        <input type="text" class="form-control"  name="descricao_produto" value="<?php echo $produto['descricao_produto']; ?>">
      </div>
    <div class="form-group col-md-4">
        <label for="">Quantidade Produto :</label>
         <input type="number" name="qtd_produto"  class = "form-control"  value="<?php echo $produto['qtd_produto']; ?>">
      </div>
  </div>
  
  <div class="row">
      <div class="form-group col-md-3">
        <label for="">Tag Produto : </label>
         <input type="number" name="codigo_produto"  class = "form-control" value="<?php echo $produto['tag_produto']; ?>">
      </div>
    <div class="form-group col-md-3">
        <label for="">Valor : </label>
         <input type="number" name="valor_produto"  class = "form-control" value="<?php echo $produto['valor_produto']; ?>">
      </div>
    
  </div>
  
 
  </div>

  </dl>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="lista.php" class="btn btn-danger">Voltar</a>
			 <button type="submit" class="btn btn-primary">Atualizar</button>
		</div>
	</div>

</body>
</html>
  </form>
		<?php 

			}

		} else {
		echo " Nenhum Produto Encontrado ";

	}


?>


