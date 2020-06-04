<?php
// index.php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Car.php';


$MotorWay = new MotorWay();
$PedestrianWay = new PedestrianWay();
$ResidentialWay = new ResidentialWay();

$car = new Car('tomato',4,'fuel');

$MotorWay->addVehicule($car);

?>
