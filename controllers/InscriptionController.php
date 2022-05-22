<?php
namespace App\Controller;
use App\Core\Controller;

class InscriptionController extends Controller{

    public function listerInscription(){

        if($this->request->isGet()){
            $this->render('AC/liste.inscription.html.php');
        }
    }

    public function inscription(){

        if($this->request->isGet()){
            $this->render('AC/inscription.html.php');
        }
    }
}