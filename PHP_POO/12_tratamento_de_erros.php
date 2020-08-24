<?php
    try {

        echo '<h3>***Try***</h3>';
        // $sql = 'Select * from clientes';
        // mysql_query($sql); // !ERRO

       if(!file_exists('require_arquvo.php')){
           throw new Exception ('O arquivo em questã o deveria está disponível as ' 
           . date('d/m/Y H:i:s') . 
           ', mas não está, vamos seguir assim mesmo.');
       }
        
    } catch(Error $e){ //Capturando esse erro e tratando-o
        echo '<h3>***Catch Error***</h3>';
        echo '<p style="color:red">' . $e . '</p>';
        // armazenando esse erro em banco de dados;

    } catch(Exception $e){
        echo '<h3>***Catch Exception***</h3>';
        echo '<p style="color:red">' . $e . '</p>';
    }
    finally{
        echo '<h3>***Finally***</h3>';

    }
    

    


?>