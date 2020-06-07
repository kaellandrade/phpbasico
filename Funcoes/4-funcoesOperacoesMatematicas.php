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
       li em{
        font-weight:normal;
        color:red;

       }
    
    </style>
    <body>
        

        <h2>Funções Nativas Operações Matemáticas</h2>
        <ol class='funcoes' >
            <li>ceil(<em>$var_aqui</em>)</li>
            <li>floor(<em>$var_aqui</em>)</li>
            <li>round(<em>$var_aqui</em>)</li>
            <li>rand(<em>inicio</em>, <em>fim</em>)</li>
            <li>sqrt(<em>number</em>)</li>
            <li>getrandmax()</li>

        </ol>

        <?php
            $number = 7.456;
            echo "Texto original : $number";
            echo '<hr/>';
           
            // arredonda para cima
            echo 'A. '.ceil($number) . '<br>';

            // arredonda para baixo
            echo 'B. '. floor($number) . '<br>';

            // arredonda com base na fração
            echo 'C. '. round($number) . '<br>';

            // gera um valor aleatório
            echo 'D. '. rand() . '<br>';
            
            // retorna raiz quadrada de um número
            echo 'E. '. sqrt($number) . '<br>';
            
            // maior valor que o rand pode retornar
            echo 'F. Maior valor do rand: ' . '<strong>'.getrandmax().'</strong>'.'<br/>'; 

        ?>
        
    </body>
</html>