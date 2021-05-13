<?php
require('config.php');
require('Usuario.php');

$email = filter_input(INPUT_POST, "email_usuario", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha_usuario");

$usuario = new Usuario($pdo);

if($email && $senha){
    $usuario->fazerLogin($email, $senha);
    
      
}else{
    echo "deu errado";
}