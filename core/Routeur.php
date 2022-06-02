<?php
namespace App\Core;

use App\Controller\SecuriteController;
use App\Core\Request;
use App\Core\Session;
use App\Exception\RouteNotFoundException;

class Routeur{

    private Request $request;

    public function __construct()
    {
        $this -> request = new Request;
    }
    
    private array $routes=[];
    public function route(string $uri,array $action){
        $this -> routes[$uri] = $action;
    }

    public function resolve(){
        $uri = "/".$this->request->getUri()[0];
        // dd($uri);
        if (isset($this->routes[$uri])){
            $route=$this->routes[$uri];
            [$ctrlClass,$action]=$route;
            if (class_exists($ctrlClass) && method_exists($ctrlClass,$action)){
                $ctrl = new $ctrlClass($this->request);
                //Les vues accessibles sans connexion
                // Pour que toutes les pages accessibles ajouter * dans le tableau
                $home = ["SecuriteController/authentification"];
                //extraire la

                $hometest=explode("\\",$ctrl::class)[2]."/".$action;
            // dd($ctrl::class);
                if (in_array("*",$home) || in_array($hometest,$home)) { //les Pages accessibles par Tout le monde
                    call_user_func(array($ctrl,$action));
                }else 
                    if(Session::isConnect()){ // Tester si session existe
                        call_user_func(array($ctrl,$action));
                    }else{
                    //Redirection vers login
                    header("location:".Constantes::WEB_ROOT."login");                   
                    }
                }else{
                    throw new RouteNotFoundException();
                }
            }
            else{
                if($this->request->getUri()[0]=="") {
                    $securite = new SecuriteController($this->request);
                    call_user_func(array($securite, "authentification"));
                
                }else {
                    throw new RouteNotFoundException();

            }
        } 
    }
}