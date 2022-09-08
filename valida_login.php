<?php
    session_start();
    
    //variáveis de controle do usuário
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil = null;

    $perfis = Array(1 => 'Adm', 2 => 'User');

    //usuários do sistema (hard-code)
    $usuarios_app = Array(
        array('id' => 1, 'email' => 'testeadm@gmail.com', 'password' => '12345', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'teste@hotmail.com', 'password' => '12345', 'perfil_id' => 2)
    );

    //verificando se usuário está cadastrado no sistema
    foreach ($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil = $user['perfil_id'];
        }
    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    } 
?>