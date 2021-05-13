<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/estilo.css">
<style>
</style>

</head>
<body>
  
<!------------------------------------------------------Menu-------------------------------------------------------------> 
<?php  
include "header.php";
$_SESSION["ERRO"] = '';
?>


  <header class="masthead text-white text-center">
    <div class="overlay">
      <h1 class="titulo_principal">Ajude uma Família Hoje, Doando <br>Cestas Básicas </h1>
      <p><h4 class="linha">______</h4></div></p>
      <div class="container">
      <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <h2 class="sub_titulo">Faça a diferença na vida dessas pessoas com apenas alguns cliques </h2>
            <p><h6 class="linha">__</h6></p>
            <?php
              if($logged){
            ?>
              <a href="../PHPPaginas/../PHPPaginas/Doe.php"><button  type="button" class="btn btn-warning">Doar</button></a>
            <?php 
              }else{ ?>
              <button  type="button" onclick="iniciaModal('modal-login')" class="btn btn-warning">Doar</button>
              <p><h6 class="linha">OU</h6></p>
              <button type="button" class="btn btn-warning" onclick="iniciaModal('modal-login')">É uma Ong?</button></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container"><br><br>
    <h1 class="titulo_principal">Quem Somos?</h1><br><br>
      <div class="row">
        <div class="col">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
            's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
            to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
              including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the 
              readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
              more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it 
        </div>
        <div class="col">
          <div class="card-group">
            <div class="card">
              <img class="card-img-top" src="../IMG/equipe.png" alt="Card image cap"> 
            </div>
          </div>
        </div>   
      </div><br><br><br>
      <div class="saiba_mais">
        <h5>Conheça mais sobre a gente</h5><br>
        <button stype="button" class="btn btn-warning">HISTÓRIA</button>   
      </div>
    
  </div><br><br>
    
    <header class="masthead text-white text-center">
      <div class="overlay">
        <h1 class="titulo_principal">ONGs Parceiras</h1>
        <h4 class="linha">______</h4></div><br>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <!---->
              <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="../IMG/equipe.png" alt="Card image cap"><br>  
                  <img class="card-img-top" src="../IMG/equipe.png" alt="Card image cap"> 
                </div>
                <div class="card">
                  <img class="card-img-top" src="../IMG/equipe.png" alt="Card image cap"><br>
                  <img class="card-img-top" src="../IMG/equipe.png" alt="Card image cap">
                </div>
                <div class="card">
                  <img class="card-img-top" src="../IMG/equipe.png" alt="Card image cap"><br>
                  <img class="card-img-top" src="../IMG/equipe.png" alt="Card image cap">
                </div>
              </div>
              <!---->
            </div>
          </div><br>
          <div class="saiba_mais">
            <h5>Saiba mais sobre os nossos parceiros</h5><br>
            <button stype="button" class="btn btn-warning">ONGs</button>   
          </div>
        </div>
      </div>
    </header>   
    <img class="d-block w-100" src="../IMG/bg-masthead3.jpg" alt="Second slide">    
   
      
    <script>
      var botaoSair = document.querySelector("#botaoSair");
      if (botaoSair != null){
        botaoSair.onclick=function() {
        var diolog = confirm("Deseja mesmo sair?");

          if (!diolog){
          return false;
        }
      
        }
      }
    </script>
    <script src="../JS/script.js"></script>
    <?php include "Footer.php";
    ?>
</body>
</html>