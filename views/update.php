<?php 
if(isset($_POST['code_mnemotique'])){
$exitEmploye = new EmployesController();
$employe= $exitEmploye->getOneEmploye();
}else{
    Redirect::to('home');
}
if(isset($_POST['submit'])){
    $updatedEmploye = new EmployesController();
    $updatedEmploye->updateEmployes();
    }


?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header text-center w-15"><h5>Modifier les infos d'un Employée</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>" class="btn btn-sm btn-primary mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            <form method="post">
            <div class="form-group">
                <label for="Nom">Nom*</label>
                <input type="text"  name="nom" class="form-control" placeholder="Nom" value="<?php echo $employe->nom; ?>">
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom*</label>
                <input type="text"  name="prenom" class="form-control" placeholder="Prenom" value="<?php echo $employe->prenom; ?>">
            </div>
            <div class="form-group">
                <label for="Date de naissance">Date de naissance*</label>
                <input type="date"  name="date_naissance" class="form-control" value="<?php echo $employe->date_naissance; ?>">
            </div>
            <div class="form-group">
                <label for="lieu de naissance">lieu de naissance*</label>
                <input type="text"  name="lieu_naissance" class="form-control" placeholder="lieu_naissance" value="<?php echo $employe->lieu_naissance; ?>">
                <input type="hidden" name="code_mnemotique" value="<?php echo $employe->code_mnemotique; ?>">
            </div>
            <div class="form-group">
            <label for="sexe">sexe*</label>
                <select class="form-control" name="sexe" > 
                    <option value="Male" <?php echo $employe->sexe ? 'selected' : '' ?> >Male</option>
                    <option value="Female"  <?php echo $employe->sexe ? '' : 'selected'?> >Female</option>
                </select>
            </div>
            <div class="form-group">
                
                <label for="nom_marital">nom_marital*</label>
                <input type="text" name="nom_marital" class="form-control" placeholder="nom_marital" value="<?php echo $employe->nom_marital; ?>">
                
            </div>
            <div class="form-group">
                <label for="AVS">AVS*</label>
                <input type="text" name="AVS" class="form-control" placeholder="AVS" value="<?php echo $employe->AVS; ?>">
            </div>
            <div class="form-group">
                <label for="Adresse">Adresse*</label>
                <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="<?php echo $employe->adresse; ?>">
            </div>
            <div class="form-group">
                <label for="Tel">Tel*</label>
                <input type="text" name="tel" class="form-control" placeholder="ex:+33...." value="<?php echo $employe->tel; ?>">
            </div>
            
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
            </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>