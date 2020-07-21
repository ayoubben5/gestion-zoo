<?php 

if(isset($_POST['code_mnemotique'])){
    $exitSalary = new SalaryController();
    $salaire= $exitSalary->getOneSalary();
    }else{
        Redirect::to('infos');
    }
        if(isset($_POST['submit'])){
$newSalary = new SalaryController();
$newSalary->addSalary();
}
?>




<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Ajouter Salaire</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>infos" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-arrow-left"></i>
            </a>
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            
        <form method="post">
        
            
            <div class="form-group">
                <label for="code_mnemotique">code mnemotique*</label>
                <input type="text" name="code_mnemotique" class="form-control" value="<?php echo $salaire->code_mnemotique; ?>" >
            </div>
            <div class="form-group">
                <label for="mois">Mois*</label>
                <select class="form-control" name="mois"> 
                    <option disabled >Janvier</option>
                    <option >fevrier</option>
                    <option >mars</option>
                    <option >avril</option>
                    <option >mai</option>
                    <option >juin</option>
                    <option >juillet</option>
                    <option >aout</option>
                    <option >septembre</option>
                    <option >octobre</option>
                    <option >novembre</option>
                    <option >décembre</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="Prenom">Salaire*</label>
                <input type="text" name="salaire" class="form-control" placeholder="salaire">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
            </div>
            
        </form>
        
            
        </div>
        </div>
    </div>
</div>