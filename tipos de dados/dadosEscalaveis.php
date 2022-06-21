<?php

$mensagem = "olá mundo";
var_dump(mensagem);

if(is_string($mensagem)): //validando string
echo "é uma string|";
else : 
echo "nao é uma string|";
endif;

$idade = 22;
var_dump($idade);
if(is_int($idade))://validando inteiro
echo "é um inteiro|";
else : 
echo "não é um inteiro|";
endif;
$altura = 1.67;
var_dump($altura);
if(is_float($altura)): //validando float
echo "é um float|";
else :
echo "não é um float|";
endif;

$admin = false;
var_dump($admin);
if (is_bool($admin)): // validando boolean
echo "é um boolean|";
else:
echo "não é um boolean";
endif;
?>