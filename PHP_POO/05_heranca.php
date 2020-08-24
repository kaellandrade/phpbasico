<!-- 
    // ! DICA: Classes que extendefuncionalidades de outras classes
    Class pai e class filhos;
    Class genéricas e class especializadas;
    Super Class e sub Class

    Reutilização de código
    maior facilidade na implementação de novas funcionalidades
    

 -->

<?php

    class Veiculo{

        public $placa = null;
        public $cor = null;


        public function acelerar(){
            echo 'Acelerar';
        }

        public function freiar(){
            echo 'Freiar';
        }

    }
    


    class Carro extends Veiculo{

        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;

        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição volante';
        }
        
    }

    class Moto extends Veiculo{

        public $contra_peso_guidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;

        }

        function empinar(){
            echo 'Empinar';
        }
        
    }

    $carro = new Carro('1234BCA', 'Azul');
    $moto = new Moto('768FGCV', 'Preto');

    echo '<pre>';
        print_r($carro);
        $carro->abrirTetoSolar();
        echo '<br />';
        $carro->acelerar();
        echo '<br />';
        $carro->freiar();

    echo '<hr/>';
        print_r($moto);
        $moto->acelerar();
        echo '<br />';
        $moto->empinar();
        echo '<br />';
        $moto->freiar();

    echo '</pre>';


    



?>