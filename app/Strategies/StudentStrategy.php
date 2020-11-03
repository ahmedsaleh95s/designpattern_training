<?php

namespace App\Strategies;
use App\Interfaces\UserInterface;

class StudentStrategy implements UserInterface
{

    public function attend($data)
    {
        dd($data . 'student');
    }
}