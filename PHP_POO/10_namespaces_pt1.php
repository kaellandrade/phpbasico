<?php 
    namespace A;

    class Cliente implements CadastroInterface{

        public $nome = 'Jorge';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }


        public function __get($attr){
            return $this->$attr;
        }

        public function remover(){
            return 'remover';
        }

        public function salvar(){
            return 'Salvar';
        }

    }

    interface CadastroInterface{
        public function salvar();
    }


    namespace B;
    class Cliente implements \A\CadastroInterface{

        public $nome = 'Micael';
        public $idade = 24;

        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }
        public function remover(){
            return 'Remover';
        }
        public function salvar(){
            return 'Salvar';
        }
    }

    interface CadastroInterface{
        public function remover();
    
    }

    $c = new \B\Cliente(); // acessando o primeiro names pace
    echo '<pre>';
        print_r($c);
    echo '<pre/>';
    echo $c->__get('nome');




?>