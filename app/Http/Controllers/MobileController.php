<?php

namespace App\Http\Controllers;

use App\Factories\AutomobileFactory;

class MobileController extends Controller
{
    //
    private $mobile;

    public function __construct(AutomobileFactory $mobile) {
        $this->mobile = $mobile;
    }

    public function make()
    {
        $pulsar = $this->mobile->create('ktm', 'Pulsar');
        print_r($pulsar->getMakeAndModel());
    }
}
