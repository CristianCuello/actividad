<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h2>Algoritmo que muestre los numeros impares del 1 al 100</h2>


    <?php

    $numero =1;
    while($numero<=100){
   if($numero%2!=0){
      echo "$numero";
   }
   if($numero<=100){
      echo "<br>";
    }
      $numero++;

}






     ?>

  </body>
</html>
