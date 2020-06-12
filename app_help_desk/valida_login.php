<?php
    session_start();

    // Variável que identifica a validação;
    $usuarios_autenticado = false;
    
    $usuarios_app = Array(
        Array('email' => 'micael.java@outlook.com', 'senha' => '1234567'),
        Array('email' => 'paulo.perl@gmail.com', 'senha' => '123'),
        Array('email' => 'marco.tw@outlook.com', 'senha' => '123$')

    );


    
    foreach($usuarios_app as $user){
        // Compara o valor do form com o banco
        if(($user['email'] === $_POST['email']) && ($user['senha'] === $_POST['senha'])){
            $usuarios_autenticado = true;
        } 
    }

        if($usuarios_autenticado){
            $_SESSION['autenticado'] = true;
            $_SESSION['x'] = 'valor x'; //! Apenas para debug
            $_SESSION['y'] = 'valor y'; //! Apenas para debug
            header('Location: home.php');
        }else{
            $_SESSION['autenticado'] = false;
            header('Location: index.php?login=erro');
        }

?>