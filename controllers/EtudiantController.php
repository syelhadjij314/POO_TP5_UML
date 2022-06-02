<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Etudiant;

class EtudiantController extends Controller
{

    public function listerEtudiant()
    {

        if ($this->request->isGet()) {
            $etudiants = Etudiant::findAll();
            $data = ['etudiants' => $etudiants];
            $this->render('etudiant/liste.etudiant.html.php',$data);
        }
    }
}
