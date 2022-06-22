<?php
$carros = array("fusca","chevette","brasilia");
print_r($carros);
echo $carros[0];


$carros[]= "gol"; //adicionando item ao array
print_r($carros);


$carros[10]="palio"; //especificando posição do item
print_r($carros);

$motos = array();
$motos[]= "yamaha";
$motos[]="honda";
print_r($motos);


$perifericos = ["mouse","teclado","monitor"]; // outro modo de criar arrays
print_r($perifericos);
?>