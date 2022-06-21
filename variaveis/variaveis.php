<?php
	$nome = "guizin";
	$idade=19;
	
	echo "meu nome é $nome e eu tenho $idade anos ||";
	
	//reatribuindo variaveis
	
	$nome = "aroldo";
	$idade= 52;
	
		echo "meu nome é $nome e eu tenho $idade anos ||";
		
		//nomes validos para variaveis
		
		$nome; //letra minuscula
		$_nome; //iniciando com underline
		$nome10; //letra e numero
		$meu_nome; //snake case
		$meuNome; //camel case
		
		//nomes invalidos para variaveis
		
		// $1213; //iniciando com numeros
		// $nome%%; // contendo caracteres especiais
		// $meu nome; // com espaços
		
		// as variaveis no php são case sensitive
		
		$carro = "porshe";
		$Carro = "camaro";
		
		echo "esse $carro é diferente desse $Carro"
		// carro e Carro são duas variaveis diferentes
?>