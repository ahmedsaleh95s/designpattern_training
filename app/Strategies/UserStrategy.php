<?php

namespace App\Strategies;
use App\Interfaces\UserInterface;

class UserStrategy
{

    public function attend($data, UserInterface $userInterface)
    {
        $userInterface->attend($data);
    }
}