<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções Nativas Para Manipular Array</title>
    </head>
    <style>
        li{
            margin:0.5em;
        }
    </style>
    <body>
        <h2>Algumas Funções Nativas Para Array</h2>
        <ul>
            <li>
            is_array(ARRAY_AQUI) --> VERIFICA SE É UM ARRAY
            </li>

            <li>
            array_keys(ARRAY_AQUI) --> RETORNA TODAS AS CHEVES DE UM ARRAY
            </li>

            <li>
            asort()(ARRAY_AQUI) --> ORDENA UM ARRAY PRESERVANDO OS ÍNDICES
            </li>

            <li>
            sort(ARRAY_AQUI) --> ORDENA UM ARRAY E REAJUSTA SEUS ÍNDICES
            </li>

            <li>
            count(ARRAY_AQUI) --> CONTA A QUANTIDADE DE ALEMENTOS DE UM ARRAY
            </li>

            <li>
            array_merge(ARRAY1_ARRAY2...) --> FUNDE DOIS OU MAIS ARRAYS
            </li>

            <li>
            explode('CARACTER', STRING_AQUI) --> DIVIDE UMA STRING BASEADA EM UM DELIMITADOR
            </li>

            <li>
            implode('CARACTER', ARRAY_AQUI) --> JUNTA ELEMENTOS DE UM ARRAY EM UMA STRING
            </li>

        </ul>
        <?php

            $array = [
                1=> 'e',
                7=> 'i',
                18=> 'k',
                2=> 'a',


            ];

            $array2 = [
                1=> 'l',
                7=> 'm',
                18=> 'x',
                2=> 'Y',


            ];


            echo '<h3>is_array</h3><br/>';
            $retorno = is_array($array); // is_array
            echo $retorno?'É array':'Não é array';
            
            echo '<pre>';
                print_r ($array);
            echo '</pre>';

            echo '<h3>array_keys</h3><br/>';
        
            $chaves_array = array_keys($array); //array_keys
            echo '<pre>';
                print_r ($chaves_array);
            echo '</pre>';

            echo '<h3>asort</h3><br/>';
            asort($array); // true ou false ORDENA O ARRAY ORIGINAL PRESERVA OS ÍDICES
            echo '<pre>';
                print_r ($array);
            echo '</pre>';

            echo '<h3>sort</h3><br/>';
            sort($array); // true ou false ORDENA O ARRAY ORIGINAL REARANJANDO OS ÍDICES
            echo '<pre>';
                print_r ($array);
            echo '</pre>';


            echo '<h3>count</h3><br/>';
            echo '<pre>';
                echo count($array);
            echo '</pre>';

            echo '<h3>merge</h3><br/>';
            $novo_array = array_merge(['R','H'],$array, $array2);
            echo '<pre>';
                print_r($novo_array);
            echo '</pre>';

            echo '<h3>explode</h3><br/>';
            $string = '26/04/2018';
            $array_retorno = explode('/', $string);

            echo '<pre>';
                print_r($array_retorno);
            echo '</pre>';


            echo '<h3>implode</h3><br/>';

            $string_retorno = implode(',', $array);
            echo $string_retorno;
            
        ?>
    </body>
</html>