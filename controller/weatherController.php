<?php


class WeatherController extends BaseController
{

    function __construct()
    {
        parent::__construct();
    }

    function Index()
    {
        $dateFormat = 'Y-m-d';
        $startDate = new DateTime('-30 days');
        $endDate = new DateTime('now');

        //Геомагнитные бури
        $json = $this->model->getGeomagneticStorm($startDate->format($dateFormat), $endDate->format($dateFormat));
        $obj = json_decode($json);
        $this->view->geomagneticStorms = $obj;
       
        //Солнечные вспышки
        $json = $this->model->getSolarFlares($startDate->format($dateFormat), $endDate->format($dateFormat));
        $solarFlares = json_decode($json);
        $this->view->solarFlares = $solarFlares;
        
        $this->view->render('weather/index');
    }
}
