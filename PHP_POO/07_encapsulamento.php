<?php

    class Pai{

        private $nome = 'Micael';
        protected $sobreNome = 'Andrade';
        public $humor = 'Pensativo';

        // ! Métodos mágicos
        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr,$value){
            $this->$attr = $value;
        }

        private function executarmania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){ // Funciona como uma interface
            $num = rand(1, 10);
            ($num >= 1 && $num<=5) ? $this->executarmania() : $this->responder();
            
        }



        /* //! 1º Opção
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($value){

            if(strlen($value) >= 3){ // Regra de negócio
                $this->nome = $value;
            }
        }
        */
    }

    $pai = new Pai();
    echo $pai->nome;
    echo '<br />';
    echo $pai->sobreNome;
    echo '<br />';
    $pai->sobreNome = 'Santos';
    echo $pai->sobreNome;

    echo '<hr />';
    echo $pai->executarAcao();

    /* // ! 1º opção
    echo '<h4>Public</h4>';
    echo $pai->humor;
    echo '<br />';
    $pai->humor = 'Triste';
    echo $pai->humor;

    echo '<hr/>';

    echo '<h4>Private</h4>';
    echo $pai->getNome();
    $pai->setNome('Daniel');
    echo '<br />';
    echo $pai->getNome();


    echo '<hr/>';
    
    echo '<h4>Protected</h4>';
    echo $pai->getSobrenome();
    $pai->setSobrenome('Santos');
    echo '<br />';
    echo $pai->getSobrenome();
    */

    //? Private e Protected não estão disponível para 
    //? aplicação, porém eles não são iguais.

    //? Por que iria criar atribubtos ou métodos privados ?
    // *  
    


?>