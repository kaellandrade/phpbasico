<?php
    // Error (interno php);
    // Exception (programadores);
    // Customizadas (programadores);

    class ErroConexao extends Exception{
        private $erro = '';
    
        public function __construct($erro){
            $this->erro = $erro;
        }
        
        public function exibirErro(){
            echo '<div style="border: 2px solid black; background: #d00505bd; color: whitesmoke; padding: 5px; border-radius:5px;">';
                echo $this->erro;
            echo '</div>';
        }
    }
    
    try{
        $conectado = system('ping -c 1 .com');
        if(!$conectado){
            throw new ErroConexao ('Não foi possível capturar o ping. Verifique sua conexão e tente novamente');
        }
    } catch (ErroConexao $e) {
        echo $e->exibirErro();
        
    }

?>