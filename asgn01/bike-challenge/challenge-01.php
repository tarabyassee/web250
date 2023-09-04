<?php

class Bike {

  var $brand;
  var $model;
  var $year;
  var $description;
  var $weightKg;

  function name() {
    return $this->brand ." ". $this->model . " " . $this->year . " " . $this->description;
  }

  function weightLbs() {
    return floatval($this->weightKg) * 2.2046226218;
  }

  function setWeightLbs($value) {
    $this->weightKg = floatval($value) / 2.2046226218;
  }

}

$schwinn = new Bike;
$schwinn->brand='Schwinn';
$schwinn->model='banana seat';
$schwinn->year='1975';
$schwinn->description='yellow classic bike';
$schwinn->weightKg=13.61;

echo "This is the brand, model, year made and description of the bike. " . $schwinn->name() . "<br>";
echo "This is the weight of the bike in kg. " . $schwinn->weightKg . "<br>";
echo "This is the weight of the bike in pounds. " . $schwinn->weightLbs();

$schwinn->setWeightLbs(2);
echo $schwinn->weightKg . "<br>";
echo "This is the weight in pounds calculated from kg. " . $schwinn->weightLbs();
?>
