<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach 2</title>
</head>
<body>
    <?php

        $funcionarios = [
            Array ('nome' => 'João', 'salario' =>  2500, 'data_nascimento' => '06/03/1995'),
            Array ('nome' => 'Maria', 'salario' =>  3000),
            Array ('nome' => 'Jorge', 'salario' =>  1500, 'profissão' => 'programador back-end'),
            Array ('nome' => 'Micael', 'salario' =>  220, 'profissão' => 'dev front', 'estado' => 'sergipe', 'formação' => 'sistemas de informação')
        ];

        echo '<pre>';
            print_r($funcionarios);
        echo '<pre>';
        // FOREACH ENCADEADOS
        foreach ($funcionarios as $funcionario) { 
            foreach($funcionario as $idx => $valor){ 
                echo "$idx - $valor<br/>";
            }
            echo '<hr/>';
        }

    ?>
</body>
</html>