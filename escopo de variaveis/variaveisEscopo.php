<?php
	$nome = "guizin|";
	
	function mostrarNome(){
	  global $nome ; //permite que a variavel seja acessada mesmo estando fora da função
	  echo $nome;
	};
	
	mostrarNome();
	
	function mostrarCidade (){
	  global $cidade;
	  $cidade = "cachoeira paulista|"; 
	 // nesse caso permite que a variavel seja acessada fora da função
	 // mesmo estando no escopo local
	}
	
	mostrarCidade();
	echo $cidade;
	
	$a=2;
	$b=20;
	
	function somar(){
	  echo $GLOBALS['a']+ $GLOBALS['b'];
	}
	somar()
	
?>