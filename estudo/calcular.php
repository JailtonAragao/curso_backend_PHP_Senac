<?php
// Calcular numeros vindo do formulario.
// Pegando variavel global do html fazendo a passagem de interface para variavel local
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];

echo "A soma dos 2 valores é :" .$numero1+$numero2;


?>