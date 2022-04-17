<?php

class MarsGalleryModel{

    function __construct()
    {
        $this->marsPhotosUrl = "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&";
    }

  
    function getMarsPhotos($page){

        $url = $this->marsPhotosUrl . 'page='. $page .'&api_key='.HASH;
     
        $responder = new ApiResponder($url, true);

        $responce = $responder->getResponce();

        if ($responder->success)
            return $responce;
        else return false;
    }
}