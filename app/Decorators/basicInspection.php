<?php


namespace App\Decorators;

use App\Interfaces\UserInterface;

class basicInspection implements UserInterface
{

    public function cost()
    {
        return 25;
    }
}