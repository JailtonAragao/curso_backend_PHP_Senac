<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      background: linear-gradient(130deg,orange,red);
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }

    .box{
      background: rgba(0,0,0,0.5);
      color: white;
      padding: 20px;
      border-radius: 10px;
    }
    .box input[type="submit"]{
      background: white;
      color: black;
      font-weight: 500;
      border-radius: 5px;
      padding: 2px 5px;
      border: none;
      outline: none;
      display: block;
      margin: auto;
      cursor: pointer;
    }

    .php_calcular{
      margin: auto;
      padding-top: 10px;
      text-align: center;
      font-weight: 500;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
  </style>
</head>
<body>
  <div class="box">
    <form action="index.php" method="POST">
      <label for="n1">Numero: 1</label>
      <input type="text" name="n1" id="n1" required>
      <br></br>
      <label for="n2">Numero: 2</label>
      <input type="text" name="n2" id="n2" required>
      <br></br>
      <!-- select -->
      <label for="operadores">Operação:</label>

        <select name="operadores" id="operadores">
          <option value="soma">+</option>
          <option value="subtracao">-</option>
          <option value="multiplicacao">*</option>
          <option value="divisao">/</option>
        </select>
      <br></br>
      <input type="submit" name="submit" value="calcular">
    </form>
    <div class="php_calcular">
        <?php
        //Script PHP
        // Calcular numeros vindo do formulario.
        // Pegando variavel global do html fazendo a passagem de interface para variavel local
        if(isset($_POST["submit"])){ // Usando o metodo isset;;; se existe?
        $numero1 = $_POST["n1"];
        $numero2 = $_POST["n2"];
      }
        $operacao = $_POST["operadores"];

        switch ($operacao){

          case "soma";
          echo "A soma dos 2 valores é: " .$numero1+$numero2;
          break;

          case "subtracao";
          echo "A subtação dos 2 valores é: " .$numero1-$numero2;
          break;

          case "multiplicacao";
          echo "A multiplicação dos 2 valores é: " .$numero1*$numero2;
          break;

          case "divisao";
          echo "A divisão dos 2 valores é: " .$numero1/$numero2;
          break;

        }        
        ?>
    </div>
  </div>
</body>
</html>