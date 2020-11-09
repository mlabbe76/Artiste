<?php

    class Oeuvres extends Model {

    public function getAllOeuvres(){
            $sql = "SELECT * FROM oeuvre";
            $getAllOeuvres =$this->goQuery($sql);
            return $getAllOeuvres;
    }
}        