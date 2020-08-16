<!DOCTYPE html>
<html>
<head>

<head>

 <meta charset="UTF-8">
</head>
<div id="logado">
	<p>Bem vindo <?php echo $nome;?> <b>@<?php echo $usuario;?></b> <a href="?sair.php" class="btn btn-danger">Sair</a></p>
</div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">

    <head>

 <meta charset="UTF-8">
</head>
<div id="logado">
</div>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }


    #botao{ text-align: right }

    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <h button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="lista.php" aria-expanded="false" aria-controls="navbar" >
        </button>
        <a href=" cadastrocliente.php" class="navbar-brand">SIGAPEV</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">          
       <br>
       <br>
            <ul class="dropdown-menu">
                <li><a href="lista.php">Ver Produtos</a></li>
                <li><a href="formularioc.php" >Novo Produto</a></li>
                <li><a href="venda.php" >Nova Venda</a></li>
                <li><a href="listar_venda.php" >Consultar Venda</a></li>

            </ul>
        </li>
    </ul>
</div>
 
     <div id= "botao">
     
    <a href="sair.php"><button type="button" class="btn btn-danger btn-lg">Sair</button>
  
 </div>
    <div class="row">
    <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="venda.php" class="btn btn-primary">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <i class="fa fa-money fa-5x"></i>
                </div>
                <div class="col-xs-12 text-center">
                    <p>Realizar Venda</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="lista.php" class="btn btn-default">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-12 text-center">
                    <p>Produtos</p>
                </div>
            </div>
        </a>
    </div>

    <div class="row">
    <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="formularioc.php" class="btn btn-primary">
            <div class="row">
                <div class="col-xs-12 text-center">
                <i class="fa fa-plus fa-5x"></i>
                </div>
                <div class="col-xs-12 text-center">
                    <p>Cadastrar Produto</p>
                </div>
            </div>
        </a>
    </div>

<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="listar_venda.php" class="btn btn-primary">
            <div class="row">
                <div class="col-xs-12 text-center">
                <i class="fa fa-money fa-5x"></i>
                </div>
                <div class="col-xs-12 text-center">
                    <p>Consultar Vendas</p>
                </div>
            </div>
        </a>
    </div>
</div>



</div>



</html>