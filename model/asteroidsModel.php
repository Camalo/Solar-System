<?php

class AsteroidsModel{

    
    function __construct()
    {
        $this->asteroidsUrl = "https://api.nasa.gov/neo/rest/v1/feed?";
    }

    /**
     * @param string $start_date
     * @return json
     */
    function getAsteroids(string $start_date, string $end_date){
        

        $url = $this->asteroidsUrl . 'start_date=' . $start_date . '&end_date=' . $end_date . '&api_key='.HASH;
        
        $responder = new ApiResponder($url, true);

        $responce = $responder->getResponce();

        if ($responder->success)
            return $responce;
        else return false;
    }
}