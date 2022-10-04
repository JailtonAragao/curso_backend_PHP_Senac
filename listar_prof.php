<?php

include_once 'conexao.php';

$sql="SELECT * FROM professores ORDER BY nome ASC";

$resultado = $conexao->query($sql);

?>

<?php


// Consulta sql em na barra de pesquisa
if(!empty($_GET['search'])){
  $search = $_GET['search'];
  $sql = "SELECT * FROM professores WHERE nome LIKE '%$search%' ORDER BY nome ASC";
}else{
  $sql="SELECT * FROM professores ORDER BY nome ASC";
}

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
  <title>Cadastro de Senha</title>
  <style>

    header h1{
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: 600;
      color: orange;
    }
    .topo {
      color: white;
      display: flex;
      justify-content: space-around;


    }

    body {
      height: 100vh;

    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      width: 100%;
      margin-top: 10px;
    }

    .box {
      background: rgba(0, 0, 0, .5);
      border-radius: 10px;
      padding: 20px;
      width: auto;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }

    .table{
      color:white;
      text-align: center;
    }

    .box form{
      display: flex;
      gap: 10px;
      
      margin-bottom: 20px;

    }
    #sair{
      text-decoration: none;
    }
    
  </style>

</head>


<body class="bg-primary bg-gradient">

  <header class="navbar bg-dark navbar-dark topo">

  

    <a href="index.html"><img src="img/icons8-mulher-estudante-48.png" alt="icon"></a>
    
    <h1>LISTA PROFESSORES
    <?php
    echo "BEM VINDO "
    ?>
    </h1>
    
    <a id="sair" href="sair.php"><button class="btn btn-warning">Sair</button></a> 
    
  </header>
  <main>
    <section class="box">
    <form class="form-inline" action="listar_prof.php" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Professor" aria-label="Search" name="search">
      <button class="btn btn-warning my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">nivel</th>
      <th scope="col">data_admicao</th>
      <th scope="col">genero</th>
      <th scope="col">disciplina</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    // USando o mysqli-fetch-assoc para quebra as lista do banco em resultado
    while($professores = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      
      echo "<td>".ucfirst($professores['nome'])."</td>";
      echo "<td>".$professores['nivel']."</td>";
      echo "<td>".$professores['data_admicao']."</td>";
      echo "<td>".$professores['genero']."</td>";
      echo "<td>".$professores['disciplina']."</td>";
     
      echo "</tr>";
    }
    
    
    ?>
  </tbody>
</table>

    </section>
  </main>
</body>

</html>