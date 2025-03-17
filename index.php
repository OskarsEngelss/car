<?php
require "Car.php";

$car = new Car("White", "Toyota", 2022, "Hybrid", 2.2, 18);

echo $car->propulsionSystems[1]->work();