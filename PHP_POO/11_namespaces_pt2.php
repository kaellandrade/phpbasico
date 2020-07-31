<?php
    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    // !Usando a classe Cliente do namespace B que está no arquivo lib2.php
    use A\Cliente as C1; // ! Aliasing (apelido)
    use B\Cliente as C2; 

    $cli = new C2();
    echo '<pre>';
        print_r($cli);
    echo '<pre />';
    echo '<br />';
    echo $cli->__get('nome');

    

?>