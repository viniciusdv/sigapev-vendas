
<html>

<?php
	include_once("conexao.php");
?>


<center>

<div id="cadastro" style="width: 400px;">


<h3>Cadastre-se</h3>
	
<head>

    <meta charset="UTF-8">
    <title>Login SIGEP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

</head>


		<form action="" method="POST" enctype="multipart/form-data">
			<p><label>Nome</label></br> <input type="text" name="nome" id="nome" placeholder="Meu nome" class="form form-control"/></p>
			<p><label>Usuário</label></br> <input type="text" name="usuario" id="usuario" placeholder="Meu usuário" class="form form-control"/></p>
			<p><label>E-mail</label></br> <input type="email" name="email" id="usuario" placeholder="E-mail" class="form form-control"/></p>
			<p><label>Senha</label></br> <input type="password" name="senha" id="senha" placeholder="**********" class="form form-control"/></p>
			<p><input type="submit" value="Cadastrar" class="btn btn-success" style="width: 120px;" /></p>
			<input type="hidden" name="cadastrar" value="register"/>
		</form>
	</div>
	

</center>	
	<?php
		if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == "register"){
			$nome = $_POST['nome'];
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];

			if(empty($nome) || empty($usuario) || empty($senha)){
				echo "Preencha todos os campos!";
			}else{
				$query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
				$result = mysqli_query($link, $query);
				$conta = mysqli_num_rows($result);
				$busca = mysqli_fetch_assoc($result);

				if($conta > 0){
					echo "Usuário já cadastrado.";
				}else{
					$cadastrar = "INSERT INTO usuarios (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha')";
					if(mysqli_query($link, $cadastrar)){
						$_SESSION['nome'] = $nome;
						$_SESSION['usuario'] = $usuario;
						echo "Cadastro efetuado com sucesso!<br></br>";
						echo "Seus dados são: </br>";
						echo "<b>Usuário: ".$usuario."</br>";
						echo "Senha: ".$senha."</b></br>";
						echo "<a href = 'inicio.php'>Clique aqui para entrar</a>";
					}else{
						echo "Erro ao cadastrar, contate o Administrador do Sistema!";
					}
				}
			}
		}
	?>

	</html>