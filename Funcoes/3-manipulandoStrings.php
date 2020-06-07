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
        

        <h2>Funções nativas do PHP</h2>
        <ol class='funcoes'>
            <li>strtolower(<em>$var_aqui</em>)</li>
            <li>strtoupper(<em>$var_aqui</em>)</li>
            <li>ucfirst(<em>$var_aqui</em>)</li>
            <li>strlen(<em>$var_aqui</em>)</li>
            <li>str_replace(<em>procurarPor</em>, <em>substituirPor</em>, <em>$var_aqui</em>)</li>
            <li>substr(<em>$var_aqui</em>, <em>number</em>, <em>number</em>)</li>

        </ol>

        <?php
            $texto = 'Curso completo de PHP';
            echo "Texto original : '$texto'";
            echo '<hr/>';
           
            // string to lower
            echo '1. '.strtolower($texto) . '<br>';

            // string to upper
            echo '2. '. strtoupper($texto) . '<br>';

            // string to upper case first
            echo '3. '. ucfirst($texto) . '<br>';

            // string length
            echo '4. '. strlen($texto) . '<br>';

            // string replace str_replace(<procuraPor>, <substituiPor, $string>)
            echo '5. '. str_replace('PHP','JavaScript',$texto) . '<br>';

            // string substr($string, inicio, fim>)
            echo '6. '. substr($texto, 6, 8) . '<br>';

        ?>
        
    </body>
</html>