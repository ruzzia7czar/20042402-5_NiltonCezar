<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
	<title>Doce de Leite</title>
</head>
<body>
	<header>
		<h1> Doce de Leite e Canudo Frito </h1>
	</header>
		<nav class="menu">
	    <ul>
		      <li><a href="1index.php">Home</a></li>
		      <li><a href="2quemsomos.php">Quem Somos</a></li>
		      <li><a href="3produtos.php">Produtos</a></li>
		      <li><a href="4receitas.php">Receitas</a></li>
		       <li><a href="5contato.php">Contato</a></li>
	          
		  </ul>
	      
	    
  	</nav>

 	<main>


				
				<img src="img/receita.jpg" alt="Quem Somos"style="width:450px;height:450px;">
				<img src="img/varios.jpg" alt="Quem Somos"style="width:450px;height:450px;">
				<img src="img/canudo-frito-varios.jpg" alt="Quem Somos"style="width:450px;height:450px;">
				<img src="img/found.jpg" alt="Quem Somos"style="width:450px;height:450px;">
				<img src="img/pudim.jpg" alt="Quem Somos"style="width:450px;height:450px;">
				<img src="img/doceleite-1024x638.jpg" alt="Quem Somos"style="width:450px;height:450px;">
	<?php
		@$valor = $_GET['p'];

		if ($valor == "quemsomos") {require_once "2Quem Somos.php";}
		if ($valor == "produtos") {require_once "3produtos.php";}
		if ($valor == "receitas") {require_once "4receitas.php";}
		if ($valor == "contato") {require_once "5Contato.php";}
			// code...
	?>

 	
 	<footer>
 		<p><h2>Desenvolvimento: <a href="#">20042402-5_NiltonCezar</a></h2>

  </footer>


	

</body>
</html>