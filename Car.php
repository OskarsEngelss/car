<?php
require "Tire.php";
require "ICEngine.php";
require "ElectricMotor.php";

class Car {
    public $color;
    public $brand;
    private $releaseYear;
    public $propulsionType;
    public $tires = [];
    public $propulsionSystems = [];

    public function __construct($color, $brand, $releaseYear, $propulsionType, $pressure, $size) {
        $this->color = $color;
        $this->brand = $brand;
        $this->releaseYear = $releaseYear;
        $this->propulsionType = $propulsionType;

        for ($i = 0; $i < 4; $i++) {
            $this->tires[$i] = new Tire($pressure, $size);
        }
        

        if ($this->propulsionType == "ICE") {
            $this->propulsionSystems = [new ICEngine($color, $brand, $releaseYear, $propulsionType, 2, 4)];
        } else if ($this->propulsionType == "Electric") {
            $this->propulsionSystems = [new ElectricMotor($color, $brand, $releaseYear, $propulsionType)];
        } else if ($this->propulsionType == "Hybrid") {
            $this->propulsionSystems = [new ICEngine($color, $brand, $releaseYear, $propulsionType, 2, 4), new ElectricMotor($color, $brand, $releaseYear, $propulsionType)];
        }
    }

    public function move() {

    }

    public function makeNoise() {
        return "Beep, beep";
    }
}