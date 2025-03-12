<?php
require_once "PropulsionSystem.php";

class ElectricMotor extends PropulsionSystem {
    public function __construct($power, $fuelType, $efficiency) {
        parent::__construct($power, $fuelType, $efficiency);
    }

    public function work(): string {
        return "Zumm zumm";
    }
}