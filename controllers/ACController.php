<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\AC;

class ACController extends Controller{

    public function listerAC(){
        if($this->request->isGet()){
            $acs = AC::findAll();
            $data=['acs'=>$acs];

            $this->render('AC/liste.AC.html.php',$data);
        }
    }

    public function inscriptions():array{
        
        return [];
    }
}