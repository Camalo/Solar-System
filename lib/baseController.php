<?php

class BaseController{
    function __construct()
    {
        $this->view = new View();
        
    }

    function loadModel($name){
        $path = 'model/'.$name.'Model.php';
        if (file_exists($path)){
            require $path;
            $name = ucfirst($name) . 'Model';
            $this->model = new $name();
        }
    }
}