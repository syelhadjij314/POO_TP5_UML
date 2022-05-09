<?php
class Inscription{
    //Attributs Instances
    //Attributs de classe

    //ManyToOne => AC
    public function ac(): AC{
        return new AC();
    }

    //ManyToOne => AnneeScolaire
    public function anneeScolaire(): AnneeScolaire{
        return new AnneeScolaire() ;
    }
}