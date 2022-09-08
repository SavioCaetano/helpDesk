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
            <div class="card-chamado"> <!-- Card-chamado -->
                <div class="card"> <!-- Card -->
                    <div class="card-header">
                        Abertura de chamado
                    </div>
                    <div class="card-body"> <!-- Card-body -->
                        <div class="row"> <!-- Row-Form -->
                            <div class="col"> <!-- Col-Form -->
                                <form action="registra_chamado.php" method="POST">
                                    <div class="form-group">
                                        <label for="titulo"> Título </label>
                                        <input type="text" name="titulo" id="titulo" placeholder="Título" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoria"> Categoria </label>
                                        <select name="categoria" id="categoria" class="form-control">
                                            <option value="Usuario"> Criação Usuário </option>
                                            <option value="Impressora"> Impressora </option>
                                            <option value="Hardware"> Hardware </option>
                                            <option value="Software"> Software </option>
                                            <option value="Rede"> Rede </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="descricao"> Descrição </label>
                                        <textarea name="descricao" id="descricao" rows="3" class="form-control"></textarea>
                                    </div>

                                    <div class="row mt-5"> <!-- row-buttom -->
                                        <div class="col-6">
                                            <a href="home.php" class="btn btn-lg btn-warning btn-block"> Voltar </a>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-lg btn-info btn-block"> Abrir </button>
                                        </div>
                                    </div> <!-- /row-buttom -->
                                </form>
                            </div> <!-- /col-form -->
                        </div> <!-- /row-form -->
                    </div> <!-- /card-body -->
                </div> <!-- /card -->
            </div> <!-- /card-chamado -->
        </div> <!-- /row -->

    </div> <!-- /container -->

</body>

</html>