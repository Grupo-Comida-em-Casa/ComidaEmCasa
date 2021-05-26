<?php
require('config.php');
require('Usuario.php');

$usuario = new Usuario($pdo);
$ong = new Usuario($pdo);

$digitoEmail = filter_input(INPUT_POST, "digito1", FILTER_VALIDATE_EMAIL);
$digitoSenha = filter_input(INPUT_POST, "digito2");


if($ong->verificaEmailOng($digitoEmail) === true){
    echo 'entrou ong';
    $ong->fazerLoginOng($digitoEmail, $digitoSenha);
    }else if($ong->verificaEmailUsuario($digitoEmail) === true){
        echo 'entrou usuario';
        $usuario->fazerLoginUsuario($digitoEmail, $digitoSenha);
}


