<!-- Interface -->
<!-- So pode ser extendida tambem -->

<?php
   include('Interface.php');

    class Teste implements iTemplate{
      public  function printar($var){
            echo $var;
        }
    }

    $var1 = new Teste();
    $var1->printar('ola');

?>

