<?php

include('conexao.php');

function Teste($link){

    $id = $_POST["tag_produto"];

    $sql = "select * from tb_produto where tag_produto =" . $id;

    $lista = mysqli_query($link, $sql);

    if ($lista->num_rows > 0) {


        while ($produto = $lista->fetch_assoc()) {

            $nomeP = $produto['nome_produto'];
            $qtdP =  $produto['qtd_produto'];
            $valorP = $produto['valor_produto'];

            return array('nome_produto' => $nomeP, 'qtd_produto' => $qtdP, 'valor_produto' => $valorP);
        }
    } else {
    }
}

function ValorCaixa($link,$valor_pedido){

    $query = "INSERT INTO tb_caixa (valor) VALUES ('$valor_pedido')";
    $insert = $link->query($query);

    if (mysqli_query($link, $insert)) {
    


    } else {
    }
}

function DescontaUnidade($link,$qtdC,$tag){


    $sql = "select * from tb_produto where tag_produto =" . $tag;

    $lista = mysqli_query($link, $sql);
   
    if ($lista->num_rows > 0) {
         
          
        $produto = $lista->fetch_assoc();

            $qtdP =  $produto['qtd_produto'];

            $QdtTotal = $qtdP - $qtdC; // qtdP = quantidade puxada do banco , qtdC = quantidade puxada do input do formulario
            
            if($QdtTotal>=0){

            $query = " update  tb_produto  set qtd_produto = '$QdtTotal' WHERE tag_produto = $tag;";

                   $insert = $link->query($query);

            if (mysqli_query($link, $query)) {
    
            } else {

                return "Erro Update de Estoque ! , voce sera redirecionado ...... <br></br>";
                    
            }
        }else{


       return " <b> Erro ao realizar pedido, Não há estoque suficiente! </b>";

}
  
} else {

    }
}

if (@$_POST['action'] == 'pesquisa') {
    echo json_encode(Teste($link));
} else {

    $tag = $_POST['tag'];
    $cpf_cliente = $_POST['cpf_cliente'];
    $nome_produto = $_POST['nome_produto'];
    $qtd_produto = $_POST['qtd_produto'];
    $valor_total = $_POST['valor_produto'];

    

    if (@$qtd_produto >= 1) {

        $Msg_estoque= DescontaUnidade($link,$qtd_produto,$tag);
    

        if($Msg_estoque){
         
         echo $Msg_estoque;
    
         header("refresh:3;url=venda.php");
         die();
         
    
        }else{
    
            
    
        echo "Pedido realizado com Sucesso!";
        header("refresh:3;url=venda.php");
    
        }

        $query = "INSERT INTO tb_pedido (tag_produto,cpf_cliente,nome_produto,qtd_produto,valor_produto) VALUES ('$tag','$cpf_cliente','$nome_produto','$qtd_produto','$valor_total')";
        $insert = $link->query($query);


      if (mysqli_query($link, $insert)) {
   
      $Msg_estoque= DescontaUnidade($link,$qtd_produto,$tag);
    

    if($Msg_estoque){
     
     echo $Msg_estoque;

     header("refresh:3;url=venda.php");
     die();
     

    }else{


    echo "Pedido realizado com Sucesso !";
    header("refresh:3;url=venda.php");

    }


 } else {

    
}
    } else {

        echo "Erro ao realizar pedido, Não há estoque suficiente!";
        header("refresh:3;url=venda.php");

}
}
