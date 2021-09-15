<?php
namespace App\Controllers;

class BaseController 
{
    protected $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->getAll();
    }

}