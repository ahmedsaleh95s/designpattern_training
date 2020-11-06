<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Decorators\BasicInspection;
use App\Decorators\BasicInspectionAndOilChange;
use App\Decorators\TireRotation;

class CarController extends Controller
{
    //

    public function cost()
    {
        return (new TireRotation(new BasicInspectionAndOilChange(new BasicInspection())))->cost();
    }
}
