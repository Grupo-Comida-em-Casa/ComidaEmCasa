<?php
require('config.php');
require('Usuario.php');

$email = filter_input(INPUT_POST, "email_ong", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha_ong");

$ong = new Usuario($pdo);

if($email && $senha){
    
    $ong->fazerLoginOng($email, $senha);
      
}