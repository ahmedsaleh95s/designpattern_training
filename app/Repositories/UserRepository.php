<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

   protected $model;

   public function __construct(User $model)
   {
       $this->model = $model;
   }

   /**
    * @return Collection
    */
   public function store($data)
   {
       return $this->model->create($data);    
   }
}