<?php

class Bird {
  var $commonName;
  var $food = "bugs";
  var $nestPlacement = "tree";
  var $conservationLevel= "low";
  var $song;

  function song() {
    return $this->song;
  }

  function canFly() {
    return "this bird can fly";
  }

}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'ground';
$bird1->song = 'drink-your-tea';

echo "This bird is a " . $bird1->commonName . " who likes to eat " . $bird1->food . ". <br> Their nests are made on the " . $bird1->nestPlacement . " and their conservation level is " . $bird1->conservationLevel . ". <br> Also this bird's song sounds like " . $bird1->song() . " and " . $bird1->canFly() . ". <br>"; 


$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds and insects';
$bird2->nestPlacement = 'roadsides, railroad right-of-ways and on the edges';
$bird2->song = 'whatwhat';


echo "This bird is a " . $bird2->commonName . " who likes to eat " . $bird2->food . ". <br> Their nests are made on the " . $bird2->nestPlacement . " and their conservation level is " . $bird2->conservationLevel . ". <br> Also this bird's song sounds like " . $bird2->song() . " and " . $bird2->canFly() . ". <br>";

?>
