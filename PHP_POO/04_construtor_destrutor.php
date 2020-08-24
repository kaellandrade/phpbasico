<?php
    class Pessoa {
        
        public $nome = null;

        // método constructor

        function __construct($nome){ // será executado automaticamente
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        // método destruct
        function __destruct(){
            echo 'Objeto removido!';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') . ' está correndo!';
        }

    }
    //* Criando o objeto
    $pessoa = new Pessoa('Micael');
    echo  '<br/> Nome: ' . $pessoa->__get('nome');
    echo '<br />';
    echo $pessoa->correr();

    echo '<br />';
    unset($pessoa); // proposital


















?>