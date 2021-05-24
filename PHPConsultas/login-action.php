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


/*$digito = (if($email === "digito1"){
    $email = filter_input(INPUT_POST, "email_usuario", FILTER_VALIDATE_EMAIL);
} else if($emailOng === "digito1"){
    $emailOng = filter_input(INPUT_POST, "email_ong", FILTER_VALIDATE_EMAIL);
});

$digito2 = (if($senha === "digito2"){
    $senha = filter_input(INPUT_POST, "senha_usuario");
} else if($senhaOng === "digito2"){
    $senhaOng = filter_input(INPUT_POST, "senha_ong");
});*/

/*$email = filter_input(INPUT_POST, "email_usuario", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha_usuario");
$emailOng = filter_input(INPUT_POST, "email_ong", FILTER_VALIDATE_EMAIL);
$senhaOng = filter_input(INPUT_POST, "senha_ong");*/


