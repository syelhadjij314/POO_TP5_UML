<?php
namespace App\Controller;

use App\Core\Controller;
// use App\Core\Request;

class SecuriteController extends Controller{

    public function authentification(){
        // Affichage du formulaire de connexion => GET
        if($this->request->isGet()){
            $this->render('securite/login.html.php');
        }
        // Traitement apres soumission => POST
    }

    public function deconnexion(){
        $this->redirectToRoute("login") ;      
    }
}