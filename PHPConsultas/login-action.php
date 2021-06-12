<?php
require('config.php');
require('Usuario.php');
$_SESSION["ERRO"] = '';

$usuario = new Usuario($pdo);
$ong = new Usuario($pdo);

$digitoEmail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$digitoSenha = filter_input(INPUT_POST, "senha");

$resultado = "";

if($ong->verificaEmailOng($digitoEmail)){
    
    $ong->fazerLoginOng($digitoEmail, $digitoSenha);
    $resultado = "ok";

}else if($usuario->verificaEmailUsuario($digitoEmail)){
    $usuario->fazerLoginUsuario($digitoEmail, $digitoSenha);
    $resultado = "ok";
}else{
    $resultado = "erro";
}


echo $resultado;