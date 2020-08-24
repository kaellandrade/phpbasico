<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php
        // Solução 1
        $numeros_sorteados = Array();
        // for ($i=1; $i <= 6 ; $i++) { 
        //     $numero_sortedo = rand(1, 60);
        //     if(in_array($numero_sortedo, $numeros_sorteados)){
        //         $i--;
        //         continue;
        //     }
        //     $numeros_sorteados[] = $numero_sortedo;
        // }

        // Solução 2
        define('TOTAL_VALORES', 6);
        do {
            $numero_sortedo = rand(1, 60);
            if(!in_array($numero_sortedo, $numeros_sorteados)){
                $numeros_sorteados[] = str_pad($numero_sortedo, 2, 0, STR_PAD_LEFT) ;
            }
        } while (count($numeros_sorteados) <= TOTAL_VALORES);

        echo '<h3>Números Sorteados</h3>';
        echo '<span>' . implode(' ─ ', $numeros_sorteados).'</span> ';
        

    ?>
</body>
</html>