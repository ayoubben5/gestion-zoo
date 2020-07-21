<?php

class Secteurs{

    public static function getAll(){
        $stmt= DB::connect()->prepare('SELECT * FROM secteurs');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function searchSecteur($data){
        $search=$data['search'];
        try{
            $query ='SELECT * FROM secteurs WHERE secteur LIKE ? OR jour LIKE ? OR heure LIKE ? ';
            $stmt= DB::connect()->prepare($query);
            $stmt->execute(array('%'.$search.'%','%'.$search.'%','%'.$search.'%'));
            return  $stmt->fetchAll();
            }catch(PDOException $ex){
                echo 'error'.$ex->getMessage();
            }
    }
    static public function add($data){
        $stmt= DB::connect()->prepare('INSERT INTO `secteurs`(`secteur`, `chef_secteur`, `jour`, `heure`, `parc1`, `parc2`, `parc3`, `parc4`, `parc5`) VALUES (:secteur,:chef_secteur,:jour,:heure,:parc1,:parc2,:parc3 ,:parc4,:parc5)');
        $stmt->bindParam(':secteur',$data['secteur']);
        $stmt->bindParam(':chef_secteur',$data['chef_secteur']);
        $stmt->bindParam(':jour',$data['jour']);
        $stmt->bindParam(':heure',$data['heure']);
        $stmt->bindParam(':parc1',$data['parc1']);
        $stmt->bindParam(':parc2',$data['parc2']);
        $stmt->bindParam(':parc3',$data['parc3']);
        $stmt->bindParam(':parc4',$data['parc4']);
        $stmt->bindParam(':parc5',$data['parc5']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
    }
}
    

}


?>