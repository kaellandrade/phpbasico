<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>8 - Operadores Lógicos</title>
    </head>
    <body>
        <?php
            /* 
                * Operadores lógicos
                '&&' ou 'and'; ->  Ambos tem de ser true
                '||' ou 'or';  ->  Pelo meno um tem de ser true
                'xor';         ->  Verdadeiro se um for true e o outro false
                '!'            ->  Nega a expressão
            */

            if(!((22 == 22 && 3 == 3) || (5 != 5)) xor (20 % 2 == 0) ){
                echo 'Verdadeiro';

            }else{
                echo 'Falso';
            }
        ?>
    </body>
</html>