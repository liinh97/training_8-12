<?php

namespace App\Repositories;

abstract class EloquentRepository {

    protected $model;

    abstract public function getModel(): string;

    public function __construct() {
        $this->setModel();
    }

    public function setModel(){
        $this->model = app()->make($this->getModel());
    }

    public function firstBy($arr, $value = ''){
        if($arr){
            if(is_array($arr)){
                return $this->model->where(is_array(array_values($arr)) ? $arr : [$arr])->first();
            }
            return $this->model->where($arr, $value)->first();
        }
        return null;
    }

}