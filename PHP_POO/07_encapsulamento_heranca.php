 <!-- //! 1º Sem usar os método mágicos -->

<?php 
/*
    // Com herança atributos public e protected são herdados. 
    // Ao Contrário de private que não será herdado

    class Pai{

        private $nome = 'Micael'; // ! Não seré herdado para o filho
        protected $sobreNome = 'Andrade';
        public $humor = 'Pensativo';

        // ! Métodos mágicos
        
        // public function __get($attr){
        //     return $this->$attr;
        // }

        // public function __set($attr,$value){
        //     $this->$attr = $value;
        // }
        

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
    }

    class Filho extends Pai{
        public function getAtributo($attr){
            return $this->$attr;
        }

        public function setAtributo($attr, $valor){
            $this->$attr = $valor;

        }

    }


    //  * Objeto pai
    // $pai = new Pai();
    // echo $pai->nome;
    // echo '<br />';
    // echo $pai->sobreNome;
    // echo '<br />';
    // $pai->sobreNome = 'Santos';
    // echo $pai->sobreNome;
    
    echo '<hr />';
    
    //  ! Objeto Filho
    $filho = new Filho();

    // * Recuperando atributos
    echo '<pre>';
        print_r($filho);
    echo '</pre>';
    echo '<br />';
    echo $filho->getAtributo('humor');
    echo '<br />';
    echo $filho->getAtributo('sobreNome');
    echo '<br />';
    // echo $filho->getAtributo('nome'); // ! PRIVADO NÃO POSSO ACESSÁ-LO

    // * Setando valores
    echo '<hr/> <h3>Despois da troca</h3>';
    $filho->setAtributo('humor','Triste');
    $filho->setAtributo('sobreNome','Silva');
    $filho->setAtributo('nome','Jorge'); // ! CRIA UM ATRIBUTO PARTICULAR PARA O FILHO


    echo '<pre>';
        print_r($filho);
    echo '</pre>';
*/
?>

<!-- // * 2º Usando os método mágicos -->
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
    }

    class Filho extends Pai{
        public function __construct(){
            echo '<h3>Todos os metódos do objeto Filho</h3>';
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
            echo '<hr />';
        }
        private function executarmania(){
            echo 'Cantar';
        }

        public function x(){ // ! Funcona como um método interface
            $this->executarmania();
        }
    }



    //  * Objeto pai
    $pai = new Pai();
    // echo $pai->nome;
    // echo '<br />';
    // echo $pai->sobreNome;
    // echo '<br />';
    // $pai->sobreNome = 'Santos';
    // echo $pai->sobreNome;
    
    
    //  ! Objeto Filho
    $filho = new Filho();

    // * Recuperando atributos
    echo '<h2>Antes da troca</h2>';
    echo '<h3>Objeto Filho</h3>';
    echo '<pre>';
        print_r($filho);
    echo '</pre>';

    echo '<h3>Objeto Pai</h3>';
    echo '<pre>';
        print_r($pai);
    echo '</pre>';

    echo $filho->__get('humor');

    echo '<br />';

    echo $filho->__get('sobreNome');

    echo '<br />';
    // !Caso seja definido na class Pai O MÉTODO MÁGICO __get tem a inteligencia de 
    //! navegar até o atributo privated da class Pai 
    echo $filho->__get('nome'); 

    // * Setando valores
    echo '<hr/> <h2>Despois da troca</h2>';
    $filho->__set('humor','Triste');
    $filho->__set('sobreNome','Silva');
    $filho->__set('nome','Daniel'); // ! MODIFICA O ATRIBUTODO OBJETO PAI MESMO SENDO PRIVATE

    echo '<h3>Objeto Filho</h3>';
    echo '<pre>';
        print_r($filho);
    echo '</pre>';

    echo '<hr/> <h3>Objeto Pai</h3>';
    echo '<pre>';
        print_r($pai);
    echo '</pre>';

    echo $filho->x();



?>