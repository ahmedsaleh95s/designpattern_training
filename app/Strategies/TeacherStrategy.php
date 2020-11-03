<?php

namespace App\Strategies;
use App\Interfaces\UserInterface;

class TeacherStrategy implements UserInterface
{

    public function attend($data)
    {
        dd($data. 'Teacher');
    }
}