<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";

	//Criar minha conexão
	$conn = new mysqli($servername, $username, $password);




 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Farmácia</title>
	<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();
	});
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<style>
	.Formatar{
		text-align: center;
		color: white;
		padding: 10%;
		background-color: #07170f;
		margin-top: 10%;
		font-size: 40px;
	}
	.Formatar h1{
		font-size: 60px;
	}
	.Formatar hr{
		padding: 1%;
	}
</style>

</head>
<body style=" background: url(back.jpg) fixed no-repeat; background-size: 100% auto;" class="container">

<div class="Formatar">
			<form action="login2.php" method="POST">
			<h1>Cadastre-se:</h1><hr>
			<label>Nome:</label><br>
			<input style="color: black;"  type="text" name="nome"><hr style="width: 440px;">
			<label>Usuário:</label><br>
			<input style="color: black;" type="text" name="user"><hr style="width: 440px;">
			<label>Senha:</label><br>
			<input style="color: black;" type="text" name="senha" min="0" max="10"><hr style="width: 440px;">
			<br><br>
			<button name="cadastro" value="Finalizar o Cadastro">Concluir o Cadastro</button>	
				
			
			</form>
</div>
</body>
</html>