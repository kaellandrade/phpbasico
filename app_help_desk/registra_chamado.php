<?php
    session_start();

    foreach($_POST as $key => $value){
        $value = str_replace('#', '-', $value);
        $_POST[$key] = $value;
    }
    $_POST['id'] = $_SESSION['id'];
       
    $texto = implode('#', $_POST) . PHP_EOL; // Identifica a plataforma e adiciona um  caracter de quebra de linha

    $arquivo = fopen('arquivo.txt', 'a'); // abrindo um arquivo de texto
    fwrite($arquivo, $texto);             // escreve no arquivo indicado
    fclose($arquivo);                     // fechando o arquivo

    header('Location: abrir_chamado.php')
?>