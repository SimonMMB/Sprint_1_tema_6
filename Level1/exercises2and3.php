<?php
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Bus.php';
$newVehicle = new Vehicle();
$newBike = new Bike();
$newCar = new Car();
$newBus = new Bus();

//Exercise 2
$vehicleContent = $newVehicle->writeInfo();
$bikeContent = $newBike->writeInfo();
$carContent = $newCar->writeInfo();
$busContent = $newBus->writeInfo();
$file = 'exercises2and3.txt';
$titleEx2 = "EXERCISE 2 - Information about objects given by magic constants \n\n";
$totalContent1 = $titleEx2 . $vehicleContent . $bikeContent . $carContent . $busContent;
file_put_contents($file, $totalContent1);

//Exercise 3
$vehicleToString = $newVehicle->__toString();
$bikeToString = $newBike->__toString();
$carToString = $newCar->__toString();
$busToString = $newBus->__toString();
$titleEx3 = "EXERCISE 3 - Re-writing of magic method __toString() \n\n";
$totalContent2 = $titleEx3 . $vehicleToString . $bikeToString . $carToString . $busToString;
file_put_contents($file, $totalContent2, FILE_APPEND);
?>