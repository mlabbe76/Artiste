<?php

abstract class model{
    protected $db;

    protected function goQuery($sql,$params = null){
                 $db=$this->getDb();
        if($params == null){
 //           $result = $this->getDb()->query($sql);    
            
            $result=$db->query($sql);
        } else {
  //          $result = $this->getDb()->prepare($sql);
            $result=$db->prepare($sql);
            $result->execute($params);    
        }
        return $result;
    }

    protected function getDb(){
        if($this->db == null){
            $this->db = new PDO('mysql:host=localhost;dbname=site_artiste;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->db;
    }
}