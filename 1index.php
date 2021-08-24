<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
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


				<img src="img/pasto.jfif" alt="Quem Somos"style="width:1600px;height:650px;">
	<?php
		@$valor = $_GET['p'];

		if ($valor == "quemsomos") {require_once "2quemsonos.php";}
		if ($valor == "produtos") {require_once "3produtos.php";}
		if ($valor == "receitas") {require_once "4receitas.php";}
		if ($valor == "contato") {require_once "5Contato.php";}
			// code...
	?>

			
 	</main>

 	<footer>
 		<p><h2>Desenvolvimento: <a href="#">20042402-5_NiltonCezar</a></h2>

  </footer>


	

</body>
</html>