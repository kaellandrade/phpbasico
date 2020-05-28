<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade</title>
    </head>
    
    <body>
        <?php
            $nome = 'Micael Andrade';
            $idade = 25;
            $peso = 65;
           
            if(($idade >= 16 && $idade <=69 ) && $peso >= 50){
                $resposta = true;
            }else{
                $resposta = false;
            }
        ?>

        <h2>Banco de sangue 0.9</h2>
        <hr>
        <p>
            Nome : <?= $nome?>
            <br>
            Idade: <?= $idade?>
            <br>
            Peso: <?= $peso?>
            <br>
            Status: <strong>
                        <?= $resposta ? 'ATENDE AOS REQUISITOS.':'NÃO ATENDE AOS REQUISITOS.'?>
                    </strong>
        </p>
        
    </body>
</html>