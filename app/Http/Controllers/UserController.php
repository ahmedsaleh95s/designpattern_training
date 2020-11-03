<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Observers\AuthObserver;
use App\Observers\ObserverHandle;

class UserController extends Controller
{
    //
    protected $observ, $obs;

    public function __construct() {
        $this->observ = new AuthObserver();
        $this->obs = new ObserverHandle();
    }

    public function handle()
    {
        $this->observ->attach($this->obs);
        $this->observ->notify();
    }
}
