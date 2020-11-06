<?php

namespace App\Factories;

class Automobile {
    private $bikeMake;
    private $bikeModel;
    
    public function __construct($make, $model) {
       $this->bikeMake = $make;
       $this->bikeModel = $model;
    }
    
    public function getMakeAndModel() {
       return $this->bikeMake . '_' . $this->bikeModel;
    }
 }