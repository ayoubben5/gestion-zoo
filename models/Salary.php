<?php 

class Salary{


static public function getEmployeSalary($data){
    $code_mnemotique = $data['code_mnemotique'];

    try{
    $query ='SELECT * FROM salaire WHERE code_mnemotique=:code_mnemotique';
    $stmt= DB::connect()->prepare($query);
    $stmt->execute(array(":code_mnemotique" => $code_mnemotique));
    
    return $stmt->fetchAll();
    }catch(PDOException $ex){
        echo 'error'.$ex->getMessage();
    }
}
static public function getOneSalary($data){
    $code_mnemotique = $data['code_mnemotique'];

    try{
    $query ='SELECT code_mnemotique,mois FROM salaire WHERE code_mnemotique=:code_mnemotique';
    $stmt= DB::connect()->prepare($query);
    $stmt->execute(array(":code_mnemotique" => $code_mnemotique));
    $salary = $stmt->fetch(PDO::FETCH_OBJ);
    return $salary;
    }catch(PDOException $ex){
        echo 'error'.$ex->getMessage();
    }
}

static public function addSalary($data){
    $stmt= DB::connect()->prepare('INSERT INTO `salaire`(`mois`, `salaire`, `code_mnemotique`) VALUES (:mois,:salaire,:code_mnemotique)');
    $stmt->bindParam(':mois',$data['mois']);
    $stmt->bindParam(':salaire',$data['salaire']);
    $stmt->bindParam(':code_mnemotique',$data['code_mnemotique']);
    
    if($stmt->execute()){
        return 'ok';
    }else{
        return 'error';
}
}
}








?>