<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2 - Manipulando Strings</title>
    </head>
    <style>
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
        <ol class='funcoes'>
            <li>ceil(<em>$var_aqui</em>)</li>
            <li>floor(<em>$var_aqui</em>)</li>
            <li>round(<em>$var_aqui</em>)</li>
            <li>rand(<em>$var_aqui</em>, <em>inicio</em>, <em>fim</em>)</li>
            <li>sqrt(<em>$var_aqui</em>, <em>procurarPor</em>, <em>substituirPor</em>)</li>

        </ol>

        <?php
            $number = 7.456;
            echo "Texto original : '$number'";
            echo '<hr/>';
           
            // arredonda para cima
            echo '1---> '.ceil($number) . '<br>';

            // arredonda para cima
            echo '2---> '. floor($number) . '<br>';

            // arredonda com base na fração
            echo '3---> '. round($number) . '<br>';

            // gera um valor aleatório
            echo 'Maior valor do rand: ' . '<strong>'.getrandmax().'</strong>'.'<br/>'; 
            echo '4---> '. rand() . '<br>';


            // string replace str_replace(<procuraPor>, <substituiPor, $string>)
            // echo '5. '. str_replace('PHP','JavaScript',$number) . '<br>';

        ?>
        
    </body>
</html>