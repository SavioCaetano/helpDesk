<?php
    session_start();

    /* remove indices do array de seção
    unset($_SESSION['autenticado']); //remove o índice apenas se existir
    */

    //destroi a variável de sessão //importante forçar um redirecionamento após destruir a seção
    session_destroy();
    header('Location: index.php');
?>