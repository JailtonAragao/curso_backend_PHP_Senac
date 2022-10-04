<?php
session_start();
include_once 'conexao.php';

if(!empty($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM alunos WHERE id='$id'";
  $resultado = $conexao ->query($sql);

  if($resultado ->num_rows>0){ //Verificar se existr linhas na consulta
    $sqlDelete = "DELETE FROM alunos WHERE id='$id'";
    $resultadoDelete = $conexao ->query($sqlDelete);
    header('Location:sistema.php');
  } //
}else{
  header('Location:sistema.php');
}


?>