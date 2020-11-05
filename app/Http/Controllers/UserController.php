<?php

namespace App\Http\Controllers;

use App\Decorators\basicInspection;
use App\Decorators\TireRotation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function cost()
    {
        return((new TireRotation(new basicInspection))->cost());
    }
}
