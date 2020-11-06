<?php

namespace App\Decorators;

use App\Interfaces\CarService;

class BasicInspection implements CarService {

    public function cost()
    {
        return 50;
    }
}