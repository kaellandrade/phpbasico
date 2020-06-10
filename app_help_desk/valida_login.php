<?php
    // Variável que identifica a validação;
    $usuarios_autenticado = false;
    
    $usuarios_app = Array(
        Array('email' => 'micael.java@outlook.com', 'senha' => '1234567'),
        Array('email' => 'paulo.perl@gmail.com', 'senha' => '123'),
        Array('email' => 'marco.tw@outlook.com', 'senha' => '123$')

    );


    
    foreach($usuarios_app as $user){
        // echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];   // ![debug] 
        // echo '<br/>';                                                     // ![debug] 
        // echo 'Usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha'];// ![debug]

        // Compara o valor do form com o banco
        if(($user['email'] === $_POST['email']) && ($user['senha'] === $_POST['senha'])){
            $usuarios_autenticado = true;
        }
        // echo '<hr>'; // ![debug] 
    }

        if($usuarios_autenticado){
            echo 'Usuário autenticado!';
        }else{
            header('Location: index.php?login=erro'); //! força o redirecionamento 
        }




    // echo '<pre>';
    //     var_dump($_POST);
    // echo 'pre/>';
?>