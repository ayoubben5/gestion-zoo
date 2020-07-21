<?php 


class SecteursController{
    public function getAllSecteurs(){
        $secteurs= Secteurs::getAll();
        return $secteurs;
    }

    public function findSecteurs(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
        }
        $secteur=Secteurs::searchSecteur($data);
        return $secteur;
    
    }

    public function addSecteur(){
        if(isset($_POST['submit'])){
            $data =array(
        'secteur' => $_POST['secteur'],
        'chef_secteur' => $_POST['chef_secteur'],
        'jour' => $_POST['jour'],
        'heure' => $_POST['heure'],
        'parc1' => $_POST['parc1'],
        'parc2' => $_POST['parc2'],
        'parc3' => $_POST['parc3'],
        'parc4' => $_POST['parc4'],
        'parc5' => $_POST['parc5']
    );
    $result=Secteurs::add($data);
    if($result === 'ok'){
        Session::Set('success','Success');
            Redirect::to('addService');
    }else{
        echo $result;
    }
    
    }
    }

}




?>