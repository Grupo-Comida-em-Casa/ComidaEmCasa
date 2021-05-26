<?php
require('config.php');
require('Usuario.php');

$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email_usuario", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha_usuario");
$telefone = filter_input(INPUT_POST, "telefone_usuario");
$cpf = filter_input(INPUT_POST, "cpf_usuario");
$confirmarSenha = filter_input(INPUT_POST, "confirmaSenha_usuario");



$usuario = new Usuario($pdo);

if($nome && $email && $senha && $telefone && $cpf){
    if($confirmarSenha === $senha ){
        if($usuario->verificaEmail($email)){
            echo "Esse email ja existe!";
        }else{
            $usuario->cadastrarUsuario($email, $nome, $senha, $telefone, $cpf);
            echo"deu certo";
        }
    }else{
        //Funcionando
        $_SESSION["ERRO"] = '<div class="alert alert-warning">Senha não confere!</div>';
        header('Location: ../PHPPaginas/index.php');

    }
}