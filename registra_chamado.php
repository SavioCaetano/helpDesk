<?php
    session_start();

    //trabalhando montagem do texto para salvar no arquivo
    foreach ($_POST as $idx => $info_chamado) {
        //percorrendo o array com os dados inseridos e substituindo qualquer incidência do caractere '#'
        $_POST[$idx] = str_replace('#', '*', $_POST[$idx]);
    }
    
    $chamado = implode("#", $_POST);
    $texto = $_SESSION['id'] . '#' . $chamado . PHP_EOL;

    /* criando/abrindo o arquivo com os dados dos chamados */
    $arquivo_chamados = fopen('arquivo.hd', 'a');
    
    //escrevendo as informações do chamdo no arquivo
    fwrite($arquivo_chamados, $texto);

    //fechando o arquivo após salvar os dados informados
    fclose($arquivo_chamados);
    
    header('Location: abrir_chamado.php');
?>