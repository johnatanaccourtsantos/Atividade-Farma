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
		 	$NOME = "$row[NOME]";
		  	$PRECO = "$row[PRECO]";
		 	$IMAGEM = "$row[IMAGEM]";
		 	$QUANTIDADE = $_POST["qtdItem"];
		 	};
		}
	}

	

	$mult = $PRECO * $QUANTIDADE;

	$sql = "INSERT INTO CARRINHO (NOME, PRECO, IMAGEM, QUANTIDADE, TOTAL) VALUES ('$NOME', $PRECO, '$IMAGEM', $QUANTIDADE, $mult)";
	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
	}
	else{
		echo "Error: " . "<br>" . $conn->error;
	}
	
	$conn->close();

	header('Location:http://localhost/Ti92/aula07%20-%20Atividade%20farma/addCarrinho2.php')

 ?>
