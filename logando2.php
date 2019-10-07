
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";

		$dbname = "farma";
		$user = $_POST["user"];
		$senha = $_POST["senha"];

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
		 if ($user == "$row[NOME]" && $senha == "$row[PASSWORD]") {
		 	header('Location:http://localhost/Ti92/aula07%20-%20Atividade%20farma/remedios.php');
		 }
		 else{
		 	echo "
		 	<div class='Formatar'>
		 	<form action='logando2.php' method='POST'>
			<h1>Login:</h1>
			<h4>Ou <a href='login.php'>cadastre-se</a></h4>
			<hr>
			<p style='color: red;'>Usuário ou Senha incorreto</p>
			<br>
			<label>Usuário:</label><br>
			<input style='color: black;' type='text' name='user'><hr style='width: 440px;'>
			<label>Senha:</label><br>
			<input style='color: black;' type='text' name='senha' min='0' max='10'><hr style='width: 440px;'>
			<br><br>
			<button name='cadastro' value='Entrar'>Entrar</button>
			</form>
			</div>";
		 }

		};
		
	}
	$conn->close();
 	?>
</body>
</html>