<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1{
      text-align: center;
      color: red;
    }
  </style>
</head>
<body>
  <?php
  $x = 88;
  $y = 77;


  echo "<h1>"."Operação matematica"."</h1>";
 echo "<br>";
  echo "<h1>"."A soma de dois valores é: ".$x+$y."</h1>";
  echo "<h1>"."A subtração de dois valores é: ".$x-$y."</h1>";
  echo "<h1>"."A Multiplicação de dois valores é: ".$x*$y."</h1>";
  echo "<h1>"."A Divisão de dois valores é: ".round($x/$y,2)."</h1>";
  echo "<h1>"."A Quadrado da primeira variavel é: ".($x**2)."</h1>";
  echo "<h1>"."O resto da divisão é: ".($y%2)."</h1>";

  echo "<br>";
  echo "<h1>"."Operação matematica"."</h1>";
  ?>
</body>
</html>
