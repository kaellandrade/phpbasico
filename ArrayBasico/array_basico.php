<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array Básico</title>
    </head>
    <body>
        <?php
            echo '<h1>Sequenciais</h1>';

            // sequenciais (numericos)
                // $lista_frutas = Array('Abacate','Banana', 'Maçã','Morango','Uva'); // (1º opção)
                $lista_frutas = ['Abacate','Banana', 'Maçã','Morango','Uva']; //(2º opção)
                $lista_frutas[] = 'Abacaxi';

                echo '<h2>var_dump()</h2>';
                echo '<pre>';
                    var_dump($lista_frutas);
                echo '</pre>';

                echo '<h2>print_r()</h2>';
                echo '<pre>';
                    print_r($lista_frutas);
                echo '</pre>';

                echo '<hr/>';
            
            echo '<h1>Associativos</h1>';
            // Associativos
                $lista_compras = [
                    'a' => 'biscoito',
                    'b' => 'tomate',
                    'c' => 'leite',
                    'd' => 'goiabada',
                    4 => 'cerveja',
                ];

                echo '<pre>';
                    var_dump($lista_compras);
                echo '</pre>';
                echo $lista_compras[4]; // cerveja

        ?>
    </body>
</html>