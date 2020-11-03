<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Strategies\NurseStrategy;
use App\Strategies\StudentStrategy;
use App\Strategies\TeacherStrategy;
use App\Strategies\UserStrategy;

class UserController extends Controller
{
    //
    private $teacher, $nurse, $student, $userStrategy;

    public function __construct() {
        $this->nurse = new NurseStrategy();
        $this->teacher = new TeacherStrategy();
        $this->student = new StudentStrategy();
        $this->userStrategy = new UserStrategy();
    }

    public function attend(StoreUserRequest $request)
    {
        if ($request->type == 0) {
            $this->userStrategy->attend("school ", $this->teacher);
        }elseif($request->type == 1){
            $this->userStrategy->attend("play ", $this->student);
        }else {
            $this->userStrategy->attend("hostpital ", $this->nurse);
        }
    }
}
