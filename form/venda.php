
<!DOCTYPE html>
<html>
<head>
<script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Realizar Venda </title>

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
    <a class="navbar-brand" href="form/painel.php">SIGAPEV</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="form/painel.php">Home</a></li>
     <li><a href="form/listar_venda.php">Listar Vendas</a></li>
    </ul>
   </div>
  </div>
 </nav>
 
 <div id="main" class="container-fluid">
  <br>
  <h2 class="page-header">Realizar Venda</h2>
  </div>



  <br>
  <div class="form-group">
  <label class="col-md-1 control-label" for="CEP">Digite o Codigo do Produto <h15></h15></label>
  <div class="col-md-2">



    <input id="tag_produto" name="tag_produto" placeholder="Apenas números" class="form-control input-md" required="" value="" type="number">
  </div>

  <div class="col-md-">
      <button type="submit" class="btn btn-primary" onclick="pesquisa_produto()">Pesquisar Produto </button>
      <br>
      <br>
     

    <div class="row">
    <form action="processa_pedido.php" method="POST">
    <input id="tag" name="tag" placeholder="Apenas números" class="form-control input-md" required="" value="" type="hidden">
      <div class="form-group col-md-2">
        <label for="nome">CPF Cliente  :</label>
        <input type="text" class="form-control" id="cpf_cliente"  name = "cpf_cliente"  placeholder="Digite o Nome do Produto">
      </div>
    <div class="form-group col-md-2">
        <label for="descricao">Produto :</label>
        <input type="text" class="form-control" id="nome_produto"  name = "nome_produto"  placeholder="Digite a Descrição do Produto">
      </div>
    <div class="form-group col-md-2">
        <label for="quantidade">Quantidade Produto : </label>
        <input type="number" class="form-control" id="qtd_produto"  name ="qtd_produto" placeholder="Digite a Quantidade do Produto">
      </div>

  <div class="form-group col-md-2">
        <label for="quantidade">Valor Total : </label>
        <input type="number" class="form-control" id="valor_produto"  name ="valor_produto" placeholder="Digite a Quantidade do Produto">
      </div>
  </div>
 

  <div class="row">
    <div class="text-center">
    <br>
      <button type="submit" class="btn btn-warning btn-sm">Concluir Pedido</button>
      <a href="painel.php" class="btn btn-danger btn-sm">Cancelar Pedido</a>
      
      </form>
    </div>
    </div>
  </div>
  </form>
 </div>
</div>
</div>

</body>

</html>


<script>


function pesquisa_produto(){

  $.ajax({
  url: "processa_pedido.php",
  method:"POST",
  data:{tag_produto:$("#tag_produto").val(),
  action:'pesquisa'
  }
 }).done(function(retorno) {

var receber_json = JSON.parse(retorno);

$("#tag").val($("#tag_produto").val());
$("#nome_produto").val(receber_json['nome_produto']);
$("#qtd_produto").val(receber_json['qtd_produto']);
$("#valor_produto").val(receber_json['valor_produto']);


console.log(receber_json);

});


}




</script>


