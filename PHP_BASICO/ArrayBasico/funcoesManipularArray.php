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
        table{
            border-spacing: 0.2em;
            border-collapse: separate;
        }
        thead{
            color: whitesmoke;
            background: #999;

        }
        thead th{
            font-weight: bold;
            padding: 0.3em 1em;
            text-align: center;
        }
        td{
            text-transform: lowercase;
            padding: .3rem;
            border-top: 1px solid black;
        }
    
        td:nth-child(1){
            color: tomato;
        }
        td:nth-child(2){
            text-transform: uppercase;
            color: green;
        }
    </style>
    <body>
        <h2>Algumas Funções Nativas Para Array</h2>
         
         <table>
            <caption>Funções Nativas Para Manipular Array</caption>
            <thead>
                <th>Função</th>
                <th>Descrição</th>
            </thead>

            <tr>
                <td>is_array(ARRAY_AQUI)</td>
                <td>VERIFICA SE É UM ARRAY</td>
            </tr>
            <tr>
                <td>array_keys(ARRAY_AQUI)</td>
                <td>RETORNA TODAS AS CHEVES DE UM ARRAY</td>
            </tr>


            <tr>
                <td>asort()(ARRAY_AQUI)</td>
                <td>ORDENA UM ARRAY PRESERVANDO OS ÍNDICES</td>
            </tr>

            <tr>
                <td>sort(ARRAY_AQUI)</td>
                <td>ORDENA UM ARRAY PRESERVANDO OS ÍNDICES</td>
            </tr>

            <tr>
                <td>count(ARRAY_AQUI)</td>  
                <td>CONTA A QUANTIDADE DE ALEMENTOS DE UM ARRAY</td> 
            </tr>

            <tr>
                <td>array_merge(ARRAY1_ARRAY2...)</td>
                 <td>FUNDE DOIS OU MAIS ARRAYS</td>
            </tr>

            <tr>
                <td>explode('CARACTER', STRING_AQUI)</td>
                <td>DIVIDE UMA STRING BASEADA EM UM DELIMITADOR</td>
            </tr>

            <tr>
                <td>implode('CARACTER', ARRAY_AQUI)</td>
                <td>JUNTA ELEMENTOS DE UM ARRAY EM UMA STRING</td>
            </tr>
         </table>
            
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