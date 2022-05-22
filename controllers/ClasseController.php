<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Classe;

class ClasseController extends Controller{

    public function listerClasse(){
        if($this->request->isGet()){
            $data = Classe::findAll();

            $this->render('classe/liste.classe.html.php',$data);
        }
    }

    public function creerClasse(){
        if($this->request->isGet()){
            $this->render('classe/ajouter.classe.html.php');
        }
    }
}