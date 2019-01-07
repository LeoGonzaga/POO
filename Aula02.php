<!-- Herança -->
<?php
    class Filha{
        function sayHello(){
            echo 'hello world';
        }
    }

    class Pai extends Filha{
        function sayBye(){
            echo 'Bye';
        }
    }

    $filha = new FIlha();
    $filha->sayHello();
    echo '<br>';
    $pai = new Pai();
    $pai -> sayBye();
    echo '<br>';
    $pai2 = new Pai();
    $pai2->sayHello();
    

    

?>