<?php

namespace App\Repositories;

interface BaseInterface {

    public function getAll($request);
    public function postCreate($request);
    public function putUpdate($request, $id);
    public function postDelete($id);
    
}