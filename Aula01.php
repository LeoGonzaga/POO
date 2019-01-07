<!-- Classes -->

<?php
    class Pessoa {
        private $nome = 'Leo';
        private $idade = '22';
        private $altura = '60kg';


        public function comer() {
            echo 'Estou comendo';
        }

        public function crescer(){
            echo 'Estou crescendo';
        }
    }
#instanciando um objeto
    $pessoa1 = new Pessoa;

    $pessoa1->Crescer();
    
?>