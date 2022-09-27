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
  echo "<h1>"."Condicional"."</h1>";


   /////////////////// If

  //$salario = 5876;  

  // if($salario>=4000){
  //   echo "Salario Junior";
  // }else{
  //   echo "Salario Estágiario";
  // }
/*
  if($salario>=15000){
    echo "Desenvolvedor Senior";
  }elseif($salario<=15000 and $salario>=6000){
    echo "Dev Pleno";
  }elseif($salario<=6000 and $salario>=4000){
    echo "Dev Junior";
  }else{
    echo "Estágiario";
  }


$x=48;
 
if($x%2==0){
  echo "par";
}else{
  echo "impar";
}



$un1 = 6.2;
$un2 = 7.0;
$un3 = 8.1;
$un4 = 6.2;

$media = ($un1 + $un2 + $un3 + $un4)/4;

if($media>=7){
  echo "aprovado: ".$media;
}elseif($media>=4 and $media<7 ){
  echo "prova final: ".$media;
}else{
  echo "recuperação: ".$media;
}

////////////////////////////  switch

$nome = "Luiz";

switch ($nome){
  case "mario";
  echo "Não é Jailton";
  break;

  case "jailton";
  echo "Éh Jailton";
  break;

  case "Luiz";
  echo "Não é Jailton, éh Luiz";
  break;


}


////////////////// for e whilw   --  laço de repetição


for($x=0; $x<=60; $x++){ // for(variavel; condição; incremento) ação;
  if($x%2==1){  //Selecionar o numero par
  echo $x."<br>"; //Imprimir no documento HTML no navegador.

}//Fim if
}//Fim for



$x=0;// Variavel de inicialização

while($x<20){ // condição até vinte
  echo "Senac"."<br>";
  $x++; //incrememnto de repetiçõ
}



////// Vetor = Array, variavél multidimencional com varios valores

$alunos = array("davi","jaragao","luiz","vitor", "vladmir"); /// Array

$totalAlunos = count($alunos); /// count para contar o array

for($x=0; $x<$totalAlunos;$x++){ /// for para percorrer o array
echo $alunos[$x]."<br>";
}


for($x=numeros; $x=<$totalNumeros; $x++){
  echo $x;
}

*/

$numeros = array(23,99,20,11,02,50,40,19,74,12,17,18,04,78,85,05);
$totalNumeros = count($numeros);
echo "total de numerus: ".$totalNumeros."<br>";
for($x=0; $x<$totalNumeros; $x++){
  if($numeros[$x]%2==0){  //Selecionar o numero par
    echo $numeros[$x]."<br>"; //Imprimir no documento HTML no navegador.

  }//Fim if
  }




?>
</body>
</html>