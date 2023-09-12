<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  protected $wheels = 2;
  private $weightKg = 0.0;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }
  
  public function wheelDetails() {
    $wheelString = $this->wheels == 1 ? '1 wheel' : $this->wheels. ' wheels';
    //ternary operator
    return "It has " . $wheelString . ".";
  }

  public function setWeightKg($value) {
    return $this->weightKg = floatval($value);
  }

  public function getWeightKg() {
    return $this->weightKg . ' kg';
  }

  public function setWeightLbs($value) {
    $this->weightKg = floatval($value) / 2.2046226218;
  }

  public function weightLbs() {
    return floatval($this->weightKg) * 2.2046226218;
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->setWeightKg(2.0);
$trek->weightLbs();
echo $trek->year . ' ' . $trek->brand . ' '. $trek->model . '<br>';
echo $trek->description . '<br>';
echo $trek->getWeightKg() . '<br>';
echo $trek->wheelDetails() . '<hr>';

$uni1 = new Unicycle;
$uni1->description = 'Professional Unicycle';
$uni1->setWeightKg(1);
$uni1->weightLbs();
echo $uni1->description . '<br>';
echo $uni1->getWeightKg() . '<br>';
echo $uni1->wheelDetails() . '<br> <hr>' ;

echo $trek->brand = 'Trek' . ' weighs ' . $trek->getWeightKg() . '<br>';
echo $trek->brand = 'Trek' . ' weighs ' . $trek->weightLbs() . ' lbs<br>';
echo $trek->brand = 'Unicycle' . ' weighs ' . $uni1->getWeightKg() . '<br>';
echo $trek->brand = 'Unicycle' . ' weighs ' . $uni1->weightLbs() . ' lbs<br>';
?>
