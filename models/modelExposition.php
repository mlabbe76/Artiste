<?php

     

        class Exposition extends Model {
            public function getLastExpositions(){
                    $sql = "SELECT * FROM exposition ORDER BY id DESC LIMIT 3";
                    $getlastExpo = $this->goQuery($sql);
                    return $getlastExpo;
            }
            public function getAllExpositions(){
                    $sql = "SELECT * FROM exposition";
                    $getAllExpo = $this->goQuery($sql);
                    return $getAllExpo;
            }
        }