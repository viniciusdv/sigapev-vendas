
 <?php
include ("conexao.php");

  if(!empty($_POST['nome_produto'] && ['valor_produto'])){
      echo "<br>Campo Preenchido";
  }

$nome_produto = $_POST['nome_produto'];
$descricao_produto = $_POST['descricao_produto'];
$qtd_produto = $_POST['qtd_produto'];
$tag_produto = $_POST['codigo_produto'];
$valor_produto = $_POST['valor_produto'];

$query = "INSERT INTO tb_produto (nome_produto,descricao_produto,qtd_produto,tag_produto,valor_produto) VALUES ('$nome_produto','$descricao_produto','$qtd_produto','$tag_produto','$valor_produto')";
$insert = $link->query($query);

if(mysqli_query($link,$insert)){

 echo " Dados Cadastrado com sucesso!<br></br>";
 header("Location:lista.php");
			
}else{
echo " Impossivel Cadastrar os Dados ! <br></br>";
 header("Location:lista.php");

}


  ?>
