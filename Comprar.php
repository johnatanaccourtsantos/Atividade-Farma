
<!DOCTYPE html>
<html>
<head>
	<title>Remedio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.thumb{
			display: inline-block;
			border: 10px;
  			width: 50%;
  			padding-left: 10px;
  			padding-bottom: 10px;
  			margin-left: 25%;
}
		.thumb2{
			background-color: #07170f;
			padding-top: 20px;
			padding-bottom: 20px;
			padding-left: 50px;
			padding-right: 50px;
			text-align: center;
}
		.tit_p{
			color: #fff;
			text-align: center;
}
		img{
			width: 100%;
		}
		.color{
			color: white;
		}
	</style>
</head>
<body style=" background: url(back.jpg) fixed no-repeat; background-size: 100% auto;" class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-tower"></span> &nbsp;UltraFarmaMegaPowerSuperDuperAlmost+&nbsp;</a>
		</div>
		<div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#section1">Home</a></li>
						<li><a href="remedios.php">Sobre Nós</a></li>
						<li><a href="remedios.php">Remédios</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>
	
	



<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "FARMA";



	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, 'utf8');


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
							<p class='color'>$row[DESCRICAO]</p>

								<form action='addCarrinho.php' method='POST'>
									<input type='number' name='qtdItem' min='0' max='$row[QUANTIDADE]'><br><br>
									<button type='input' class='btn btn-success' name='$row[NOME]'>Comprar</button>
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