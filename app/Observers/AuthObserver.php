<?php
namespace App\Observers;

use App\Interfaces\SubjectInterface;

class AuthObserver implements SubjectInterface{

    protected $observers = [];

    public function attach($observer)
    {
        $this->observers [] = $observer;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }
}