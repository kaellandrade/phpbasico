<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            // void (não possui retorno)
            function exibirBoasVindas()
            {
                echo 'Bem Vindo ao curso de PHP <br/>';
            }
            
            exibirBoasVindas();
            
            
            // return (com retorno)

            function calcularAreaTerreno($largura, $comprimento){
                return $largura * $comprimento;
            }

            echo calcularAreaTerreno(3,4);
        ?>
    </body>
</html>