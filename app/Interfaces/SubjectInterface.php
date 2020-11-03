<?php

namespace App\Interfaces;

interface SubjectInterface{
    
    public function attach($data);
    public function detach($index);
    public function notify();

}