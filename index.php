<?php

$url = isset($_SERVER['PATH_INFO']) ? explode('/',ltrim($_SERVER['PATH_INFO'],'/')) : '/';

switch ($url) {
    default:
    {
        require_once __DIR__."/Models/index_model.php";
        require_once __DIR__."/Views/index_view.php";
        require_once __DIR__."/Controllers/index_controller.php";

        $indexModel = new IndexModel();
        $indexController = new IndexController($indexModel);
        $indexView = new IndexView($indexModel, $indexController);
        echo $indexView->Index();
    }
}