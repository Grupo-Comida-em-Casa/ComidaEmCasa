<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
  <header class="capa masthead text-white text-center"><br><br><br><br>
    <div class="overlay">
      <h1 class="titulo_principal">SUA DOAÇÃO <p>TRASFORMA VIDAS!</p>
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
  <div class="container"><br><br>
    <h1 class="titulo2">Quem Somos?</h1><br>
    <div class="row">
      <div class="col-md-5">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
        's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
        to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
        including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the
        readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
        more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making
        <br><br><a href="historia.php"><button stype="button" class="btn bg-primary text-white">História</button></a>
      </div>
      <div class="col">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top" src="../IMG/equipe.jpg" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>


  </div><br><br>

  <header class="parceiros text-white text-center">
    <div class="overlay"><br>
      <h1 class="titulo3">ONGs Parceiras</h1>
    </div><br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="4000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">

        </div>
        <div class="carousel-item">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">

        </div>
        <div class="carousel-item">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">
          <img class="" src="../IMG/parceiros.png" alt="First slide">

        </div>
      </div>
    </div><br>
    <a href="Doe.php"><button stype="button" class="btn bg-primary text-white">Saiba mais</button></a>
    </div>
    </div>
    </div><br>
    <div>
    <img src="" alt="" srcset="">

    </div>
  </header>
  <script>
    var botaoSair = document.querySelector("#botaoSair");
    if (botaoSair != null) {
      botaoSair.onclick = function() {
        var diolog = confirm("Deseja mesmo sair?");

        if (!diolog) {
          return false;
        }

      }
    }
  </script>
  <script src="../JS/script.js"></script>
  <?php include "Footer.php"; ?>
</body>

</html>