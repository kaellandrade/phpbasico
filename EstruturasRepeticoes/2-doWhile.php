<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usando Do While</title>
    </head>
    <body>
        <?php
            $x = 10;
            echo '-- Início do loop --<br/>';

            do {
                echo "$x <br/>";
                $x--;
            } while ($x >= 1);
            
            echo '-- Fim do loop --<br/>';

        ?>
    </body>
</html>