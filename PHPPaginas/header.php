  <head>
  <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Index</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="../CSS/estilo.css">
      <link rel="stylesheet" href="../CSS/style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
  </head>
<?php 
if (session_status() != 2){
  session_start(); 
}
$logged = isset($_SESSION['nome_usuario']) && !empty($_SESSION['nome_usuario']) || isset($_SESSION['instituicao_ong']) && !empty($_SESSION['instituicao_ong']);

?>
<div class="container">
  <nav class="navbar navbar-expand-lg " id="mainNav">
      <div class="container">
        <nav class="navbar navbar-dark">
          <div class="dropdown">
            <button class="navbar-toggler  bg-primary text-white"  type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown-content">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link" href="historia.php">HISTÓRIA</a></li>
                <li class="nav-item"><a class="nav-link" href="Doe.php">DOE</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">CONTATO</a></li>         
              </ul>
            </div>    
          </div>
        </nav>
        <a href="index.php"><img src="../IMG/logotipo.png" style="width: 200px; max-width: 200px !important;" alt=""></a>
          <div class="collapse navbar-collapse container" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item"><a class="nav-link" href="historia.php">HISTÓRIA</a></li>
                  <li class="nav-item"><a class="nav-link" href="Doe.php">| DOE</a></li>
                  <li class="nav-item"><a class="nav-link" href="contato.php">| CONTATO |</a></li>
              </ul>
          </div>
          <?php
            if($logged === true){
              echo "<div class='dropdown'> 
              <img class='dropbtn' src='../IMG/login-iconeicon.svg'>
                <div style='position: relative;' class='dropdown-content'>
                  <a style='position: absolut;' href='../PHPPaginas/perfil.php'>Meu perfil</a>
                  <a style='position: absolut;' href='../PHPConsultas/sair.php'>Sair</a>
                </div>
                </div>";
            }
          ?>
      </div>
      <?php
      if($logged === false){
        echo "<button class='nav-link btn bg-primary text-white ativar' style='margin-right: 15px;'>LOGIN</button>";
      }
        if($logged === false){
        echo "<button id='botaoRegistro' class='nav-link btn bg-primary text-white ativar_registro'>CADASTRO</button>";
      }
      

      ?>
      
  </nav>
  <!--Inicio Login e cadastro-->
  <div id="modal-login" class="modal-container">
        <div id="modal">
          <button class="fechar">x</button>
          <h1>Login</h1>
          <form method="POST" id="login-form" action="../PHPConsultas/login-action.php">
          <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">E-mail</label>
            <input type="email" class="form-control" id="l-email" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputNovaSenha">Senha</label>
            <input type="password" class="form-control" id="l-senha" name="senha" placeholder="Senha" required>
            </div>
            <button class="logar botoes-modal">Logar</button>
            <button id="botaoCadastro" onclick= "iniciaModalRegistro('modal_reg')" class="logar botoes-modal">Cadastre-se</button>
            <?php  $_SESSION["ERRO"] = ''; ?>
          </div>
          </form>
        </div>
      </div>
      <div id="modal_reg" class="modal-registro-container">
        <div id="modal_registro">
          <button class="fechar">x</button>
          <h2>Cadastro</h2>
          <form id="cadastroform" method="POST" action="../PHPConsultas/cadastro-action.php">
            <div class="form-row">
                    <div class="col-6">
                    <label for="inputEmail4">Nome</label>
                    <input  type="text" id="campo_nome" name="nome" placeholder="Nome" required>
                    </div>
                    <div class="col-6">
                    <label for="inputPassword4">Telefone</label>
                    <input type="text" class="form-control telefone" id="campo_telefone" name="telefone_usuario" placeholder="(XX) XXXXX-XXXX" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">CPF</label>
                    <input type="text" class="form-control cpf" id="campo_cpf" name="cpf_usuario" placeholder="XXX.XXX.XXX-XX" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputCity">E-mail</label>
                    <input type="email" class="form-control" id="campo_email" name="email_usuario" placeholder="example@gmail.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputNovaSenha">Senha</label>
                    <input type="password" class="form-control" id="campo_senha" name="senha_usuario" placeholder="Nova Senha" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Confirmar Senha</label>
                    <input type="password" class="form-control" id="campo_senha_confirmar" name="confirmaSenha_usuario" placeholder="Confirma Senha" required>
                    </div>
                    <?= $_SESSION["ERRO"] ?>
                </div>
            <button id="botaocadastrar" class="logar botoes-modal">Cadastre-se</button>
        </form>
        </div>
      </div>
    </div>
  
  <script src="../JS/script.js"></script>
  <script src="../JS/cadastro.js"></script>
  <script src="../JS/login.js"></script>
  <script>
  $(".cpf").mask('000.000.000-00', {reverse: true});
  $(".telefone").mask('00 00000-0000', {reverse: true});
/*
    var botaocadastrar = document.querySelector('#botaocadastrar');

    
    botaocadastrar.addEventListener('click',function(event){
      event.preventDefault();

    }
    )
*/


  </script>
  <!--fim Login e cadastro-->

