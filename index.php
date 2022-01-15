<?php


$url = isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != '/index.php'? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

if ($url == '/') {
    require_once __DIR__ . "/Models/index_model.php";
    require_once __DIR__ . "/Views/index_view.php";
    require_once __DIR__ . "/Controllers/index_controller.php";

    $indexModel = new IndexModel();
    $indexController = new IndexController($indexModel);
    $indexView = new IndexView($indexModel, $indexController);
    echo $indexView->Index();
} else {


         if (file_exists(__DIR__ . "/Models/$url[0]_model.php")) {

             require_once __DIR__ . "/Models/$url[0]_model.php";
             require_once __DIR__ . "/Views/$url[0]_view.php";
             require_once __DIR__ . "/Controllers/$url[0]_controller.php";

             $modelType = ucfirst("$url[0]Model");
             $model = new $modelType();
             $controllerType = ucfirst("$url[0]Controller");
             $controller = new $controllerType($model);
             $viewType = ucfirst("$url[0]View");
             $view = new $viewType($model, $controller);
             echo $view->Index();
         } else {
             echo "Page not found";
         }
}
