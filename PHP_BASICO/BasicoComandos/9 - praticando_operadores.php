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
            $valor_compra = 670; 
            
            $valor_frete = 50;
            $recebeu_desconto = true;


            if($usuario_cartao && $valor_compra >= 600){
                $valor_frete = 0;
            }else if($usuario_cartao && $valor_compra >= 500){
                $valor_frete = 10;
            }else if($usuario_cartao && $valor_compra >= 400){
                $valor_frete = 20;
            
            }else if($usuario_cartao && $valor_compra >= 200){
                $valor_frete= 30;
            }else{
                $recebeu_desconto = false;
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