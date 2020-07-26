<?php
    // modelo 
    class Funcionario{
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // ! métodos setters
        function setNome($nome){
            $this->nome = $nome;
        }
        
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        // * métodos get
        function getTelefone(){
            return $this->telefone;
        }

        function getNome(){
            return $this->nome;
        }
        
        function getNumfilhos(){
            return $this->numFilhos;
        }
        
        // métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s) seu telefone é $this->telefone";
        }

        function modificarNumFilhos($numFilhos){
            // afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    echo "<h3>Objeto y</h3>";
    $y = new Funcionario();
    //Setando os valores de y
    $y->setNome('Micael');
    $y->setNumFilhos(0);
    $y->setTelefone('(75) 9967-3496');
    //mostrando os dados
    echo $y->resumirCadFunc();
    echo '</br>';
    // pegando cada atribiuto individualmente com get
    echo $y->getNome() . ' possui ' . $y->getNumfilhos() . ' filhos seu telefone é ' . $y->getTelefone();

    echo '<hr/>';


    echo "<h3>Objeto X</h3>";
    $x = new Funcionario();
    //Setando os valores de x
    $x->setNome('Jorge');
    $x->setNumFilhos('5');
    $x->setTelefone('(75) 9911-3389');
    //mostrando os dados
    echo $x->resumirCadFunc();
    echo '</br>';
    // pegando cada atribiuto individualmente com get
    echo $x->getNome() . ' possui ' . $x->getNumfilhos() . ' filhos seu telefone é ' . $x->getTelefone();

    // $x = new Funcionario();
    // echo '<br />';


    













    
?>