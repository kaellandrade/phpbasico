<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Switch</title>
    </head>

    <body> 
        <?php
            $parametro = '2'; # Comparação por igualdade, e não por identidade.
            switch ($parametro) {
                case 1:
                    echo 'Case 1';
                    break;
                case 2:
                    echo 'Case 2';
                    break;
                case 3:
                    echo 'Case 2';
                    break;
                default:
                    echo 'Nenhum Case';
                    break;
            }
        ?>   
    </body>
</html>