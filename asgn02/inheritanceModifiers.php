<?php
class Vehicle {
  public $passengers = 5;
  public $newDriver;
  public $avgGasMileage;
  public $tankSize;
  private $canHaul = 'false';
  public $vehicleType;

  public function milesPerTank() {
    return $this->avgGasMileage * $this->tankSize;
  }

  public function newDriver() {
    if ($this->newDriver == 'yes') {
      return "A new driver can drive this vehicle.";
    } else {
      return "A new driver may not drive this vehicle.";
    }
  }

  public function msg() {
    return 'This is a ' . $this->vehicleType . '.';
  }
  
  public function setCanHaul($canHaul) {
    return $this->canHaul = (bool) $canHaul;
  }

  public function getCanHaul() {
    return $this->canHaul;
  }
}
class HRV extends Vehicle {
  public $vehicleType = 'HRV';
  public $newDriver = 'no';
} 

class Truck extends Vehicle {
  public $vehicleType = 'Truck';
  public $passengers = 2;
  public $newDriver = 'yes';
}

class Van extends Truck {
  public $vehicleType = 'van';
  public $passengers = 7;
}

$van1 = new Van;
$van1->avgGasMileage=18;
$van1->tankSize=15;
$van1->setCanHaul(true);

$hrv = new HRV;
$hrv->avgGasMileage=40;
$hrv->tankSize=14;
$hrv->setCanHaul(false);

$corolla = new HRV;
$corolla->avgGasMileage=33;
$corolla->tankSize=13;
$corolla->newDriver = 'yes';
$corolla->vehicleType = 'car';
$corolla->setCanHaul(false);

$tacoma = new Truck;
$tacoma->avgGasMileage=12;
$tacoma->tankSize=12;
$tacoma->setCanHaul(true);

echo 'What type of vehicle is this? ' . $van1->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $van1->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $van1->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $van1->milesPerTank() . '<br>';
echo 'Can the van haul? ' . ($van1->getCanHaul() ? 'yes' : 'no') . '<br>';
echo $van1->newDriver() . '<br> <br>';

echo 'What type of vehicle is this? ' . $hrv->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $hrv->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $hrv->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $hrv->milesPerTank() . '<br>';
echo 'Can the HRV haul? ' . ($hrv->getCanHaul() ? 'yes' : 'no') . '<br>';
echo $hrv->newDriver() . '<br> <br>';

echo 'What type of vehicle is this? ' . $corolla->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $corolla->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $corolla->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $corolla->milesPerTank() . '<br>';
echo 'Can the Corolla haul? ' . ($corolla->getCanHaul() ? 'yes' : 'no') . '<br>';
echo $corolla->newDriver() . '<br> <br>';

echo 'What type of vehicle is this? ' . $tacoma->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $tacoma->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $tacoma->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $tacoma->milesPerTank() . '<br>';
echo 'Can the truck haul? ' . ($van1->getCanHaul() ? 'yes' : 'no') . '<br>';
echo $tacoma->newDriver() . '<br> <br>';
?>
