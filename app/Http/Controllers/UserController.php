<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    //
    protected $userRepo;
    
    public function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->userRepo->store($request->all());
        return new UserResource($user);
    }
}
