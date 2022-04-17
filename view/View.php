<?php

class View {
    function __construct()
    {
        
    }
    public function render($name)
    {
        $name = 'view/' . $name . '.php';
        require "view/header.php";
        require $name;
        require "view/footer.php";
    }
}