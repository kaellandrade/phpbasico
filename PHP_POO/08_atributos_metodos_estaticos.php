<?php 


    class Exemplo{
        // atributos
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atribiuto normal';

        // métodos
        public static function metodo1(){
            return 'Eu sou um método estático';
        }

        public function metodo2(){
            return 'Eu sou um método normal';
        }

    }

    // Acessando atributos e método estático
    // (::) oerador de resolução de escopo
    echo Exemplo::$atributo1 . '<br/>';
    echo Exemplo::metodo1() . '<br/>';

    //! ⬇ Não é uma boa prática acessar métodos não estáticos dessa forma
    echo Exemplo::metodo2() . '<br/>'; 

    // ! ⬇ Essa forma não funciona com atributos não estático.
    // echo Exemplo::$atributo2; //!ERRO 


    







?>