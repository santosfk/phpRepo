<?php
$cor = "vermelho";

switch($cor):
case "vermelho":
echo "sua cor preferida é vermelho";
break;
case "azul":
echo "sua cor preferida é azul";
break;
endswitch;

echo "||";
$cor2 = "azul";

switch($cor2):
case "vermelho":
echo "sua cor preferida é vermelho";
break;
case "azul":
echo "sua cor preferida é azul";
break;
endswitch;
echo "||";
$cor3 = "verde";

switch($cor3):
case "vermelho":
echo "sua cor preferida é vermelho";
break;
case "azul":
echo "sua cor preferida é azul";
break;
default:  //serve pra quando a varialvel não encaixa em nenhum dos cases
echo "voce nao gosta nem de azul nem de vermelho";
endswitch;
?>