<?php

namespace App\Decorators;

use App\Interfaces\CarService;

class TireRotation implements CarService {

    protected $carService;

    public function __construct(CarService $carService) {
        $this->carService = $carService;
    }

    public function cost()
    {
        return 50 + $this->carService->cost();
    }
}