<?php
session_start(); // iniciando as variavel de SESSION
session_destroy(); // Destroi todas variaveis de SESSION, Sair do login 
header('Location:index.html')// Devolvendo para tela index
?>