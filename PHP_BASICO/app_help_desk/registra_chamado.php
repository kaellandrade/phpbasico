<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    

    foreach($_POST as $key => $value){
        $value = str_replace('#', '-', $value);
        $_POST[$key] = $value;
    }
    $_POST['id'] = $_SESSION['id']; // atribui o id logado há variável $_POST
    // Adicionando a data em post para fazer parte do chamado
    $_POST['data'] = date("d/m/Y \à\s g:i A"); 

       
    $texto = implode('#', $_POST) . PHP_EOL; // Identifica a plataforma e adiciona um  caracter de quebra de linha

    $arquivo = fopen('../../../app_help_desk/arquivo.txt', 'a+'); // abrindo um arquivo de texto
    fwrite($arquivo, $texto);             // escreve no arquivo indicado
    fclose($arquivo);                     // fechando o arquivo

    header('Location: abrir_chamado.php')
?>