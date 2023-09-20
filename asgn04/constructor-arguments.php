<?php

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($args=[]) {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }

}

$acadianFlycatcher = new Bird(['commonName' => 'Acadian Flycatcher', 'latinName' => 'Turdus Migratorius']);
$easternTowhee = new Bird(['commonName' => 'Eastern Towhee', 'latinName' => 'Pipilo Eurythrothalamus']);

echo 'The common name is ' . $acadianFlycatcher->commonName . '<br>';
echo 'The common name is ' . $easternTowhee->commonName . '<br>';

?>