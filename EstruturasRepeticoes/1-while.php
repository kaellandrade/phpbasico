<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usando While</title>
    </head>
    <body>
        <?php
            $num = 1;
            echo '-- Início do loop --<br/>';
            while ($num<=10) {
                $num++;
                if($num % 2 !== 0){ // pula os ímpares
                    continue;
                }
                echo "$num <br/>";
            }
            echo '-- Fim do loop --<br/>';

        ?>
    </body>
</html>