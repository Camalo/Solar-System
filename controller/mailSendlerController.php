<?php

class MailSendlerController extends BaseController{
    function __construct()
    {
        parent::__construct();
    }

    function Index(){
        $this->view->render('mailSendler/index');
    }

    function send(){
        
        if(isset($_POST['InputEmail'])){
            //не работает из-за отсутствия настроек порта
           $isSended = $this->model->SendMail($_POST['InputEmail']);
           //camalovalsu29@gmail.com
        }

        if ($isSended) print("Письмо отправлено");
        else print("Ошибка! Письмо не отправлено");
    }
}