<!DOCTYPE html>
<html>
<head>
	<title>Remedio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
	#customers {
  		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
  		width: 100%;
	}

	#customers td, #customers th {
 		border: 1px solid #ddd;
  		padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
 		padding-top: 12px;
  		padding-bottom: 12px;
  		text-align: left;
  		background-color: #4CAF50;
  		color: white;
	}
</style>
</head>
<body style=" background: url(back.jpg) fixed no-repeat; background-size: 100% auto; margin-top: 3%;" class="container">

	
<?php 
	session_start();

	$qtdItem = $_POST["qtdItem"];
 	 		


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "farma";



	$conn = new mysqli($servername, $username, $password, $dbname);


	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}



$sql = "SELECT * FROM CARRINHO";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
			for ($i=0; $i < $qtde; $i++) { 
				$_SESSION["RESULTADO$i"] = $row["QUANTIDADE"];
				$_SESSION["CODIGOREM$i"] = $row["CODIGOREM"];
			}
		}
	}


	
$sql = "SELECT * FROM CARRINCARRIN";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
			for ($i=0; $i < $qtde; $i++) { 
				$_SESSION["RESULTADO$i"] = $row["QUANTIDADE"];
				$_SESSION["CODIGOREM$i"] = $row["CODIGOREM"];
			}
		}
	}


$sql = "SELECT * FROM remedios";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
				$_SESSION["RESULTADO"] = "$row[QUANTIDADE]" - $_SESSION["RESULTADO$"];
			for ($i=0; $i < $qtde; $i++) { 
				$sql = "UPDATE remedios SET QUANTIDADE = ".$_SESSION["RESULTADO$i"]." WHERE NOME = '$row[NOME]';"; 
				}	
		}

	}

	 	
		for ($i=0; $i < $qtde; $i++) { 
		 	$sql = "INSERT INTO VENDAS (CODIGO)
		 	VALUES (".$_SESSION["CODIGOREM$i"].");";
		}	
		
	
	if ($conn ->query($sql) === TRUE) {
		echo "<h1 style='text-align: center; color: white; font-size: 100px;'><strong>Compra Realizada</strong></h1><br>";
		echo "<div style='text-align: center; color: white;'><img src='Confere.png'></div>";
	}
	else {
		echo "Error" . $conn->error;
	}


//================================================================


$sql = "SELECT CODVENDA, DCOMPRA FROM VENDAS ORDER BY CODVENDA DESC LIMIT 1";
	$result = $conn->query($sql);	

	if ($result->num_rows > 0) {
		$qtde = mysqli_num_fields($result);

		while ($row = $result->fetch_assoc()) {
		  	    echo "<br>";  
		 		echo "<div style='text-align: center; color: white; font-size: 30px;'>Codigo :" . "$row[CODVENDA]</div>";
		 		echo "<br><hr>"; 
		 		echo "<div style='text-align: center; color: white; font-size: 100px;'>$row[DCOMPRA]</div>";
		 	
		}
	}
	if ($conn ->query($sql) === TRUE) {
		echo "";
	}
	else {
		echo "" . $conn->error;
	}


	$sql = "TRUNCATE TABLE CARRINCARRIN";
		$result = $conn->query($sql);
	$conn->close();
 ?>
<br><br>
 <div >
 	<button style="width: 100%; padding: 30px; font-size: 30px;"class='btn btn-success'><a style="color: white;" href="remedios.php">Continuar Comprando</a></button>
 </div>
</form>
</body>
</html>