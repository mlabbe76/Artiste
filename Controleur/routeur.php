<?php

    require_once 'models/model.php';
    require_once 'Controleur/controlerIndex.php';
    require_once 'Controleur/controlerExposition.php';
    require_once 'Controleur/controlerOeuvres.php';

    class Router {
        private $ctrlIndex;
        private $ctrlExposition;
        private $ctrlOeuvres;
        private $ctrlOeuvre;

        public function __construct(){
            $this->ctrlExposition = new ControlerExposition();
            $this->ctrlOeuvres = new ControlerOeuvre();
            $this->ctrlIndex = new ControlerIndex();
            
        }

        public function routeQuery(){
            try{ 
                $action=isset($_GET['action'])?$_GET['action']:NULL;
                    switch($action){
                        case 'exposition':
                            $this->ctrlExposition->index();
                        break;
                        case 'index':
                            $this->ctrlIndex->index();
                        break;
                        case 'oeuvres':
                            $this->ctrlOeuvres->oeuvres();
                        break;
                        case 'oeuvre':
                            $this->ctrlOeuvres->oeuvre($_GET['id']);
                        break;
                            default:
                                $this->ctrlIndex->index();
                            break;
                    }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }