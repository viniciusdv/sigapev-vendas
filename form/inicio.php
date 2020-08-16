<center>
<div id="login" style="width: 500px;">
			<h3>Entrar</h3>

			<head>

           <meta charset="UTF-8">
			</head>

			<form action="" method="POST" enctype="multipart/form-data">
				<p><input type="text" name="usuario" id="usuario" placeholder="Usuário" class="form form-control"></p>
				<p><input type="password" name="senha" id="senha" placeholder="*********" class="form form-control"></p>
				<p><input type="submit" value="Entrar" class="btn btn-success" style="width: 120px;" /></p>
				<input type="hidden" name="entrar" value="login">
				<p><a href="cadastro_login.php" class="btn btn-info">Ainda não Possui Cadastro</a></p>
			
			</form>
		</div></center>

		<?php
			if(isset($_SESSION['nome']) && isset($_SESSION['usuario'])){
				header('Location:form/painel.php');
		
				exit;
			}

			if(isset($_POST['entrar']) && $_POST['entrar'] == "login"){
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];

				if(empty($usuario) || empty($senha)){
					echo 'Preencha todos os campos!';
				}else{
					$query = "SELECT nome, usuario, senha FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
					$result = mysqli_query($link, $query);
					$busca = mysqli_num_rows($result);
					$linha = mysqli_fetch_assoc($result);

					if($busca > 0){
						$_SESSION['nome'] = $linha['nome'];
						$_SESSION['usuario'] = $linha['usuario'];
						header('Location:form/painel.php');
						exit;
					}else{
						echo 'Usuário ou senha inválidos.';
					}
				}
			}

		?>