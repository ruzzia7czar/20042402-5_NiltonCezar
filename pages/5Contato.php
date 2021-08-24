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


				
	<?php
		@$valor = $_GET['p'];

		if ($valor == "quemsomos") {require_once "2Quem Somos.php";}
		if ($valor == "produtos") {require_once "3produtos.php";}
		if ($valor == "receitas") {require_once "4receitas.php";}
		if ($valor == "contato") {require_once "5Contato.php";}
			// code...
	?>


 <main>


				<center><img src="img/contato.jpg" alt="Quem Somos"style="width:450px;height:450px;"></center>
				<p>Em sua forma mais comum, o texto é como se segue: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus
				 lobortis condimentum. Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis 
				 egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, felis ut adipiscing. Nos países de 
				língua inglesa o texto apresenta-se em forma um pouco diferente, apresentada a seguir:</p>

				
 	</main>

 	<footer>
 		<p><h2>Desenvolvimento: <a href="#">20042402-5_NiltonCezar</a></h2>

  </footer>


	

</body>
</html>