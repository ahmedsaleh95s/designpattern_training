<?php


namespace App\Decorators;

use App\Interfaces\UserInterface;

class TireRotation implements UserInterface {

    protected $userInterface;

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }

    public function cost()
    {
     return 20 * $this->userInterface->cost();   
    }
}