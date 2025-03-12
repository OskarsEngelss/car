<?php

class Tire {
    public $pressure;
    public $size;

    public function __construct($pressure, $size) {
        $this->pressure = $pressure;
        $this->size = $size;
    }
}