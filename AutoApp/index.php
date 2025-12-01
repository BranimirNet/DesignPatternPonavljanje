<?php

require_once "autoload.php";

use AutoApp\Factory\CarFactory;
use AutoApp\Observers\ProductionNotifier;


// FACTORY
$factory = new CarFactory();

// dodati OBSERVERE
$factory->attachObserver(new ProductionNotifier("Marko"));
$factory->attachObserver(new ProductionNotifier("Ivana"));

// PROIZVODNJA AUTOMOBILA

$factory->createCar("Audi A4", 2022, "Dizel");
$factory->createCar("Tesla Model 3", 2023, "Elektricni");
$factory->createCar("VW Golf", 2021, "Benzin");


// ITERATOR
echo"<hr>";
echo "<h3>Proizvedeni automobili:</h3>";

$cars = $factory->getCars();

foreach ($cars as $car) {
    echo $car->info() . "<br>";
}


echo "<hr>";
echo "<br>Ukupan broj proizvedenih automobila: " . $cars->count() . "<br>";

echo"<h3>Rucno iteriranje bez foreach petlje:</h3>";

$cars->rewind();
while ($cars->valid()) {
    $car = $cars->current();
    echo $car->info() . "<br>";
    $cars->next();
}

$cars->rewind();

$firstCar = $cars->current();
echo "<br>Prvi proizvedeni automobil je: " . $firstCar->info() . "<br>";

$lastCar = $cars->last();
echo "<br>Zadnji proizvedeni automobil je: " . $lastCar->info() . "<br>";
?>