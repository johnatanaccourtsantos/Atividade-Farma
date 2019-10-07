 <!DOCTYPE html>
<html>
<head>
	<title>Remedio</title>
	<meta charset="utf-8">
	<style>
	#customers {
  		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
  		width: 100%;
  		background-color: #037003;
	}

	#customers td, #customers th {
 		border: 1px solid #ddd;
  		padding: 8px;
  		color: white;
	}

	#customers tr:{
		background-color: #033f03;

	}

	#customers tr:hover {
		background-color: #033f03;
		color: black;

		
	}

	#customers th {
 		 padding-top: 12px;
  		padding-bottom: 12px;
  		text-align: left;
  		background-color:#07170f;
  		color: white;
	}
</style>
</head>
<body style=" background: url(back.jpg) fixed no-repeat; background-size: 100% auto;" class="container">
	<h1 style="color: white; text-align: center; margin-bottom: 5%;">UltraFarmaMegaPowerSuperDuperAlmostPlus</h1>
<?php 
	
	 $qtdItem = $_POST["qtdItem"];
 	 $remetente = $_POST["remetente"];
 	 $cpf = $_POST["cpf"];
 	 $endereco = $_POST["endereco"];
  	 $num = $_POST["num"];
 	 $compl = $_POST["compl"];
 	 $cep = $_POST["cep"];
 	 $cid = $_POST["cid"];
 	 $estado = $_POST["estado"];		


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "FARMA";



	$conn = new mysqli($servername, $username, $password, $dbname);


	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	
$sql = "SELECT * FROM CARRINHO";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
			

				$total = "$row[PRECO]" * "$row[QUANTIDADE]";
				

		 echo "	<form action='Finalizar.php' method='POST'>
		 		<table id='customers'>
						<tr>
							<th>Produto <br><hr> "." <h1><i><b>$row[NOME]</b></i></h1>"."</th>
							<th>Quantidade</th>
							<th>Preço</th>
							<th>Total</th>
						</tr>
							<td><img src='imgRemedios/$row[IMAGEM]' width='100'></td>
							<td>$qtdItem</td>
							<td>R$: $row[PRECO]</td>
							<td>R$: $total</td>
						</th>
				</table>
<br><br><br><br>
				";
		 	};



		 	echo "<table id='customers'>
						<tr>
							<td>Nome: $remetente</td>
						</tr>
						<tr>
							<td>Endereço: $endereco Nº: $num</td>
						</tr>
						<tr>
							<td>CEP: $cep</td>
						</tr>
						<tr>
							<td>Cidade: $cid</td>
						</tr>
						<tr>
							<td>Estado: $estado</td>
						</tr>					
				</table>
				<br><br><br>
				<input type='hidden' name='qtdItem' value='$qtdItem'>
				 <input style='width: 100%; color: green; padding: 20px;' type='submit' name='$row[NOME]' value='Finalizar Compra'>";
		
	}
	$conn->close();

 ?>
<div style="width: 100%;  color: green;"></div>
</body>
</html>