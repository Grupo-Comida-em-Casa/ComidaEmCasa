<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/doe.css">
  <link rel="stylesheet" href="../CSS/pagina-ong.css">

  <title>Doe</title>
</head>

<body>
  <?php require "header.php";
  $_SESSION["ERRO"] = '';

  ?>

  <main>
     <header class="capa masthead text-white text-center"><br><br><br><br>
        <div class="overlay">
            <h1 class="titulo_principal">Deseja Doar?</h1></p>
            </h1>
            <h2 class="sub_titulo">Faça a diferença na vida dessas pessoas <p> com apenas alguns cliques.</p>
            </h2>
            <?php if ($logged) { ?>
                <h2 class="b_doar"><a href="../PHPPaginas/../PHPPaginas/Doe.php"><button type="button" class="btn btn-primary">Doar</button></a></h2>
            <?php
            } else { ?>
                <h2 class="b_doar"><button type="button" onclick="iniciaModal('modal-login')" class="btn btn-primary">Doar</button></h2>
            <?php } ?>
        </div><br>
    </header>
    <section class="ongs">
      <div class="ongs-card grid-16">
        <div class="imagem">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="resumo-ong">
          <h2>Nome ONG Exemplo</h2>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
          </p>

          <p class="cestas-adquiridas">Cestas Adquiridas: <span id="req-cestas">80</span></p>

          <span id="percent" class="percent">80%</span>
          <span id="percent-bar" class="percent-bar"></span>

          <p>Cestas desejadas: <span id="cestas-desejadas">80</span></p>
        </div>

        <div class="call">
          <a href="pagina-ong.php" class="btn">Doar</a>
          <a href="pagina-ong.php" class="btn">Saiba Mais</a>
        </div>
      </div>

      <div class="ongs-card grid-16">
        <div class="imagem">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="resumo-ong">
          <h2>Nome ONG Exemplo</h2>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
          </p>

          <p class="cestas-adquiridas">Cestas Adquiridas: <span id="req-cestas">80</span></p>

          <span id="percent" class="percent">80%</span>
          <span id="percent-bar" class="percent-bar"></span>

          <p>Cestas desejadas: <span id="cestas-desejadas">80</span></p>
        </div>

        <div class="call">
          <a href="pagina-ong.php" class="btn">Doar</a>
          <a href="pagina-ong.php" class="btn">Saiba Mais</a>
        </div>
      </div>

      <div class="ongs-card grid-16">
        <div class="imagem">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="resumo-ong">
          <h2>Nome ONG Exemplo</h2>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
          </p>

          <p class="cestas-adquiridas">Cestas Adquiridas: <span id="req-cestas">80</span></p>

          <span id="percent" class="percent">80%</span>
          <span id="percent-bar" class="percent-bar"></span>

          <p>Cestas desejadas: <span id="cestas-desejadas">80</span></p>
        </div>

        <div class="call">
          <a href="pagina-ong.php" class="btn">Doar</a>
          <a href="pagina-ong.php" class="btn">Saiba Mais</a>
        </div>
      </div>

      <div class="ongs-card grid-16">
        <div class="imagem">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="resumo-ong">
          <h2>Nome ONG Exemplo</h2>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
          </p>

          <p class="cestas-adquiridas">Cestas Adquiridas: <span id="req-cestas">80</span></p>

          <span id="percent" class="percent">80%</span>
          <span id="percent-bar" class="percent-bar"></span>

          <p>Cestas desejadas: <span id="cestas-desejadas">80</span></p>
        </div>

        <div class="call">
          <a href="pagina-ong.php" class="btn">Doar</a>
          <a href="pagina-ong.php" class="btn">Saiba Mais</a>
        </div>
      </div>
    </section>
  </main>

  <?php include "Footer.php" ?>
</body>

</html>