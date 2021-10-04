<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/doe.css">
  <link rel="stylesheet" href="../css/pagina-ong.css">
  <title>Doe</title>
</head>

<body>
<?php  
include "header.php";

?>
  <main>
    <section class="intro-bg intro-bg-ong">
      <div class="container">
        <h1>*Nome da ONG*</h1>
      </div>
    </section>
    <section class="sobre-ong">
      <h2 class="subtitle">Sobre Nós</h2>
      <div class="flex">
        <div class="historia-ong">
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev
          </p>

          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev
          </p>

          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev
          </p>
          <form method="POST" action="">
            <div class="form-group">
              <label for="formGroupExampleInput"><h3>Qual será o valor da sua doação?</h3></label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"><br>
              <button type="button" class="btn btn-primary btn-lg">Doar</button>
            </div>
        </form>
        </div>
        <div>
          <img src="../img/ong-bg.png" alt="Foto da ONG/Funcionarios">
        </div>
      </div>
    </section>

    <section class="info-localizacao">
      <h2>Onde Nos Encontrar</h2>
      
      <div class="endereco">
        <div>
          <h3>Endereço</h3>

          <p>R. Gothard Kaesemodel, 833</p>
          <p>Joinville - SC</p>
          <p>89203-400</p>
        </div>

        <div>
          <h3>Nosso Email</h3>
          <p>qualquercoisa@unisociesc.com.br</p>
        </div>

        <div>
          <h3>Telefone</h3>
          <p>(47) 3512-3100</p>
        </div>
      </div>
    </section>

    <section class="maps">
      <img src="../img/maps.png" alt="Localização da ONG no Maps">
    </section>
  </main>

  <?php include "footer.php" ?>
</body>