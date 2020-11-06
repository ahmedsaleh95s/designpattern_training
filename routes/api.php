<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('mobile', 'App\Http\Controllers\MobileController@make');
