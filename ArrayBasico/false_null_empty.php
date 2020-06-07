<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>False Null Empty</title>
    </head>
    <body>
        
        <?php
            // false (true/false) - tipo variável boolean
            // null e empty - valores especiais

            $funcionario1 = null;
            $funcionario2 = '';
            $funcionario3 = false;

            echo 'funcionario1 = null<br/>';
            echo "funcionario2 = '' <br/>";
            echo 'funcionario3 = false <br/>';

            echo '<br/>';            
        
            echo '<h1>is_null()</h1>';
            // valores null
            if(is_null($funcionario1)){
                echo " É null";
            }else{
                echo "Não é null";
            }

            echo '<br/>';        

            if(is_null($funcionario2)){
                echo "É null";
            }else{
                echo "Não é null";
            }

            echo '<br/>';

            if(is_null($funcionario3)){
                echo "É null";
            }else{
                echo "Não é null";
            }

            echo '<br/>';        

            echo '<h1>empty()</h1>';
            // valores empty 
            if(empty($funcionario1)){
                echo "Está vazia";
            }else{
                echo "Não está vazia";
            }

            echo '<br/>';        
  
            if(empty($funcionario2)){
                echo "Está vazia";
            }else{
                echo "Não está vazia";
            }

            echo '<br/>';        
       
            if(empty($funcionario3)){
                echo "Está vazia";
            }else{
                echo "Não está vazia";
            }
            
        ?>
        
    </body>
</html>