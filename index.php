<?php

  
include_once("form/conexao.php");
	
//@session_start();


?>

<html>
	<head>

		 <meta charset="UTF-8">
		<title>Login SIGAPEV</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	</head>

	<body>
		<div id="body">
			<?php
				if(isset($_GET['pagina'])){
					$do = ($_GET['pagina']);
				}else{
					$do = "form/inicio.php";
				}

				if(file_exists("form/inicio.php")){
					include("form/inicio.php");
				}else{
					print 'Página não Encontrada!';
				}
			?>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.3/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>