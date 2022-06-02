<?php
namespace App\Core;

class Controller {

    protected Request $request;//injection de la request dans le controller
    public function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function render(string $path,array $data=[]){
        $data["Constantes"]=Constantes::class;
        $data["request"]=$this->request;
        //Dans une vue $Constantes::
        //Dans une vue $request
        ob_start();
            extract($data);
            $url_base = Constantes::WEB_ROOT;
            require_once(Constantes::ROOT()."templates/".$path);
            $content_for_views=ob_get_clean();
            require_once(Constantes::ROOT()."templates/layout/base.html.php");
    }

    public function redirectToRoute($uri){        
        header("location:".Constantes::WEB_ROOT.$uri);
    }
}