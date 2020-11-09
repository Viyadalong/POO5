<?php

require_once 'Bike.php';

$bike = new Bike('red', 1);
var_dump($bike);
$bike->setCurrentSpeed(15);

if ($bike->switchOn() === true) {
    echo "my lights are on";
} else {
    echo "my lights are off";
}


$bike2 = new Bike('blue', 1);
var_dump($bike2);
$bike2->setCurrentSpeed(5);

if ($bike2->switchOn() === true) {
    echo "my lights are on";
} else {
    echo "my lights are off";
}