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
    <section class="intro-bg">
      <div class="container">
        <h1>Deseja Doar?</h1>

        <p>Mude a vida de uma família</p>
      </div>
    </section>

    <section class="ongs container">
    <div class="ongs-card grid-16">
        <div class="imagem grid-4">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="grid-6">
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
          <a href="pagina-ong.html" class="btn grid-3">Saiba Mais</a>
        </div>
      </div>

      <div class="ongs-card grid-16">
        <div class="imagem grid-4">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="grid-6">
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
          <a href="pagina-ong.html" class="btn grid-3">Doar</a>
          <a href="pagina-ong.html" class="btn grid-3">Saiba Mais</a>
        </div>
      </div>

      <div class="ongs-card grid-16">
        <div class="imagem grid-4">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="grid-6">
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
          <a href="pagina-ong.html" class="btn grid-3">Doar</a>
          <a href="pagina-ong.html" class="btn grid-3">Saiba Mais</a>
        </div>
      </div>

      <div class="ongs-card grid-16">
        <div class="imagem grid-4">
          <img src="../IMG/foto-ong.svg" alt="Foto da ONG">
        </div>

        <div class="grid-6">
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
          <a href="pagina-ong.html" class="btn grid-3">Doar</a>
          <a href="pagina-ong.html" class="btn grid-3">Saiba Mais</a>
        </div>
      </div>
    </section>

    <footer class="rodape">
      <div class="container">
        <p class="copy grid-6">EstúdioDev &copy; - Alguns direitos reservados.</p>
        <div class="infos-facul grid-5">
          <h3>Telefone</h3>
          <p>(47) 3512-3100</p>
          <h3>Email</h3>
          <p>qualquercoisa@unisociesc.com.br</p>
        </div>
        <p class="sociesc grid-4">UniSociesc</p>
      </div>
    </footer>
  </main>
</body>

</html>