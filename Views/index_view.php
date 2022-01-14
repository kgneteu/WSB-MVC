<?php
class IndexView {
    private $model;
    private $controller;
    public function __construct($model, $controller)
    {
        $this->model = $model;
        $this->controller = $controller;
    }

    public function Index()
    {
        return $this->controller->Say();
    }
}