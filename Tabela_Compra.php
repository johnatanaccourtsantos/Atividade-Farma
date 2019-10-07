<!DOCTYPE html>
<html>
<head>
	<title>Remedio</title>
	<meta charset="utf-8">
	<style>
		.thumb{
			display: inline-block;
			border-style: solid;
  			border-width: 10px 10px 10px 10px;
  			width: 30%;
}
		.thumb2{
			background-color: #215323;
			padding-top: 20px;
			padding-bottom: 20px;
			padding-left: 10px;
			padding-right: 10px;
			text-align: center;
}
		.tit_p{
			color: #fff;
			text-align: center;
}
		img{
			width: 100%;
		}
	</style>
</head>
<body>
	<h1>UltraFarmaMegaPowerSuperDuperAlmostPlus</h1>
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "FARMA";



	$conn = new mysqli($servername, $username, $password, $dbname);


	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM remedios";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
			if (isset($_POST["$row[NOME]"])) {
		 echo "	<div class='thumb'>
					<p>
						<img src='imgRemedios/$row[IMAGEM]' width='500'>
					</p>
					<p>
						<div class='thumb2'>
							<h2 class='tit_p'>$row[NOME]</h2>

								<form action='Tabela_Compra.php' method='POST'>
									<input type='number' name='numero' min='0' max='10'><br><br>
									<h2>R$:"."$row[PRECO]</h2>
									<input type='submit' name='comprar'>
								</form>
						</div>
					</p>
				</div>";
		 	};
		}
	}
	$conn->close();

 ?>
</body>
</html>