<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAdminRequest;
use App\Services\UserService;
use App\Http\Resources\AdminResource; 

class AdminController extends Controller
{
    //

    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function store(StoreAdminRequest $request)
    {
        $admin = $this->userService->store($request->all());
        return new AdminResource($admin);
    }
}
