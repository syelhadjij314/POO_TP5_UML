<?php
namespace App\Controller;

use App\Core\Constantes;
use App\Core\Controller;
use App\Model\Users;
// use App\Core\Session;

class SecuriteController extends Controller{

    public function authentification(){
        // die("hhhh");
        // Affichage du formulaire de connexion => GET
        if($this->request->isGet()){
            $this->render('securite/login.html.php');
        }else {
            extract($_POST);

            $user= Users::findUserByLoginAndPassword($login,$password);
            if ($user) {
                $_SESSION['user-connect']= $user;
                // var_dump($user); die;
                $this->redirectToRoute("liste-professeur");
            }else {
                header("location:".Constantes::WEB_ROOT."login"); 
            }
        }

        // Traitement apres soumission => POST
    }

    public function deconnexion(){
        unset($_SESSION["user-connect"]);
        $this->redirectToRoute("login") ;      
    }
}