<?php
require_once "PropulsionSystem.php";

class ICEngine extends PropulsionSystem {
    public $volume;
    private $cylinderCount;

    public function __construct($power, $fuelType, $efficiency, $volume, $cylinderCount) {
        parent::__construct($power, $fuelType, $efficiency);
        $this->volume = $volume;
        $this->cylinderCount = $cylinderCount;
    }

    public function work(): string {
        return "Brumm brumm";
    }
}