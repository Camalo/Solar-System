<?php

class MapModel
{

    function __construct()
    {
        $this->url= "https://eonet.gsfc.nasa.gov/api/v2.1/events";
       
    }

    function getGeoEvents($daysCount)
    {
        $url =  $this->url . '?days=' . $daysCount;
        // 
        $responder = new ApiResponder($url, true);

        $responce = $responder->getResponce();

        if ($responder->success)
            return $responce;
        else return false;
    }
}
