<?php

    require_once 'models/modelOeuvreExposees.php';
    require_once 'views/view.php';

    class ControlerOeuvreExposee{

        private $oeuvreExposee;

        public function __construct(){
            $this->oeuvre_exposee = new oeuvre_exposee();
        }

        public function oeuvre_exposee($id){
            $oeuvre = $this->oeuvre_exposee->getOeuvre_exposee($id);

            $view = new Vue('Oeuvre_exposee');
                $view->render(array('oeuvre_exposee'=> $oeuvre_exposee));
        }
    }