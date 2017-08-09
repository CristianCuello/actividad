<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <h2>Algoritmo que imprima todos los numero pares que van del 1 al 100</h2>

    <?php
    $i =1;
    $suma=0;
    while ($i <=100){
      if(($i%2)==0){
        $suma=$suma+$i;
      }


    $i++;}
    echo "la suma de todos los numeros pares del 1 al 100 son: $suma";


     ?>






  </body>
</html>
