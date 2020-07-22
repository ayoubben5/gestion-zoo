<?php 
if(isset($_POST['submit'])){
    $newSalary = new SalaryController();
    $newSalary->addSalary();
$newService = new EmployesController();
$newService->addSurvei();
}


?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Surveillance</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            
            <form method="post">
            <div class="form-group">
                <label for="poste">Poste*</label>
                <select class="form-control" name="poste"> 
                    
                    <option >chef secteur</option>
                    <option >gardien</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="taux_occupation">Taux Occupation*</label>
                <input type="text" name="taux_occupation" class="form-control" placeholder="taux_occupation">
            </div>
            <div class="form-group">
                <label for="grade">Grade*</label>
                <input type="text" name="grade" class="form-control" placeholder="grade">
            </div>
            <div class="form-group">
                <label for="code_mnemotique">code mnemotique*</label>
                <input type="text" name="code_mnemotique" class="form-control" placeholder="code mnemotique">
            </div>
            <div class="form-group">
                <label for="mois">Premier Mois*</label>
                <select class="form-control" name="mois"> 
                    <option >Janvier</option>
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
                <label for="Prenom">Premier Salaire*</label>
                <input type="text" name="salaire" class="form-control" placeholder="salaire">
            </div>
            <div class="form-group">
                <label for="">Secteur preferable N°1*</label>
                <select class="form-control" name=""> 
                <option >Singes</option>
                    <option >Reptiles</option>
                    <option >Fauves</option>
                    <option >Oiseaux</option>
                    <option >Aquarium</option>
                    <option >Mamifére</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Secteur preferable N°2*</label>
                <select class="form-control" name=""> 
                <option >Singes</option>
                    <option >Reptiles</option>
                    <option >Fauves</option>
                    <option >Oiseaux</option>
                    <option >Aquarium</option>
                    <option >Mamifére</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Secteur preferable N°3*</label>
                <select class="form-control" name=""> 
                    <option >Singes</option>
                    <option >Reptiles</option>
                    <option >Fauves</option>
                    <option >Oiseaux</option>
                    <option >Aquarium</option>
                    <option >Mamifére</option>
                </select>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
            </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>