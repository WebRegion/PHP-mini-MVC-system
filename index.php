<?php
require_once('core/model.php');
require_once('core/view.php');
require_once('core/controller.php');

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

echo $view->output();