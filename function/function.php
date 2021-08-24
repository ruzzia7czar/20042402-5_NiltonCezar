<?php
		@$valor = $_GET['p'];

		if ($valor == "quemsomos") {require_once "2quemsonos.php";}
		if ($valor == "produtos") {require_once "3produtos.php";}
		if ($valor == "receitas") {require_once "4receitas.php";}
		if ($valor == "contato") {require_once "5Contato.php";}
			// code...
	?>