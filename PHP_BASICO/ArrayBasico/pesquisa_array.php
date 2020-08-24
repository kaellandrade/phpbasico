<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisa Dentro de Array</title>
    </head>
    <body>
        <?php

            // in_array()     ->  returna true ou false;
            // array_search() ->  returna o índice do valor ou null caso não exista;
            
            echo '<h2>in_array()</h2>';
            $lista_frutas = ['Banana','Maçã','Morango','Uva'];
            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';
            echo in_array('Maçã', $lista_frutas) ? 'Valor existe no Array!' : 'Valor não existe no Array!'; // usando com operador ternário

            echo '<hr/>';
            
            echo '<h2>array_search()</h2>';
            $existe = array_search('Banana', $lista_frutas);
            echo ($existe !== null)? "Exite! Posição: $existe": 'Valor não existe no Array!'; // ! Cuidado pois ($existe != null) dá outro resultado, POIS 0 != null é falso;


            echo '<h2>Array Multidimensional Busca</h2>';
            $listaCoisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['Mikael','Joice','Daniel','Silvania']
            ];
            echo '<pre>';
                print_r($listaCoisas);
            echo '</pre>';

            echo '<br/>';
            echo array_search('Joice', $listaCoisas['pessoas']); // referece ao array de pessoas
        ?>
    </body>
</html>