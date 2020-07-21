<?php 

class SalaryController{
    public function getSalary(){
        if(isset($_POST['code_mnemotique'])){
            $data = array(
            'code_mnemotique' => $_POST['code_mnemotique']
            );
        }
        $salary=Salary::getEmployeSalary($data);
        return $salary;
    }
    public function getOneSalary(){
        if(isset($_POST['code_mnemotique'])){
            $data = array(
            'code_mnemotique' => $_POST['code_mnemotique']
            );
        }
        $salary=Salary::getOneSalary($data);
        return $salary;
    }

    public function addSalary(){
        if(isset($_POST['submit'])){
            $data =array(
                'mois' => $_POST['mois'],
        'salaire' => $_POST['salaire'],
        'code_mnemotique' => $_POST['code_mnemotique'],
        
    );
    $result=Salary::addSalary($data);
    if($result === 'ok'){
        Session::Set('success','Salaire Ajouter');
        Redirect::to('infos');
    }else{
        echo $result;
    }
    
    }
    }


}




?>