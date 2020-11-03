<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;

class UserRepository
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