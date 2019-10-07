<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";

	//Criar minha conexão
	$conn = new mysqli($servername, $username, $password);


	//Verificar a conexão
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else {
		echo "Connection Successfully";
	}


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
	#imghao{
		width: 100%;
	}
	figcaption{
  		transition: transform 600ms var(--acc-back), opacity 100ms ease-in;
		height: inherit;
		position: absolute;
		top: 300;
		left: 260; 
		width: 100%; 
		height: 100%;
		font-size: 50px;
		color: green;
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
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-tower"></span> &nbsp; Farmácia Almost+&nbsp;</a>
		</div>
		<div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="remedios.php">Sobre Nós</a></li>
						<li><a href="logando.php">Remédios</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>
	<br><br>

	<figure style="color: white; position: relative; transition: transform 600ms;">
			<img id="imghao" src="farmacia.jpg">
		<figcaption style="margin-bottom: 40px;">
			<span style="background-color: white;"><a style="color: green;" href="login.php">Cadastre-se para Comprar!!</a></span>
		</figcaption>
	</figure>


	<h1 style="text-align: center; color: white; background-color: #236d46;">Bem-vindo a Nossa Farmácia Almost+</h1><br>


	<div id="section61" class="container-fluid">
		<br>
	<div id="myCarousel1" class="carousel slide" data-ride="carousel" style="width: 100%;">
  
	<ol class="carousel-indicators">
    
    	<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel1" data-slide-to="1"></li>
    	<li data-target="#myCarousel1" data-slide-to="2"></li>

  	</ol>

	<div class="carousel-inner">
	    <div class="item active">
	      <img src="1.jpg" alt="Farma1" style="width:100%;">
	    </div>

		<div class="item">
	      <img src="2.jpg" alt="Farma2" style="width:100%;">
	    </div>

		<div class="item">
	      <img src="3.jpg" alt="Farma3" style="width:100%;">
	    </div>  
	</div>

<p style="color: white;">Copyright FarmaAlmost+ 2019</p>
</body>
</html>