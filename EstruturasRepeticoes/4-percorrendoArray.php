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
                    $registro = Array(
                        Array('titulo' => 'Microsoft', 'conteudo' => 'Microsoft lança atualização para Windows 10'),
                        Array('titulo' => 'Linux', 'conteudo' => 'Ubuntu 20.04 já está disponível'),
                        Array('titulo' => 'IA', 'conteudo' => 'Estudades da UFS criam robô super veloz'),
                        Array('titulo' => 'Dell', 'conteudo' => 'Promoção linha Dell Alienware'),
                        Array('titulo' => 'Samsung', 'conteudo' => 'Novo celular dobrável')

                    );
                ?>

                <?php
                $indece = 0;
                while($indece < count($registro)){
                ?>            
                    <div class="card text-center m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$registro[$indece]['titulo']?></h5>
                            <p class="card-text"><?=$registro[$indece]['conteudo']?></p>
                            <a href="#" class="btn btn-primary">Ler mais...</a>
                        </div>
                    </div>
                
                <?php
                    $indece++;
                }
                ?>
                


            </div>
        </div>
        
    </body>
</html>