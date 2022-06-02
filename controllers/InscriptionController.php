<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Inscription;

class InscriptionController extends Controller
{

    public function listerInscription()
    {

        if ($this->request->isGet()) {

            $inscriptions = Inscription::findAll();
            $data=['inscriptions'=> $inscriptions];
            $this->render('AC/liste.inscription.html.php',$data);
        }
    }

    public function inscription()
    {

        if ($this->request->isGet()) {
            $this->render('AC/inscription.html.php');
        }
    }
}
