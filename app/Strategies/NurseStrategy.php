<?php

namespace App\Strategies;
use App\Interfaces\UserInterface;

class NurseStrategy implements UserInterface
{

    public function attend($data)
    {
        dd($data. 'nurse');
    }
}