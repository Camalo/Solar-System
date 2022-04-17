<?php

class IndexModel
{

    function __construct()
    {
        $this->dailyPictureUrl = "https://api.nasa.gov/planetary/apod?";
       
    }
    
    function getDailyPiture()
    {
        $url = $this->dailyPictureUrl . 'api_key=' . HASH;

        
        $responder = new ApiResponder($url, true);

        $responce = $responder->getResponce();

        
        if ($responder->success)
            return $responce;
        else return false;

    }
}
