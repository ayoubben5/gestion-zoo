<?php 

class EmployesController {
    public function getAllEmployes(){
        $employes= Employe::getAll();
        return $employes;
    }
    public function getAllServices(){
        $services= Service::getAll();
        return $services;
    }
    public function getAllSurvei(){
        $survei= Service::getAllSurvei();
        return $survei;
    }
    public function getAllMedical(){
        $med= Service::getAllMedical();
        return $med;
    }
    public function getAllAdmin(){
        $admin= Service::getAllAdmin();
        return $admin;
    }
    // ADD FUNCTION
    public function addEmployes(){
        if(isset($_POST['submit'])){
            $data =array(
        'code_mnemotique' => $_POST['code_mnemotique'],
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'date_naissance' => $_POST['date_naissance'],
        'lieu_naissance' => $_POST['lieu_naissance'],
        'sexe' => $_POST['sexe'],
        'nom_marital' => $_POST['nom_marital'],
        'AVS' => $_POST['AVS'],
        'adresse' => $_POST['adresse'],
        'tel' => $_POST['tel']
    );
    $result=Employe::add($data);
    if($result === 'ok'){
        Session::Set('success','Employé Ajouter');
            Redirect::to('addService');
    }else{
        echo $result;
    }
    
    }
    }

    public function getOneEmploye(){
        if(isset($_POST['code_mnemotique'])){
            $data = array(
            'code_mnemotique' => $_POST['code_mnemotique']
            );
        }
        $employe=Employe::getEmploye($data);
        return $employe;
    }
    public function getOneProgram(){
        if(isset($_POST['code_mnemotique'])){
            $data = array(
            'code_mnemotique' => $_POST['code_mnemotique']
            );
        }
        $prog=Employe::getProgram($data);
        return $prog;
    }

    //UPDATE FUNCTION
    public function updateEmployes(){
        if(isset($_POST['submit'])){
            $data =array(
                'code_mnemotique' => $_POST['code_mnemotique'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'date_naissance' => $_POST['date_naissance'],
                'lieu_naissance' => $_POST['lieu_naissance'],
                'sexe' => $_POST['sexe'],
                'nom_marital' => $_POST['nom_marital'],
                'AVS' => $_POST['AVS'],
                'adresse' => $_POST['adresse'],
                'tel' => $_POST['tel']
    );
    $result=Employe::update($data);
    if($result === 'ok'){
        Session::Set('success','Employé Modifier');
        Redirect::to('infos');
            }else{
        echo $result;
            }
    
    }
    }
    
    //Find function
    public function findEmployes(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
        }
        $employes=Employe::searchEmploye($data);
        return $employes;
    
    }
    //add service
    public function addService(){
        if(isset($_POST['submit'])){
            $data =array(
                'type_service' => $_POST['type_service'],
        'code_mnemotique' => $_POST['code_mnemotique']
    );
    $result=Service::add($data);
    if($result === 'ok'){
        Session::Set('success','Service Ajouter');
            Redirect::to('add'.$data['type_service']);
    }else{
        echo $result;
    }
    
    }
    }
    public function addAdmin(){
        if(isset($_POST['submit'])){
            $data =array(
                'poste' => $_POST['poste'],
        'code_mnemotique' => $_POST['code_mnemotique']
    );
    $result=Service::addAdmin($data);
    if($result === 'ok'){
        Session::Set('success','Admin Ajouter');
            Redirect::to('infos');
    }else{
        echo $result;
    }
    
    }
    }

    public function addMedical(){
        if(isset($_POST['submit'])){
            $data =array(
                'poste' => $_POST['poste'],
        'code_mnemotique' => $_POST['code_mnemotique']
    );
    $result=Service::addMedical($data);
    if($result === 'ok'){
        Session::Set('success','Medecin Ajouter');
            Redirect::to('infos');
    }else{
        echo $result;
    }
    
    }
    }
    public function addSurvei(){
        if(isset($_POST['submit'])){
            $data =array(
                'poste' => $_POST['poste'],
                'taux_occupation' => $_POST['taux_occupation'],
                'grade' => $_POST['grade'],
                'code_mnemotique' => $_POST['code_mnemotique']
    );
    $result=Service::addSurvei($data);
    if($result === 'ok'){
        Session::Set('success','Ajouter avec success');
            Redirect::to('infos');
    }else{
        echo $result;
    }
    
    }
    }
    
    

}



?>