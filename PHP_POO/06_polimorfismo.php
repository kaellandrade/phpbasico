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
        public function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão!';
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

        function trocarMarcha(){
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé!';

        }
        
    }

    class Caminhao extends Veiculo{

    }

    $carro = new Carro('1234BCA', 'Azul');
    $moto = new Moto('768FGCV', 'Preto');
    $caminhao = new Caminhao();


    echo '<pre>';
        print_r($carro);
        $carro->abrirTetoSolar();
        echo '<br />';
        $carro->acelerar();
        echo '<br />';
        $carro->freiar();
        echo '<br />';
        $carro->trocarMarcha();

    echo '<hr/>';
        print_r($moto);
        $moto->acelerar();
        echo '<br />';
        $moto->empinar();
        echo '<br />';
        $moto->freiar();
        echo '<br />';
        $moto->trocarMarcha();


        echo '<hr/>';
        print_r($caminhao);
        $caminhao->acelerar();
        echo '<br />';
        $caminhao->trocarMarcha();

    echo '</pre>';
    echo '</pre>';


    



?>