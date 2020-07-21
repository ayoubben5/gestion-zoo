<?php 
if(isset($_POST['submit'])){
$newSalary = new EmployesController();
$newSalary->addEmployes();
}


?>

<div class="row my-4">
        <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header text-center w-15"><h5>Ajouter un Employée</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>infos" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-arrow-left"></i>
            </a>
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-primary mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            <form method="post">
            
            <div class="form-group">
                <label for="code_mnemotique">code mnemotique*</label>
                <input type="text" name="code_mnemotique" class="form-control" placeholder="code mnemotique">
            </div>
            <div class="form-group">
                <label for="Nom">Nom*</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            <div class="form-group">
                <label for="Prenom">Prenom*</label>
                <input type="text" name="prenom" class="form-control" placeholder="Prenom">
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance*</label>
                <input type="date" name="date_naissance" class="form-control" >
            </div>
            <div class="form-group">
                <label for="lieu_naissance">lieu de naissance*</label>
                <input type="text" name="lieu_naissance" class="form-control" placeholder="lieu de naissance">
            </div>
            <div class="form-group">
                <label for="sexe">sexe*</label>
                <select class="form-control" name="sexe"> 
                    <option >Male</option>
                    <option >Female</option>
                </select>
            </div>
            <div class="form-group">
                
                <label for="nom_marital">nom_marital*</label>
                <input type="text" name="nom_marital" class="form-control" placeholder="nom_marital">
                
            </div>
            <div class="form-group">
                <label for="AVS">AVS*</label>
                <input type="text" name="AVS" class="form-control" placeholder="AVS">
            </div>
            <div class="form-group">
                <label for="Adresse">Adresse*</label>
                <input type="text" name="adresse" class="form-control" placeholder="Adresse">
            </div>
            <div class="form-group">
                <label for="Tel">Tel*</label>
                <input type="text" name="tel" class="form-control" placeholder="ex:+33....">
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