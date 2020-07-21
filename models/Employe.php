<?php 

class Employe{

    static public function getAll(){
        
        $stmt= DB::connect()->prepare('SELECT * FROM employee');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    static public function getEmploye($data){
        $code_mnemotique = $data['code_mnemotique'];

        try{
        $query ='SELECT * FROM employee WHERE code_mnemotique=:code_mnemotique';
        $stmt= DB::connect()->prepare($query);
        $stmt->execute(array(":code_mnemotique" => $code_mnemotique));
        $employe = $stmt->fetch(PDO::FETCH_OBJ);
        return $employe;
        }catch(PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
    }
    static public function getProgram($data){
        $code_mnemotique = $data['code_mnemotique'];

        try{
        $query ='SELECT * FROM emploi_temps WHERE code_mnemotique=:code_mnemotique';
        $stmt= DB::connect()->prepare($query);
        $stmt->execute(array(":code_mnemotique" => $code_mnemotique));
        $prog = $stmt->fetchAll();
        return $prog;
        }catch(PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
    }
    static public function add($data){
        $stmt= DB::connect()->prepare('INSERT INTO `employee`(`code_mnemotique`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `sexe`, `nom_marital`, `AVS`, `adresse`, `tel`) VALUES (:code_mnemotique,:nom,:prenom,:date_naissance,:lieu_naissance,:sexe,:nom_marital ,:AVS,:adresse,:tel)');
        $stmt->bindParam(':code_mnemotique',$data['code_mnemotique']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prenom',$data['prenom']);
        $stmt->bindParam(':date_naissance',$data['date_naissance']);
        $stmt->bindParam(':lieu_naissance',$data['lieu_naissance']);
        $stmt->bindParam(':sexe',$data['sexe']);
        $stmt->bindParam(':nom_marital',$data['nom_marital']);
        $stmt->bindParam(':AVS',$data['AVS']);
        $stmt->bindParam(':adresse',$data['adresse']);
        $stmt->bindParam(':tel',$data['tel']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
    }
}


static public function update($data){
    $stmt= DB::connect()->prepare('UPDATE `employee` SET `code_mnemotique`=:code_mnemotique,`nom`=:nom,`prenom`=:prenom,`date_naissance`=:date_naissance,`lieu_naissance`=:lieu_naissance,`sexe`=:sexe,`nom_marital`=:nom_marital,`AVS`=:AVS,`adresse`=:adresse,`tel`=:tel WHERE code_mnemotique = :code_mnemotique');
    $stmt->bindParam(':code_mnemotique',$data['code_mnemotique']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prenom',$data['prenom']);
        $stmt->bindParam(':date_naissance',$data['date_naissance']);
        $stmt->bindParam(':lieu_naissance',$data['lieu_naissance']);
        $stmt->bindParam(':sexe',$data['sexe']);
        $stmt->bindParam(':nom_marital',$data['nom_marital']);
        $stmt->bindParam(':AVS',$data['AVS']);
        $stmt->bindParam(':adresse',$data['adresse']);
        $stmt->bindParam(':tel',$data['tel']);

    if($stmt->execute()){
        return 'ok';
    }else{
        return 'error';
    }
    
}

public static function searchEmploye($data){
    $search=$data['search'];
    try{
        $query ='SELECT * FROM employee WHERE code_mnemotique LIKE ? OR nom LIKE ? OR prenom LIKE ?';
        $stmt= DB::connect()->prepare($query);
        $stmt->execute(array('%'.$search.'%','%'.$search.'%','%'.$search.'%'));
        return  $stmt->fetchAll();
        }catch(PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
}


}




?>