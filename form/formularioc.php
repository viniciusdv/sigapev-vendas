
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cadastro de Produto </title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
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
     <li><a href="lista.php">Produtos</a></li>
     <li><a href="inicio.php">Ajuda</a></li>
    </ul>
   </div>
  </div>
 </nav>
 
 <div id="main" class="container-fluid">
  <br>
  <h2 class="page-header">Adicionar Produto</h2>

  </div>
  
  <form action="cadastro.php" method="POST">
    <div class="row">
      <div class="form-group col-md-4">
        <label for="nome">Nome Produto :</label>
        <input type="text" class="form-control" id="nome_produto"  name = "nome_produto"  placeholder="Digite o Nome do Produto">
      </div>
    <div class="form-group col-md-4">
        <label for="descricao">Descrição Produto :</label>
        <input type="text" class="form-control" id="descricao_produto"  name = "descricao_produto"  placeholder="Digite a Descrição do Produto">
      </div>
    <div class="form-group col-md-2">
        <label for="quantidade">Quantidade Produto : </label>
        <input type="number" class="form-control" id="qtd_produto"  name ="qtd_produto" placeholder="Digite a Quantidade do Produto">
      </div>
  </div>
  
  <div class="row">
      <div class="form-group col-md-2">
        <label for="codigo ">Codigo Produto : </label>
        <input type="number" class="form-control" id="codigo_produto" name = "codigo_produto" placeholder="Digite o Codigo do Produto">
      </div>
    <div class="form-group col-md-2">
        <label for="fornecedor">Digite o Valor do Produto : </label>
        <input type="number" class="form-control" id="valor_produto"  name = "valor_produto" placeholder="Digite o Fornecedor">
      </div>
    <br>
  
  <div class="row">
    <div class="col-md-12">
    <br>
      <button type="submit" class="btn btn-success btn-sm">Salvar</button>
    <a href="painel.php" class="btn btn-danger btn-sm">Cancelar</a>
    </div>
  </div>

  </form>
 </div>

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>


</body>

</html>