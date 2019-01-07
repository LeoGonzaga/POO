<!-- Abstrac -->
<!-- So pode ser extendida, nao pode ser instanciada -->
<!-- Ao colocar a fun2 como abstract temos que dizer o que ela vai fazer na classa em que
foi extendida -->
<?php
    abstract class teste{
        public function func1(){
            echo 'chamando funcao 1';
        }

        abstract function func2();
    }

    class Principal extends teste{
        public function func2(){
            echo 'declarando func2';
        }
    }

    $principal = new Principal();
    $principal->func1();
    echo '<br>';
    $principal->func2();
    
    ?>
