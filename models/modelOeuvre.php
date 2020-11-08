<?php

class Oeuvre extends Model {

    public function getAllOeuvres(){
        $sql = "SELECT * FROM oeuvre";
        $getAllOeuvres =$this->goQuery($sql);
        return $getAllOeuvres;
}

    public function getOeuvre($id){
        $sql = "SELECT * FROM oeuvre WHERE id = ?";
        $getOeuvre=$this->goQuery($sql,array($id));
        $retour=$getOeuvre->fetch();
        return $retour;
    }
}