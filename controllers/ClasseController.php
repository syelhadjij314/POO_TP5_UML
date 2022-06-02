<?php

namespace App\Controller;

use App\Core\Constantes;
use App\Core\Controller;
use App\Model\Classe;

class ClasseController extends Controller
{

    public function listerClasse()
    {
        if ($this->request->isGet()) {
            $classes = Classe::findAll();
            $data = ['classes' => $classes];

            $this->render('classe/liste.classe.html.php', $data);
        }
    }

    public function creerClasse()
    {

        if ($this->request->isGet()) {
            $classes = Classe::findAll();
            $data = ['classes' => $classes];
            $this->render('classe/ajouter.classe.html.php', $data);
        }


        if ($this->request->isPost()) {

            extract($_POST);

            $classe = new Classe($id, $libelleClasse, $filiere, $niveau);

            $classe->insert();
            $this->redirectToRoute("liste-classe");
        }
    }

    public function editClasse()
    {

        if ($this->request->isGet()) {
            $id = $this->request->getUri()[1];
            $classe = Classe::findById($id);
            $this->render('classe/ajouter.classe.html.php', $data = [
                "classe" => $classe[0],
                "action" => Constantes::WEB_ROOT."edit-classe/".$classe[0]->id
            ]);
        }


        if ($this->request->isPost()) {
            $modifier = $this->request->getUri()[1];
            extract($_POST);
            $classe = new Classe($modifier, $libelleClasse, $filiere, $niveau);
            $classe->update();
            $this->redirectToRoute("liste-classe");
        }
    }

    public function deleteClasse()
    {

        if ($this->request->isPost()) {

            $idDelete = (int) $_POST['id'];
            $result = Classe::delete($idDelete);
            if ($result > 0) {
                // Suppression reussie
                $this->redirectToRoute("liste-classe");
            } else {
                $this->redirectToRoute("liste-classe");
            }
        }
    }
}
