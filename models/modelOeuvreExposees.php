<?php

class Oeuvre_exposees extends Model {

    public function getAllOeuvres_exposees(){
        $sql = "SELECT * FROM oeuvre_exposee";
        $getAllOeuvres_exposees =$this->goQuery($sql);
        return $getAllOeuvres_exposees;
}

    public function getOeuvre_exposees($id_exposition){
        $sql = "SELECT * FROM oeuvre_exposee WHERE id_exposition = ?";
        $getOeuvre=$this->goQuery($sql,array($id_exposition));
        $retour=$getOeuvre_exposees->fetch();
        return $retour;
    }
}