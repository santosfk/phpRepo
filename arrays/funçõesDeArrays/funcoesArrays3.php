<?php
// mostra os valores do array recebido
  $clientes = ['dorival','aroldo','junior'];
  $values = array_values($clientes);
  print_r($values);
  
  
  // mescla o conteudo dos arrays recebidos
  $carros = ['fusca','chevette'];
  $motos = ['honda','yamaha'];
  
  $veiculos = array_merge($carros,$motos);
  
  print_r($veiculos);
  
  // exclui o ultimo item do array
  
  array_pop($veiculos);
  print_r($veiculos);
  
  // exclui o primeiro item do array
  
  array_shift($veiculos);
  print_r($veiculos);

?>