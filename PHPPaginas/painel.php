<?php
require('../PHPConsultas/config.php');
require('../PHPConsultas/Usuario.php');
$meta = 1;
$user = new Usuario($pdo);

$doacoes = $user->listarDoacoes();
//var_dump($doacoes);
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
    <?php
    // <-----------------------------------Se meta == 0 então oculta o pincel------------------------------------------>
    if ($meta == 0) {
        echo "<style>
                #editar{
                    display:none;
                }
            </style>";
    }
    //  <!----------------------------------------------------Fim------------------------------------------------------->

    ?>

</head>

<body>
    <!------------------------------------------------------Menu------------------------------------------------------------->
    <?php
    include "header.php";
    $_SESSION["ERRO"] = '';
    ?>
    <!------------------------------------------------------Fim------------------------------------------------------------->

    <div class="container">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <!------------------------------------------------Filtro--------------------------------------------------------->
            <form method="" action="" class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Filtro" aria-label="Search">
                <button class="btn bg-primary text-white my-2 my-sm-0" type="submit">Filtrar</button>
            </form>
            <!----------------------------------------------------Fim------------------------------------------------------->
            <table class="card" style="background-color: #C4C4C4;">
                <thead>
                    <tr>
                        <th scope="col" style="padding: 7px;">Meta:</th>
                        <th class="card" style="background-color: #A1A1A1; padding: 10px; " scope="col">2000</th>
                        <th style="width: 10px;"></th>
                        <!-----------------Se meta == 0 então aparece um input para preencher o valor da meta--------------->
                        <form method="GET" action="painel.php">
                            <th scope="col"><button type="submit" id="editar" name="meta" value="0" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></th>
                        </form>

                        <?php
                        if ($meta == 0) {
                            echo "
                            <form method=''   action=''>
                            <th  class='card' style='background-color: #A1A1A1; padding: 10px;' scope='col'><input></input></th>
                            <th scope='col'><button type='submit' name='meta' value='1' class='btn btn-primary' ><i class='fa fa-check' aria-hidden='true'></button></th>
                            </form>";
                        }
                        ?>
                        <!----------------------------------------Fim------------------------------------------------------>
                    </tr>
                    <thead>
            </table>
        </nav>
        <!------------------------------------------Enviar, excluir e aceitar-------------------------------------------->
        <form method="" action="">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"><input class="selecao selec-pai" type="checkbox" id="" name=""></th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quant Cestas</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qtdItens = 10;
                    $qtdItens = count($doacoes) >= 10 ? 10 : count($doacoes);

                    for ($x = 0; $x < $qtdItens; $x++) {

                        if ($doacoes[$x]) {
                            echo '
                        <tr>
                        <th scope="row"><input class="selecao" type="checkbox" id="" name=""></th>
                        <td>' . $doacoes[$x]['nome_usuario'] . '</td>
                        <td>' . $doacoes[$x]['quant_cestas_total'] . ' und</td>
                        <td>' . $doacoes[$x]['telefone_usuario'] . '</td>
                        <td>' . $doacoes[$x]['email_usuario'] . '</td>
             <!-------------------------------------------Icones de Excluir e aceitar------------------------------------------->
                        <td><button  type="submit" name="" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                            <button  type="submit" name=""class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <!----------------------------------------------------Fim--------------------------------------------------------->
    
                        </td>
                    </tr>
                    ';
                        }
                    }
                    ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary mb-2">Enviar</button>
        </form>
        <!----------------------------------------------------Fim--------------------------------------------------------->
    </div>
    </header>
    <?php include "Footer.php"; ?>
</body>

</html>

<script>
    var selecaoPai = document.querySelector(".selec-pai")
    var selecao = document.querySelectorAll(".selecao")

    selecaoPai.addEventListener('change', (event) => {
        if (event.currentTarget.checked) {
            for (let x = 0; x < selecao.length; x++) {
                selecao[x].checked = true;
            }
        } else {
            for (let x = 0; x < selecao.length; x++) {
                selecao[x].checked = false;
            }
        }
    })
</script>