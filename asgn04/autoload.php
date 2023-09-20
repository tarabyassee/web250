<?php

  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
    include 'classes/' . $class . '.class.php';
    }
   }
   spl_autoload_register('my_autoload');

   $acadianFlycatcher = new Bird(['commonName' => 'Acadian Flycatcher', 'latinName' => 'Turdus Migratorius']);
   echo 'The common name is ' . $acadianFlycatcher->commonName . '<br>';

?>