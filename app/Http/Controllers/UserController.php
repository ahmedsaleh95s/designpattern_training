<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Services\UserService;
use App\Http\Resources\UserResource; 

class UserController extends Controller
{
    //
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->userService->store($request->all());
        return new UserResource($user);
    }
}
