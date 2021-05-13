<?php
require('config.php');
require('Usuario.php');
$_SESSION["ERRO"] = '';

$instituicao = filter_input(INPUT_POST, "instituicao_ong");
$email = filter_input(INPUT_POST, "email_ong", FILTER_VALIDATE_EMAIL);
$cnpj = filter_input(INPUT_POST, "cnpj_ong");
$senha = filter_input(INPUT_POST, "senha_ong");
$cep = filter_input(INPUT_POST, 'cep_ong', FILTER_SANITIZE_STRING, array('options' => array('default' => NULL)));
$telefone = filter_input(INPUT_POST, "telefone_ong");
$descricao = filter_input(INPUT_POST, "descricao_ong");
$endereco = filter_input(INPUT_POST, "endereco_ong");
$confirmarSenha = filter_input(INPUT_POST, "confirmaSenha_ong");

$ong = new Usuario($pdo);


if($instituicao && $email && $endereco && $cnpj && $senha && $cep && $telefone && $descricao){
    if($confirmarSenha === $senha ){
        if($ong->verificaEmailOng($email)){
            echo "Esse email ja existe!";
        }else{
            $ong->cadastrarOng($instituicao, $email, $endereco, $cnpj, $senha, $cep, $telefone, $descricao);
            echo"deu certo";
        }
    }else{
        //Funcionando
        $_SESSION["ERRO"] = '<div class="alert alert-warning">Senha não confere!</div>';
        header('Location: ../PHPPaginas/cadastroOng.php');

    }
}else{ 
    echo"cep não preenchido";
}