<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usando Do While</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
    <?php
            

            
        ?>
        
        <div class="container">
            <div class="row">
                <?php
                    // ? Tente aplicar o componente card do BOOTSTRAP
                    $registro = Array(
                        Array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia  1'),
                        Array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia  2'),
                        Array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia  3'),
                        Array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia  4'),
                    );

                    $indece = 0;
                    while($indece < count($registro)){
                                
                       // TODO: Aplicar um método eficiente

                        echo '<div class="col-lg-4 col-md-6 pt-2 ">' . '<div class="card text-center" style="width: 18rem;">' . '<div class="card-body">' . '<h5 class="card-title">'. $registro[$indece]['titulo'] .  '</h5>' . '<p class="card-text">' .$registro[$indece]['conteudo']. '</p>'. '<a href="#" class="btn btn-primary">' . 'Ler mais' . '</a>'  . '</div>' . '</div>'. '</div>';

                        $indece++;
                    }
                ?>


            </div>
        </div>
        
    </body>
</html>