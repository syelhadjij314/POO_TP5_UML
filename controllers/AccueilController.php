<?php
namespace App\Controller;

use App\Core\Controller;

class AccueilController extends Controller{

    public function accueil(){

        if($this->request->isGet()){
            
            $this->render('dashboard/accueil.html.php');
        }
    }
}