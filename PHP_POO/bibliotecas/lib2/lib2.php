<?php
    namespace B;

    class Cliente implements CadastroInterface{
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


?>