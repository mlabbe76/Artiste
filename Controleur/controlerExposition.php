<?php
    
    require_once 'models/modelExposition.php';
    require_once 'views/view.php';

    class ControlerExposition{
        private $exposition;

        public function __construct(){
            $this->exposition = new Exposition();
        }

        public function index(){
            $expos = $this->exposition->getAllExpositions();

            $view = new Vue('expositions');
            $view->render(array('AllExpo'=>$expos));
        }
    }