<?php
namespace App\Core;

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
        if (isset($this->routes[$uri])) {
            $route=$this->routes[$uri];
            //Operation de destruction
            [$ctrClass,$action]=$route;
            // dd($ctrClass);
            if (class_exists($ctrClass) && method_exists($ctrClass,$action)) {
                $ctrl = new $ctrClass($this->request);//$ctrl = new SecuriteController()
                // $ctrl->{$action()};//$ctrl->authentification()
                call_user_func(array($ctrl,$action));
            }else {
                throw new RouteNotFoundException();
            }

        }else {
            throw new RouteNotFoundException();
        } 
    }
}