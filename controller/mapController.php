<?php

class MapController extends BaseController
{


    function __construct()
    {
        parent::__construct();
    }

    function Show()
    {
        if (isset($_POST['inputNumber'])) {

            $json = $this->model->getGeoEvents($_POST['inputNumber']);

            $events = json_decode($json)->events;

            $this->view->jsParam = json_encode($events);
            $this->view->render("map/index");

        } else print("error");
    }
    function Index()
    {
        $json = $this->model->getGeoEvents(30);

        $events = json_decode($json)->events;

        $this->view->jsParam = json_encode($events);
        $this->view->render("map/index");
    }
}
