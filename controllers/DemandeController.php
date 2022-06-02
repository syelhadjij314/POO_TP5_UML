<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Demande;

class DemandeController extends Controller
{
    public function listerDemande(){

        if($this->request->isGet()){
            $demandes = Demande::findAll();
            $data=['demandes'=> $demandes];
            $this->render('demande/liste.demande.html.php',$data);
        }
    }

    public function ajouterDemande(){
        if($this->request->isGet()){
            $this->render('demande/ajouter.demande.html.php');
        }
    }
}
