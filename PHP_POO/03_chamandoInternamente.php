<?php
    // modelo 
    class Funcionario{
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // ! método setter
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
       

        // * método get
        function __get($atributo){
            return $this->$atributo;
        }
        
        // métodos
        function resumirCadFunc(){
            return $this->__get('nome') . " possui " . $this->__get("numFilhos") . " filho(s) seu telefone é " . $this->__get("telefone");
        }

        function modificarNumFilhos($numFilhos){
            // afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    echo "<h3>Objeto y</h3>";
    $y = new Funcionario();
    //Setando os valores de y
    $y->__set('nome', 'Micael');
    $y->__set('numFilhos', 0);
    $y->__set('telefone', '(75) 9967-3496');

    //mostrando os dados
    echo $y->resumirCadFunc();
?>