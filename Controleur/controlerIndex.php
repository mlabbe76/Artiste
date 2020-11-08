<?php
    
    require_once 'models/modelExposition.php';
    require_once 'views/view.php';

    class ControlerIndex{
        private $exposition;

        public function __construct(){
            $this->exposition = new Exposition();
        }

        public function index(){
            $expos = $this->exposition->getLastExpositions();

            $view = new Vue('Index');
            $view->render(array('lastExpo'=>$expos));
        }
    }