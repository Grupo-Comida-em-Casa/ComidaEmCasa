<?php
require('config.php');
require('Usuario.php');

if(isset($_POST['nome'])){

    $nome = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha");
    $telefone = filter_input(INPUT_POST, "telefone");
    $cpf = filter_input(INPUT_POST, "cpf");
    $confirmarSenha = filter_input(INPUT_POST, "senhaconfirmar");
}

$usuario = new Usuario($pdo);
$resultado = "";

if($nome && $email && $senha && $telefone && $cpf){
    if($confirmarSenha === $senha ){
        if($usuario->verificaEmailUsuario($email)||$usuario->verificaEmailOng($email)){
            $resultado = "email ja existe";
        }else{
            $usuario->cadastrarUsuario($email, $nome, $senha, $telefone, $cpf);
            $resultado = "ok";
        }   
    }else{
        //Funcionando
        $_SESSION["ERRO"] = '<div class="alert alert-warning">Senha não confere!</div>';
        header('Location: ../PHPPaginas/index.php');

    }
}
echo $resultado;
?>