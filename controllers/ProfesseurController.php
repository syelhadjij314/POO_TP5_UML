<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\ClasseProfesseur;
use App\Model\Professeur;

class ProfesseurController extends Controller{
    public function affecterClasse()
    {

    }
    public function listeProfesseurClasse()
    {
        if($this->request->isGet()){
            $classesProf=ClasseProfesseur::findAll();
            $data=[ 'classesProf'=>$classesProf];

            $this->render('professeur/classe.professeur.html.php',$data);
        }
    }
    public function listerProfesseur()
    {
        if($this->request->isGet()){
            $prof=Professeur::findAll();
            $data=[ 'prof'=>$prof];

            $this->render('professeur/liste.professeur.html.php',$data);
        }
    }

    public function ajouterProfesseur()
    {
        if($this->request->isGet()){
            $this->render('professeur/ajouter.professeur.html.php');
        }else if($this->request->isPost()){
            // var_dump("Traore");
            extract($_POST);
            // dd($_POST);
            $prof = new Professeur();
            $prof->setNomComplet($nom);
            $prof->setGrade($grade);
            $prof->insert();
            $this->redirectToRoute("add-professeur");
        }
        
    }
}