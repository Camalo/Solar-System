<?php 


class AsteroidsController extends BaseController{

    
    function Index(){

        $dateFormat = 'Y-m-d';
        $startDate = new DateTime('-7 days');
        $endDate = new DateTime('now');

        $json = $this->model->getAsteroids($startDate->format($dateFormat), $endDate->format($dateFormat));
        
        $obj= json_decode($json);
       
        $nearObjects = get_object_vars($obj->near_earth_objects);


        $this->view->asteroids = $nearObjects;
        $this->view->render('asteroids/index');
    }
}