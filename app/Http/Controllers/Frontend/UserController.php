<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Config;

class UserController extends BaseController
{
    protected $reps;
    
    public function __construct(UserRepository $reps) {
        $this->reps = $reps;
    }

    public function getLogin(){
        $input = Config::get('input.item');
        return view('frontend.login', compact('input'));
    }

    public function postLogin(){
        // $user = $this->reps->login();
        // return $user;
    }
}

