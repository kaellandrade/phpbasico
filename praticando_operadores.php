<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>9 - Praticando com operadores</title>
    </head>
    <body>
        <?php
            $usuario_cartao = true;
            $valor_compra = 225; 
            
            $valor_frete = 50;
            $recebeu_desconto = false;


            if($usuario_cartao && $valor_compra >= 100){
                $valor_frete = 0;
                $recebeu_desconto = true;
            }
        ?>

        <h1>Detalhe do pedido</h1>
        <p>Possui cartão da loja ?
            <?php
                if($usuario_cartao){
                    echo 'SIM';
                }else{
                    echo 'NÃO';
                }
            ?>
        </p>
        
        <p>Valor da compra: <?= $valor_compra?> </p>

        <p>Recebeu desconto no frete ?
            <?php
                if($recebeu_desconto){
                    echo 'SIM';
                }else{
                    echo 'NÃO';
                }
            ?>
        </p>

        <p>Valor do frete: <?=$valor_frete ?></p>

        <p>Valor total da compra: <?= $valor_frete + $valor_compra?> </p>
    </body>
</html>