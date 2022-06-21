<?php
$carros = array("ferrari","porsche","maserati",16,20.5,true); //criando um array
var_dump($carros);


class cliente { // criando um objeto
  public $nome;
  public function atribuirNome ($nome){
    $this -> $nome = $nome;
  }
}
$primeiroCliente = new cliente();
$primeiroCliente -> atribuirNome("aroldo");
var_dump($primeiroCliente);

?>
