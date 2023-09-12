<?php
class Vehicle {
  var $passengers = 5;
  var $newDriver;
  var $avgGasMileage;
  var $tankSize;
  var $canHaul = 'no';
  var $vehicleType;

  function milesPerTank() {
    return $this->avgGasMileage * $this->tankSize;
  }

  function newDriver() {
    if ($this->newDriver == 'yes') {
      return "A new driver can drive this vehicle.";
    } else {
      return "A new driver may not drive this vehicle.";
    }
  }

  function msg() {
    return 'This is a ' . $this->vehicleType . '.';
  }

}
class HRV extends Vehicle {
  var $vehicleType = 'HRV';
  var $newDriver = 'no';
} 

class Truck extends Vehicle {
  var $vehicleType = 'Truck';
  var $passengers = 2;
  var $canHaul = 'yes';
  var $newDriver = 'yes';
}

class Van extends Truck {
  var $vehicleType = 'van';
  var $passengers = 7;
}


$van1 = new Van;
$van1->avgGasMileage=18;
$van1->tankSize=15;

$hrv = new HRV;
$hrv->avgGasMileage=40;
$hrv->tankSize=14;

$corolla = new HRV;
$corolla->avgGasMileage=33;
$corolla->tankSize=13;
$corolla->newDriver = 'yes';
$corolla->vehicleType = 'car';

$tacoma = new Truck;
$tacoma->avgGasMileage=12;
$tacoma->tankSize=12;

echo 'What type of vehicle is this? ' . $van1->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $van1->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $van1->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $van1->milesPerTank() . '<br>';
echo $van1->newDriver() . '<br> <br>';

echo 'What type of vehicle is this? ' . $hrv->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $hrv->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $hrv->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $hrv->milesPerTank() . '<br>';
echo $hrv->newDriver() . '<br> <br>';

echo 'What type of vehicle is this? ' . $corolla->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $corolla->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $corolla->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $corolla->milesPerTank() . '<br>';
echo $corolla->newDriver() . '<br> <br>';

echo 'What type of vehicle is this? ' . $tacoma->msg() . '<br>';
echo 'How many passengers does this vehicle hold? ' . $tacoma->passengers . '<br>';
echo 'What kind of gas mileage does this vehicle get?? ' . $tacoma->avgGasMileage . '<br>';
echo 'How many miles per tank of gas? ' . $tacoma->milesPerTank() . '<br>';
echo $tacoma->newDriver() . '<br> <br>';
?>