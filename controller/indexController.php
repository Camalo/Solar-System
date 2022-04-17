<?php

class IndexController extends BaseController{

    function __construct()
    {
        parent::__construct();
    }
    function Index(){

        $json = $this->model->getDailyPiture();
        
        $dailyPicture = json_decode($json);
       
        $this->view->dailyPicture->url = $dailyPicture->url;
        $this->view->dailyPicture->title = $dailyPicture->title;
        $this->view->dailyPicture->explanation = $dailyPicture->explanation;

       $this->view->render('index/index');
    }

    
}