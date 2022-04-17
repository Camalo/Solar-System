<?php
//TODO: refactor code hear and in BaseModel
//like ApiResponder->BaseModel->ConcreteModel
//because so mush a duplicate code
class ApiResponder{
    

    public function __construct($url, $returnsTransfer)
    {
        $this->requestUrl = $url;
        $this->returnsTransfer = $returnsTransfer;
        $this->ssl_verifypeer = false;
        $this->success = false;

        //create and setup curl
        $this->initialize();

        $this->setResponceOptions();
        
    }

    public function getResponce(){
        $responce = curl_exec($this->curl);
     
        if($responce) $this->success = true; 

        curl_close($this->curl);
        return $responce;
    }

    public function getError(){
        return curl_error($this->curl);
    }
    private function initialize(){
        $this->curl = curl_init();
    }
    private function setResponceOptions(){
        curl_setopt($this->curl, CURLOPT_URL, $this->requestUrl);
        //параметр для возврата результата передачи в качестве строки
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, $this->returnsTransfer);
        //запрос без проверки сертификата узла сети 
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, $this->ssl_verifypeer);

    }
}