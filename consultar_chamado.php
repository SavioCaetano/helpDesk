<?php require_once("validador_acesso.php"); ?>

<?php
    //criando array para armazenar os dados
    $chamados = Array();

    //abrir arquivo com os chamados
    $arquivo_chamados = fopen('arquivo.hd', 'r');

    //captura os dados do arquivo enquanto não chegar ao fim do mesmo
    while(!feof($arquivo_chamados)) {

        //verifica se o perfil do usuário logado é "user"
        if ($_SESSION['perfil_id'] == 2) {
            
            //captura o primeiro caracter da linha (que no caso é o id)
            $id_temp = fgetc($arquivo_chamados);
            
            //verifica se o id do usuário logado é diferente ao id do chamado registrado | se sim, continua para a proxima linha do arquivo
            if ($_SESSION['id'] != $id_temp) {
                continue;
            }
        }

        $linha_arquivo = fgets($arquivo_chamados);
        $info_chamado = explode('#', $linha_arquivo);

        // verifica se o chamado possui todas as informações para serem mostradas na consulta
        if (count($info_chamado) < 4) {
            continue;
        }

        $chamados[] = $linha_arquivo;       
    }

    //fechando arquivo
    fclose($arquivo_chamados);
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>    

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3ccace9655.js" crossorigin="anonymous"></script>

    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top">
            App Help Desk
        </a>
        <a class="navbar-brand" style="font-size: 1em;" href="logoff.php"> SAIR </a>
    </nav>

    <div class="container"> <!-- Container -->

        <div class="row"> <!-- Row -->
            <div class="card-consulta"> <!-- Card-login -->
                <div class="card"> <!-- Card -->
                    <div class="card-header">
                        Consulta de chamado
                    </div>
                    <div class="card-body"> <!-- Card-body -->
                        
                        <?php foreach($chamados as $chamado) { 
                            $info_chamado = explode('#', $chamado);                            
                        ?>

                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title"> <?= $info_chamado[1] ?> </h5>
                                <h6 class="card-subtitle mb-2 text-muted"> <?= $info_chamado[2] ?> </h6>
                                <p class="card-text"> <?= $info_chamado[3] ?> </p>
                            </div>
                        </div>

                        <?php } ?>
                        
                        <div class="row mt-5"> <!-- row-buttom -->
                            <div class="col-6">
                                <a href="home.php" class="btn btn-lg btn-warning btn-block"> Voltar </a>
                            </div>
                            <div class="col-6"></div>
                        </div> <!-- /row-buttom -->

                    </div> <!-- /card-body -->
                </div> <!-- /card -->
            </div> <!-- /card-login -->
        </div> <!-- /row -->

    </div> <!-- /container -->

</body>

</html>