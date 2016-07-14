<?php
class View
{
    private $model;
    private $controller;
    
    private $header;
    private $footer;
    private $menu;
    
 
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
        $this->header = file_get_contents('template/header.tpl');
        $this->footer = file_get_contents('template/footer.tpl');
        $this->menu = file_get_contents('template/menu.tpl');
    }
 
    public function output(){
        return 
            $this->header.
            $this->menu.
            "<h1>" . $this->model->code . "</h1>".
            $this->footer;
    }
    
}
