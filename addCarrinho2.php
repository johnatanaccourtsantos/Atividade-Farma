<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "FARMA";



	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, 'utf8');


	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM CARRINHO";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
			$total = "$row[PRECO]" * "$row[QUANTIDADE]";
			
			echo "<table id='customers'>
						<tr>
							<th>Produto <br><hr> "." <h1><i><b>$row[NOME]</b></i></h1>"."</th>
							<th>Quantidade</th>
							<th>Preço</th>
							<th>Total</th>
						</tr>
							<td><img src='imgRemedios/$row[IMAGEM]' width='100'></td>
							<td>$row[QUANTIDADE]</td>
							<td>R$: $row[PRECO]</td>
							<td>R$: $total</td>
						</th>
				</table>
<br><br><br><br>
				";
		}

		$sql = "SELECT SUM(TOTAL) FROM CARRINCARRIN";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$qtde = mysqli_num_fields($result);
				while ($row = $result->fetch_row()) {
					$total = $row[0];
			}
		}
	}
		echo "<p style='background-color: #07170f; color: white; text-align: center; font-size: 40px;'>Total:</p>
<p style='background-color: #037003; color: white; text-align: center;font-size: 40px;'>R$: $total</p>";
	
	
	$conn->close();

	

 ?>

 <center><a href="remedios.php"><button class='btn btn-warning' style="width: 50%; padding: 30px;">Comprar outro Remédio</button></a></center>
 <br><br>
 <center><a href="Comprar2.php"><button class='btn btn-success' style="width: 50%; padding: 30px;">Confirmar Compra</button></a></center>
 <br><br>


</body>
</html>

