<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  <div class="box-imc">
  <div class="calcular">
      <?php
      if(isset($_POST["submit"])){
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
      }
      $imc = $peso/($altura*$altura);     
        echo "O seu IMC é: " .round($imc,2);      
      ?>
    </div>
    
    <form action="index.php" method="POST">
      <label for="altura">Altura:</label>
      <input type="text" name="altura" id="altura" required>
      <br></br>
      <label for="peso">Peso:</label>
      <input type="text" name="peso" id="peso" required>
      <br></br>
      <input type="submit" name="submit" value="calcular">
    </form>

    <div class="calcular">
  <?php

  if($imc<=18.5){
    echo "Sua classificação é Baixo Peso";
  }elseif($imc<=24.99){
    echo "Sua classificação é Peso Normal";
  }elseif($imc<=29.99){
    echo "Sua classificação é Sobrepeso";
  }elseif($imc>=30){
    echo "Sua classificação é Obesidade";
  }else{

  }

  ?>
    </div>    
  </div>
</body>
</html>