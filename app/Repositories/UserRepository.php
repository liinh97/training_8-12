<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository extends EloquentRepository implements BaseInterface{

    public function getModel(): string
    {
        return User::class;
    }

    public function login(){
        // Auth::check();
    }

    public function getAll($request){
        return $request;
    }

    public function postCreate($request){

    }

    public function putUpdate($request, $id){

    }

    public function postDelete($id){

    }

    public function checkLogin(){

    }

}