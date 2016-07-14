<?php
class Controller
{
    private $model;
 
    public function __construct($model) {
        $this->model = $model;
    }

    public function clicked() {
        $this->model->code = "Updated Data, thanks to MVC and PHP!";
    }
    
}