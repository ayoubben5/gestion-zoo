<?php

class Service{
    static public function getAll(){
        
        $stmt= DB::connect()->prepare('SELECT * FROM service');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    static public function getAllSurvei(){
        
        $stmt= DB::connect()->prepare('SELECT * FROM surveillance');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    static public function getAllMedical(){
        
        $stmt= DB::connect()->prepare('SELECT * FROM medecin');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    static public function getAllAdmin(){
        
        $stmt= DB::connect()->prepare('SELECT * FROM admin');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    static public function add($data){
        $stmt= DB::connect()->prepare('INSERT INTO `service`(`type_service`, `code_mnemotique`) VALUES (:type_service,:code_mnemotique)');
        $stmt->bindParam(':type_service',$data['type_service']);
        $stmt->bindParam(':code_mnemotique',$data['code_mnemotique']);
        
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
    }
    }
    //add administration
    static public function addAdmin($data){
        $stmt= DB::connect()->prepare('INSERT INTO `admin` (`poste`, `code_mnemotique`) VALUES (:poste,:code_mnemotique)');
        $stmt->bindParam(':poste',$data['poste']);
        $stmt->bindParam(':code_mnemotique',$data['code_mnemotique']);
        
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
    }
    }
    //add medical
    static public function addMedical($data){
        $stmt= DB::connect()->prepare('INSERT INTO `medecin` (`poste`, `code_mnemotique`) VALUES (:poste,:code_mnemotique)');
        $stmt->bindParam(':poste',$data['poste']);
        $stmt->bindParam(':code_mnemotique',$data['code_mnemotique']);
        
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
    }
    }
    //add surveillance
    static public function addSurvei($data){
        $stmt= DB::connect()->prepare('INSERT INTO `surveillance` (`poste`,`taux_occupation`,`grade`, `code_mnemotique`) VALUES (:poste,:taux_occupation,:grade,:code_mnemotique)');
        $stmt->bindParam(':poste',$data['poste']);
        $stmt->bindParam(':taux_occupation',$data['taux_occupation']);
        $stmt->bindParam(':grade',$data['grade']);
        $stmt->bindParam(':code_mnemotique',$data['code_mnemotique']);
        
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
    }
    }
}


?>