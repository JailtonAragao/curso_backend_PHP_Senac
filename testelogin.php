<?php
session_start(); //Inicializa as variavéis de SESSION

include_once 'conexao.php';// Essa finção conecta ao arquivo conexao com vanco

if(isset($_POST['submit']) and !empty($_POST['login'] and !empty($_POST['senha']))){ //
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM administradores WHERE login='$login'"; 
  // Procurando o login
  $resultado = $conexao->query($sql); 
  // Armarzenado a consulta no banco
  $usuario = $resultado->fetch_assoc(); 
  // Quebrando o vetor vindo do banco para seperar logine senha 

  // Usando o password_verify para verificar o a senha criptografadano banco
  if(password_verify($senha,$usuario['senha'])){ 
    // IF verificar se a senha escorreta depos de decriptar

    $_SESSION['login'] = $login; 
    // Criado uma Variavel global SESSION para sempre manter autenticado 
    $_SESSION['senha'] = $senha; 
    // no sistema
    header('Location:sistema.php');
    // Header seria o go to despois confirmas o login e abrindo o sistema

  }else{
    $msg = "Senha incorreta";
    header("Location:login.php?msg=$msg");
  }

}else{
  header("Location:login.php"); 
  // Retornando para pag. login quando a senha é vazia
}







?>