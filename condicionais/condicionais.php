<?php
$numero=10;
 if ($numero == 10):
     echo "numero igual a 10";
     elseif($numero <= 10 ):
         echo "numero é menor igual a 10 ";
     else:
         echo "é maior de 10";
     endif;
     
     $numero2=11;
     
    if ($numero2 == 10):
     echo "numero igual a 10";
     elseif($numero2 <= 10 ):
         echo "numero é menor igual a 10 ";
     else:
         echo "é maior de 10";
     endif;
     
     
     $numero3=8;
     
   if ($numero3 == 10):
     echo "numero igual a 10";
     elseif($numero3 <= 10 ):
         echo "numero é menor igual a 10 ";
     else:
         echo "é maior de 10";
     endif;
     
     //operadores ternários
     
     $media = 7;
     echo ($media>=7)? "aprovado":"reprovado";
?>
