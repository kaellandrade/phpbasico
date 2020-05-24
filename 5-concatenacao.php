<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 5 - Concatenação</title>
    </head>

    <body>
        <?php
            $nome = 'Micael';
            $cor = 'preto';
            $idade = 24;
            $hobby = 'ouvir música';
            
            // operador .
            // ideal para usar só quando tenho strings,
            // ou seja, sem necessidade de concatenação
            
            echo '<h3>Operador "."</h3>';
            echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ' e que 
            você tem ' . $idade . ' anos e gosta de '. $hobby.'!';

            // aspas duplas
            echo '<br>';
            echo '<h3>Operador "$"</h3>';
            echo "Olá, $nome vi que sua cor preferida é $cor e que você tem $idade anos e gosta de $hobby!";
        ?>
    </body>
</html>