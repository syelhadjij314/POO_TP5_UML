<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller{
    public function affecterClasse()
    {

    }
    public function listerProfesseur()
    {
        if($this->request->isGet()){
            $data=Professeur::findAll();

            $this->render('professeur/liste.professeur.html.php',$data);
        }
    }

    public function ajouterProfesseur()
    {
        if($this->request->isGet()){
            $this->render('professeur/ajouter.professeur.html.php');
        }
    }
}