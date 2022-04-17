<?php

class WeatherModel{

    function __construct()
    {
        $this->geomagneticStormUrl = "https://api.nasa.gov/DONKI/GST?";
        $this->solarFlaresUrl = "https://api.nasa.gov/DONKI/FLR?";
        
    }
   

    function getGeomagneticStorm($startDate, $endDate){
       
        $url = $this->geomagneticStormUrl . 'startDate='. $startDate . '&endDate='. $endDate . '&api_key='.HASH;
   
        $responder = new ApiResponder($url, true);

        $responce = $responder->getResponce();

        if ($responder->success)
            return $responce;
        else return false;//as JSON
        
        
    }
    
    function getSolarFlares($startDate, $endDate){
        
        $url = $this->solarFlaresUrl . 'startDate='. $startDate . '&endDate='. $endDate . '&api_key='.HASH;
     
        $responder = new ApiResponder($url, true, true);

        $responce = $responder->getResponce();

        if ($responder->success)
            return $responce;
        else return false; //as JSON
        
        
    }
}