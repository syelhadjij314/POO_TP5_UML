<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\RP;

class RPController extends Controller{

    public function listerRP(){

        if($this->request->isGet()){
            $rps = RP::findAll();
            $data=['rps'=>$rps];

            $this->render('RP/liste.RP.html.php',$data);
        }
    }
}