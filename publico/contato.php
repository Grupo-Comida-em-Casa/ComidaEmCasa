<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
<style>
</style>

</head>
<body>
<!------------------------------------------------------Menu-------------------------------------------------------------> 
<?php  
include "header.php";

?>
  <header class="masthead text-white text-center">
    <div class="overlay">
      <h1 class="titulo_principal">Contato</h1>
      <p><h4 class="linha">______</h4>
    </div></p>
    <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <h2 class="sub_titulo_cotato">Tire suas dúvidas com a gente</h2>
          </div>
        </div>
    </div>
  </header>
  <div class="container"><br><br><br>
    <div class="row">
        <div class="col">
        <h4>Formulário de contato</h4>
        <hr>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Telefone</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Telefone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">E-mail</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>
        </div>
        <div class="col">
            <ol style="list-style: none;"><br><br>
                <li><h4>Informações UniSociesc</h4></li>
                <hr>
                <li><h5>Endereço</h5></li>
                <li>R. Gothard Kaesemodel, 833</li>
                <li>Joinville - SC</li>
                <li>Cep: 89203-400</li>
                <hr>
                <li><h5>E-mail</h5></li>
                <li>qualquercoisa@unisociesc.com.br</li>
                <hr>
                <li><h5>Telefone<h5></li>
                <li>(47) 3512-3100</li>
            </ol>
        </div>
    </div><br><br><br>
 </div>
    <header class="masthead">  
        <div class="container">
            <h3 style="text-align: center;">UniSociesc</h3><br>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.230687792488!2d-48.85734847781437!3d-26.31902861695845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deb05ec0c78719%3A0x5156afc9e34f6ef8!2sR.%20Gothard%20Kaesemodel%2C%20786%20-%20Anita%20Garibaldi%2C%20Joinville%20-%20SC%2C%2089203-522!5e0!3m2!1spt-BR!2sbr!4v1620609989832!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
        </div>
    </header>
    <?php include "footer.php";?>
</body>
</html>