
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
		$nome = $_POST["nome"];
		$user = $_POST["user"];
		$senha = $_POST["senha"];

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO users (CODIGOUSU, NOME,  
PASSWORD) VALUES
		('$nome', '$user', '$senha')";

		if ($conn->query($sql) === TRUE) {
			echo "<div style='text-align: center;'>
<h1 style='color: white; font-size: 30px;'>Conta Criada com Sucesso!</h1>
<img src='Confere.png'>
<br>
<a href='remedios.php'><button>Confira nossos produtos</button></a>
</div>";
		} else {
			echo "<a href='login.php'>erro no cadastro</a>";
		}

		$conn->close();

 	?>
</body>
</html>