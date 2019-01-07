<!-- Chama as classes automaticamente -->

<?php 
function autoLoad($className) { 
      if (file_exists('classes/'.$className . '.php')) { 
          include ('classes/'.$className . '.php'); 
      } 
} 

spl_autoload_register('autoLoad');

$var1 = new Utilidades();
echo '<br>';
$var2 = new Funcoes();
?>