 <?php
include ("conexao.php");

$id  =  $_POST['id'];
$nome_produto = $_POST['nome_produto'];
$descricao_produto = $_POST['descricao_produto'];
$qtd_produto = $_POST['qtd_produto'];
$tag_produto = $_POST['codigo_produto'];
$valor_produto = $_POST['valor_produto'];


$query = " update  tb_produto  set  nome_produto = '$nome_produto',descricao_produto = '$descricao_produto' ,qtd_produto= '$qtd_produto',tag_produto = '$tag_produto',valor_produto ='$valor_produto' WHERE id = $id;";

$insert = $link->query($query);


if(mysqli_query($link,$query)){

 echo "Dados Alterados com Suceso !<br></br>";
 header("Location:lista.php");

			
}else{

echo "  Erro ao alterar os Dados! , Por Favor tente novamente !<br></br>";

}
