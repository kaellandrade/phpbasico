<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2 - Manipulando Strings</title>
    </head>
    <style>
        ol{
            list-style-type:upper-alpha;
        }
       .funcoes li{
           font-weight:bold;
       }
           
    </style>
    <body>
        

        <h2>Funções Para Manipular Datas</h2>
        <ol class='funcoes' >
            <li>date()</li>
            <li>date_dafault_timezone_get()</li>
            <li>date_default_timezone_set()</li>
            
        </ol>

        <?php
            // configura o timezone
            date_default_timezone_set('America/Bahia');

            // recuperação da data Atual
            echo strftime('%c');
            echo '<br/>';

            // recupera o time default da aplicação
            echo date_default_timezone_get() . '<br/>';


            // Calculando datas use o padrão americano
            $data_inicial = '1996-04-08';
            $data_final   = '2020-05-31';
        
            //timestamp
            //01/01/1970 -- 2020-05-31 (js -> milissegundos / php -> segundos)

            // convertendo data para segundos
            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);
            $segundos_existem_dia = 24*60*60;
    


            echo $data_inicial . ' --> ' . $time_inicial;
            echo '<br/>';
            echo $data_final . ' --> ' . $time_final;

            echo '<br/>';

            echo "Um dia possui $segundos_existem_dia segundos.";
            echo '<br/>';
            $diferenca_times_segundos = abs($time_final - $time_inicial);
            $diferenca_times_dias = $diferenca_times_segundos / $segundos_existem_dia;
            echo "A diferença em segundos entre a data inicial e final é $diferenca_times_segundos <br/>";
            echo "A diferença  em dias entre a data inicial e final é $diferenca_times_dias <br/>";

            
        ?>
        
    </body>
</html>