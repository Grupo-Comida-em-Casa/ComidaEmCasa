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
<?php  
include "header.php";
$_SESSION["ERRO"] = '';
?>

  <main>
    <section class="intro-bg intro-bg-ong">
      <div class="container">
        <h1>*Nome da ONG*</h1>
      </div>
    </section>

    <section class="sobre-ong container">
      <h2 class="grid-16">Sobre Nós</h2>

      <div class="historia-ong grid-8">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev
        </p>

        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev
        </p>

        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev
        </p>

      </div>

      <img src="../IMG/ong-bg.png" alt="Foto da ONG/Funcionarios" class="grid-8">
      </div>
    </section>

    <section class="info-localizacao container">
      <h2>Onde Nos Encontrar</h2>

      <div class="endereco">
        <div class="grid-6">
          <h3>Endereço</h3>

          <p>R. Gothard Kaesemodel, 833</p>
          <p>Joinville - SC</p>
          <p>89203-400</p>
        </div>

        <div class="grid-6">
          <h3>Nosso Email</h3>
          <p>qualquercoisa@unisociesc.com.br</p>
        </div>

        <div class="grid-4">
          <h3>Telefone</h3>
          <p>(47) 3512-3100</p>
        </div>
      </div>
    </section>

    <section class="maps container">
      <img src="../IMG/maps.png" alt="Localização da ONG no Maps">
    </section>
  </main>

  <footer class="rodape">
    <div class="container">
      <div class="grid-16">
        <p class="copy grid-6">EstúdioDev &copy; - Alguns direitos reservados.</p>

        <div class="infos-facul grid-5">
          <h3>Telefone</h3>
          <p>(47) 3512-3100</p>

          <h3>Email</h3>
          <p>qualquercoisa@unisociesc.com.br</p>
        </div>

        <p class="sociesc grid-4">UniSociesc</p>
      </div>
    </div>
  </footer>
</body>