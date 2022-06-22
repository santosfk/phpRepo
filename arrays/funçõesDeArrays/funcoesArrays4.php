<?php
//transforma string em array
$data = "20/20/2020";
$arrayData = explode('/',$data); // nesse caso o divisor é uma barra
print_r($arrayData);

$frase = "alo brasil";
$arrayFrase = explode(" ",$frase); //o divisor também pode ser um espaço
print_r($arrayFrase);

//transforma array em string

$nomes = ['julio','marinalva','hamiltom'];
$string = implode("-",$nomes);
print_r($string);

?>