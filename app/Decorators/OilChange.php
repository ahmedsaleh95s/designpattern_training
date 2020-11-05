<?php


namespace App\Decorators;

use App\Interfaces\UserInterface;

class OilChange implements UserInterface {

    protected $userInterface;

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }
    public function cost()
    {
     return  15 * $this->userInterface->cost();   
    }
}