  <head>
  <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Index</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/estilo.css">
      <link rel="stylesheet" href="../css/style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
  </head> 
<div class="container">
  <nav class="navbar navbar-expand-lg " id="mainNav">
      <div class="container">
        <nav class="navbar navbar-dark">
          <div class="dropdown">
            <button class="navbar-toggler  bg-primary text-white" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown-content">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link" href="historia.php">HISTÓRIA</a></li>
                <li class="nav-item"><a class="nav-link" href="doe.php">DOE</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">CONTATO</a></li>         
              </ul>
            </div>    
          </div>
        </nav>
        <a href="index.php"><img src="../img/logotipo.png" id="logo" alt=""></a>
          <div class="collapse navbar-collapse container" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item"><a class="nav-link" href="historia.php">HISTÓRIA</a></li>
                  <li class="nav-item"><a class="nav-link" href="doe.php">| DOE</a></li>
                  <li class="nav-item"><a class="nav-link" href="contato.php">| CONTATO |</a></li>
              </ul>
          </div>
      </div>
    <button class='nav-link btn bg-primary text-white ativar' style='margin-right: 15px;'>LOGIN</button>
    <button id='botaoRegistro' class='nav-link btn bg-primary text-white ativar_registro'>CADASTRO</button>
  </nav>
  <!--Inicio Login e cadastro-->
  <div id="modal-login" class="modal-container">
        <div id="modal">
          <button class="fechar">x</button>
          <h1>Login</h1>
          <form method="POST" id="login-form" action="../php/login-action.php">
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
              <button id="botaoCadastro" class="logar botoes-modal">Cadastre-se</button>
          </div>
          </form>
        </div>
      </div>
      <div id="modal_reg" class="modal-registro-container">
        <div id="modal_registro">
          <button class="fechar">x</button>
          <h2>Cadastro</h2>
          <form id="cadastroform" method="POST" action="../php/cadastro-action.php">
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
                      <label for="inputCity">E-mail</label>
                      <input type="email" class="form-control" id="campo_email" name="email_usuario" placeholder="example@gmail.com" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="inputNovaSenha">Senha</label>
                      <input type="password" class="form-control" id="campo_senha" name="senha_usuario" placeholder="Nova Senha" required>
                    </div>
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">É uma ong?</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option value="1" required>Não</option>
                      <option value="2" required>Sim</option>
                    </select>
                </div>            
            <button id="botaocadastrar" class="logar botoes-modal">Cadastre-se</button>
        </form>
        </div>
      </div>
    </div>
    <script src="../js/script.js"></script>
