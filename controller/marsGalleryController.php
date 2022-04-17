<?php

class MarsGalleryController extends BaseController{
    function __construct()
    {
        parent::__construct();
    }

    function MarsPhotos($page){
        $json = $this->model->getMarsPhotos($page);
       
        $photos = json_decode($json)->photos;
     
        $this->view->photos = $photos;
        $this->view->currentPage = $page;

       $this->view->render('marsGallery/index');
    }
    function Index(){

      
    }
}