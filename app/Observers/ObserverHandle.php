<?php

namespace App\Observers;
use App\Interfaces\SubjectInterface;
use App\Interfaces\ObserverInterface;

class ObserverHandle implements ObserverInterface{

    protected $observers = [];

    public function handle()
    {
        dd("hello");
    }

    
}