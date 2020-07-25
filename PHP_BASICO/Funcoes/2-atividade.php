<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2 - Calcula Imposto</title>
    </head>

    <body>
        <?php
            function CalculaImpostoRenda($salario){
                if($salario <= 1903.98){
                    return 0;

                }else if($salario >= 1903.99 && $salario <= 2826.65){
                    return $salario * (7.5/100);

                }else if($salario >= 2826.66 && $salario <= 3751.05 ){
                    return $salario * (15/100);

                }else if($salario >= 3751.06 && $salario <= 4664.68){
                    return $salario * (22.5/100);

                }else{
                    return $salario * (27.5/100);
                }
            }



            echo CalculaImpostoRenda(5000)
        ?>
    </body>
</html>