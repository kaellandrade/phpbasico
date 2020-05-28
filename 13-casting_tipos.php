<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>13 - Casting De tipos</title>
    </head>
    <body>
        <?php
            /*  Possíveis Casting
                int: float, string;
                float: int, string;
                string: int, float, boolean;
                boolean: int, string;
            */

            // ! gettype() => retorna o tipo da variável
            $valor_bool = true;
            $valor_str = '123.123';
            $valor = 20;
            $valor3 = 132.12;

            // * Integer para Float
            $valor = (double) $valor ; //float, double ou real
            echo $valor . ' ' . gettype($valor); // saída double
            echo '<br>';

            // * Double para String
            $valor = (string) $valor ; 
            echo $valor . ' ' . gettype($valor); // saída string;
            echo '<br>';

            // * Float para inteiro;
            $valor3 = (integer) $valor3 ; // int
            echo $valor3 . ' ' . gettype($valor3);

            // * String para inteiro
            $valor_str = (int) $valor_str;
            echo '<br>';
            echo $valor_str . ' ' . gettype($valor_str);

            // * String para Boolean
            $valor_str = (boolean) $valor_str; // bool, boolean
            echo '<br>';
            echo $valor_str . ' ' . gettype($valor_str);

            // * Boolean para String
            $valor_bool = (string) $valor_bool;
            echo '<br>';
            echo $valor_bool . ' ' . gettype($valor_bool);
        ?>
    </body>
</html>