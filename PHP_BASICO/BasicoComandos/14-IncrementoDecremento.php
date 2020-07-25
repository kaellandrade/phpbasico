<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores de Incremento/decremento</title>
    </head>
    <body>
        <h3>Pós-incremento</h3>
        <?php
            $pos = 10;
            echo "O valor contido em é $pos <br/>";
            echo 'O valor contido na variável após o incremento é ' . $pos++ . ' <br/>';
            echo "O valor atualizado é $pos";
        ?>
    </body>

    <h3>Pré-incremento</h3>
    <?php
        $pre = 10;
        echo "O valor contido em é $pre <br/>";
        echo 'O valor contido na variável pré o incremento é ' . ++$pre . ' <br/>';
        echo "O valor atualizado é $pre";
    ?>

</html>