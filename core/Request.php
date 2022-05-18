<?php
namespace App\Core;
class Request{

    public function getUri(){
        $url = explode("/",$_SERVER['REQUEST_URI']) ;
        unset($url[0]);
        
        return(array_values($url));
    }
//Requetes de type GET
    public function isGet():bool{
        return $_SERVER['REQUEST_METHOD'] =="GET";
    }
//Requetes de type POST
    public function isPost():bool{
        return $_SERVER['REQUEST_METHOD'] =="POST";
    }
}