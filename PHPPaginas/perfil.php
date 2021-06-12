<?php
if (!$logged){
  //echo '<script>window.location.href = "index.php";</script>';
  header('Location: index.php');
  exit;
}
?>
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

?><br>

      <div class="text-center">
        <img src="../IMG/perfil.jpg" style="border-radius: 190px; width: 250px;" alt="...">
      </div>
     <ul class="list-group  mx-auto" style="width: 26rem;">
      <label class=""><?= ($_SESSION['nome_usuario'] == "") ? "Instituição:" : "Nome:"; ?></label>
      <li class="perfil list-group-item "><?= ($_SESSION['nome_usuario'] != "") ? $_SESSION['nome_usuario'] : $_SESSION['instituicao_ong']; ?></li>
      <label class="">Telefone:</label>
      <li class="perfil list-group-item" ><?= $_SESSION['telefone']; ?></li>

      <?php if (($_SESSION['nome_usuario']) == ""): ?>

      <label class="">História:</label>
      <li class="perfil list-group-item" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</li>
     
      <?php endif; ?>
    </ul>
  </div>
</div><br><br><br>  

    <?php include "Footer.php";?>
</body>
</html>