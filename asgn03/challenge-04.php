<?php

class Bicycle {

  
  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  public static $instance_count = 0;
  public $category;

  protected $weight_kg = 0.0;
  protected static $wheels = 2;
  
  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
  
  public static function create() {
    $class_name = get_called_class();
    $newInstance = new $class_name;
    self::$instance_count++;
    return $newInstance;
  }

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public static function wheel_details() {
    $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

class Unicycle extends Bicycle {
  // visibility must match property being overridden
  protected static $wheels = 1;

}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br>';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br>';

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br>';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br>';

echo '<hr>';
echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br>';
echo $trek->category = Bicycle::CATEGORIES[1];
echo 'Category: ' . $trek->category . '<br>';

echo '<hr>';

echo "Bicycle: " . Bicycle::wheel_details() . '<br>';
echo "Unicycle: " . Unicycle::wheel_details() . '<br>';

?>
