<?php

$clientes = ['aroldo','romão','deodoro'];

var_dump(is_array($clientes)); //verifica se o dado é um array

var_dump(in_array('aroldo',$clientes)); //verifica se existe determinado valor dentro do array
var_dump(in_array('guizin',$clientes));

$keys = array_keys($clientes); // retorna um novo array com as chaves do array recebido
print_r($keys);


?>
