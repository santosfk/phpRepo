<?php
// count demonstra o numero de item dentro do array
$clientes = ['aroldo','romão','deodoro'];
$totalClientes = count($clientes);
echo $totalClientes;

// foreach percorre cada item do array
$roupas = ['camisa','short','cachecol'];
foreach($roupas as $valor){
  echo "|$valor |";
}

?>