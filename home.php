<?php require_once("validador_acesso.php"); ?>

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
            <div class="card-menu"> <!-- Card-menu -->
                <div class="card"> <!-- Card -->
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body"> <!-- Card-body -->
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="abrir_chamado.php">
                                    <img src="img/formulario_abrir_chamado.png" width="70" height="70" alt="">
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consultar_chamado.php">
                                    <img src="img/formulario_consultar_chamado.png" width="70" height="70" alt="">
                                </a>
                            </div>
                        </div>                        
                    </div> <!-- /card-body -->
                </div> <!-- /card -->
            </div> <!-- /card-menu -->
        </div> <!-- /row -->

    </div> <!-- /container -->

</body>

</html>