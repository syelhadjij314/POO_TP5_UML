<?php

namespace App\Controller;

use App\Model\Module;
use App\Core\Controller;

class ModuleController extends Controller
{

    public function ajouterModule()
    {
        if ($this->request->isGet()) {
            $this->render('module/ajouter.module.html.php');
        }
    }
    public function listeModule()
    {
        if ($this->request->isGet()) {
            $modules = Module::findAll();
            $data=['modules'=> $modules];
            $this->render('module/liste.module.html.php',$data);
        }
    }
}
