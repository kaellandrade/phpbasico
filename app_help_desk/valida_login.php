<?php
    session_start();

    // Variável que identifica a validação;
    $usuarios_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = Array(1 => 'Administrativo', 2 => 'Usuário');

    $usuarios_app = Array(
        Array('id' => 1, 'email' => 'micael.java@outlook.com', 'senha' => '1234', 'perfil_id' => 1),
        Array('id' => 2, 'email' => 'paulo.perl@gmail.com', 'senha' => '1234', 'perfil_id' => 2),
        Array('id' => 3, 'email' => 'marco.tw@outlook.com', 'senha' => '1234', 'perfil_id' => 2),
        Array('id' => 4, 'email' => 'jose@outlook.com', 'senha' => '1234', 'perfil_id' => 2)
    );


    
    foreach($usuarios_app as $user){
        // Compara o valor do form com o banco
        if(($user['email'] === $_POST['email']) && ($user['senha'] === $_POST['senha'])){
            $usuarios_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        } 
    }

        if($usuarios_autenticado){
            $_SESSION['autenticado'] = true;
            $_SESSION['id'] = $usuario_id;
            $_SESSION['perfil_id'] = $usuario_perfil_id;
            header('Location: home.php');
        }else{
            $_SESSION['autenticado'] = false;
            header('Location: index.php?login=erro');
        }

?>