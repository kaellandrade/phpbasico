<?php
    // modelo 
    class Funcionario{
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


        // getters setters (overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        // métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s), 
            cargo de $this->cargo 
            com salário de $this->salario 
            contato $this->telefone";
        }

    }

    echo "<h3>Objeto y</h3>";
    $y = new Funcionario();
    //Setando os valores de y
    $y->__set('nome', 'Micael');
    $y->__set('telefone', '(75) 9967-3496');
    $y->__set('numFilhos', 0);
    $y->__set('cargo', 'Programador');
    $y->__set('salario', 1000);


    //mostrando os dados
    echo $y->resumirCadFunc();
    echo '</br>';
    // pegando cada atribiuto individualmente com get
    echo $y->__get('nome') . 
    ' possui ' . 
    $y->__get('numFilhos') . ' filho(s), cargo de ' . 
    $y->__get('cargo') . ' com salário de ' . $y->__get('salario') . 
    ' contato ' . $y->__get('telefone');

    echo '<hr/>';


    echo "<h3>Objeto X</h3>";
    $x = new Funcionario();
    //Setando os valores de x
    $x->__set('nome', 'Jorge');
    $x->__set('telefone', '(75) 9911-3389');
    $x->__set('numFilhos', 5);
    $x->__set('cargo', 'pedreiro');
    $x->__set('salario', 700);


    //mostrando os dados
    echo $x->resumirCadFunc();
    echo '</br>';
    // pegando cada atribiuto individualmente com get
    echo $x->__get('nome') . 
    ' possui ' . 
    $x->__get('numFilhos') . ' filho(s), cargo de ' . 
    $x->__get('cargo') . ' com salário de ' . $x->__get('salario') . 
    ' contato ' . $x->__get('telefone');

    // $x = new Funcionario();
    // echo '<br />';


    













    
?>