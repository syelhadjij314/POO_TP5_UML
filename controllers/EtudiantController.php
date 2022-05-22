<?php
namespace App\Controller;
use App\Core\Controller;

class EtudiantController extends Controller{

    public function listerEtudiant(){

        if($this->request->isGet()){

            $this->render('etudiant/liste.etudiant.html.php');
        }
    }
}