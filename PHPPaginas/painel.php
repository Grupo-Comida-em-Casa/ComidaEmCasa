<?php
$meta = 1;
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="container">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <form method="" action="" class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Filtro" aria-label="Search">
                <button class="btn bg-primary text-white my-2 my-sm-0" type="submit">Filtrar</button>
            </form>
            <table class="card" style="background-color: #C4C4C4;">
                <thead>
                    <tr>                               
                        <th scope="col" style="padding: 7px;">Meta:</th>
                        <th  class="card" style="background-color: #A1A1A1; padding: 10px; " scope="col">2000</th>
                        <th style="width: 10px;"></th>
                        <th scope="col"><button type="submit" name="" class="btn btn-primary" ><i class="fa fa-pencil" aria-hidden="true" ></i></button></th> 
                        <?php
                            if($meta == 0){
                            echo "
                            <form method=''   action='painel.php'>
                            <th  class='card' style='background-color: #A1A1A1; padding: 10px;' scope='col'><input></input></th>
                            <th scope='col'><button type='submit' name='meta' value='1' class='btn btn-primary' ><i class='fa fa-check' aria-hidden='true'></button></th>
                            </form>";}
                            ?>
                    </tr>
                <thead>
            </table>  
        </nav>
        <form method="POST" action="contato.php">
            <table class="table table-striped">
                <thead>
                    <tr>                               
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quant Cestas</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <th scope="row"><input class="selecao" type="checkbox" id="" name=""></th>
                        <td>Wagner Martins</td>
                        <td>10 und</td>
                        <td>(47) 98564-2536</td>
                        <td>wagner@martins30@gmail.com</td>
                        <td><button  type="submit" name="" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                            <button  type="submit" name=""class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>    
            <button type="submit" class="btn btn-primary mb-2">Enviar</button>
        </form>
    </div>
</header>
<?php include "Footer.php";?>
</body>
</html>