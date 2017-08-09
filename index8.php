<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
  </head>
  <body>
    <h2>Algoritmo que muestre la suma de todos los numeros impares del 1 al 100</h2>


    <?php
    $i=1;
    $suma=0;
      while ($i<=100){
         if (($i %2 )!=0){
        $suma=$suma+$i;
 }
     $i++;}
     echo " la suma de todos los numeros impares del 1 al 100 son : $suma";





     ?>

  </body>
</html>
