 <!DOCTYPE html>
<html>
<head>
	<title>Remedio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style>
		
	</style>
</head>
<body style=" background: url(back.jpg) fixed no-repeat; background-size: 100% auto;" class="container">
	
	<div style=" color: white; background-color: #07170f; padding: 30px; margin-top: 10%;">

<form action='Comprar3.php' method='POST'>
		<div>
			<h1>Endereço de Entrega:</h1>
			<hr>
			<label class:'color'>Remetente:</label>
			<input style='color: black;' type='text' name='remetente'> 
			<label>CPF:</label>
			<input style='color: black;' type='text' name='cpf' max='11'>
			<br><br>
			<label>Endereço:</label>
			<input style='color: black;' style='width: 620px; type='text' name='endereco' max='50'>
			<br><br>
			<label>Número:</label>
			<input style='color: black;' type='text' name='num'>
			<label>Complemento:</label>
			<input style='color: black;' type='text' name='compl'>
			<label>CEP:</label>
			<input style='color: black;' type='text' name='cep' max='8'>
			<br><br>
			<label>Cidade:</label>
			<input style='color: black;' type='text' name='cid'>
			<label>Estado:</label>
			<input style='color: black;' type='text' name='estado'>
			<br><br>
			<input style='color: black;' type='hidden' name='qtdItem' value='qtdItem'>
			<br><br><br>
			<button style='width: 100%; color: green;' name='nome'>Enviar</button>
		</div>
		</form>

 <div style="width: 100%; color: green;"></div>
</div>
</body>
</html>