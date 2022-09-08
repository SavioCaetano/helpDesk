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
    </nav>

    <div class="container"> <!-- Container -->

        <div class="row"> <!-- Row -->
            <div class="card-login"> <!-- Card-login -->
                <div class="card"> <!-- Card -->
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body"> <!-- Card-body -->
                        <form action="valida_login.php" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" placeholder="Senha" class="form-control">
                            </div>

                            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>                                
                                <div class="text-danger mb-2"> Usuário ou senha inválido(s) </div>
                            <?php } ?>

                            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>                                
                                <div class="text-danger mb-2"> Faça login antes de acessar as páginas protegidas </div>
                            <?php } ?>

                            <button type="submit" class="btn btn-lg btn-info btn-block"> Entrar </button>
                        </form>
                    </div> <!-- /card-body -->
                </div> <!-- /card -->
            </div> <!-- /card-login -->
        </div> <!-- /row -->

    </div> <!-- /container -->

</body>

</html>