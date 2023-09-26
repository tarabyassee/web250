<?php
Class Bird {
  public $commonName;
  public $latinName;

  public function __construct($commonName, $latinName) {
    $this->commonName = $commonName;
    $this->latinName = $latinName;
  }
} 

$robin = new Bird("American Robin", "Turdus migratorius");
echo "Common Name: " . $robin->commonName . "<br>";
echo "Latin Name: " . $robin->latinName . "<br>";
echo "<hr>";

$towhee = new Bird("Eastern Towhee", "Pipilo erythrophthalmus");
echo "Common Name: " . $towhee->commonName . "<br>";
echo "Latin Name: " . $towhee->latinName . "<br>";
?>