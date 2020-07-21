<?php 
$data = new EmployesController();
$survei= $data->getAllSurvei();
$parcelle2= $data->getAllSurvei();
$parcelle3= $data->getAllSurvei();
$parcelle4= $data->getAllSurvei();
$parcelle5= $data->getAllSurvei();

if(isset($_POST['submit'])){
$newSecteur = new SecteursController();
$newSecteur->addSecteur();
}



?>

<div class="row my-4">
        <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header text-center w-15"><h5>Ajouter</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>secteur" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-arrow-left"></i>
            </a>
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-primary mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            <form method="post">
            
            <div class="form-group">
                <label for="secteur">Secteur*</label>
                <select class="form-control" name="secteur"> 
                <option >Singes</option>
                    <option >Reptiles</option>
                    <option >Fauves</option>
                    <option >Oiseaux</option>
                    <option >Aquarium</option>
                    <option >Mamifére</option>
                </select>
            </div>
            <div class="form-group">
                <label for="chef_secteur">Chef de Secteur*</label>
                <select class="form-control" name="chef_secteur"> 
                <?php foreach($survei as $surv): ?>
                    <option ><?php echo $surv['code_mnemotique'].' '.$surv['poste'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="jour">Jour*</label>
                <select class="form-control" name="jour"> 
                    <option >Lundi</option>
                    <option >Mardi</option>
                    <option >Mercredi</option>
                    <option >Jeudi</option>
                    <option >Vendredi</option>
                    <option >Samedi</option>
                    <option >Dimanche</option>
                </select>
                </div>
            <div class="form-group">
                <label for="heure">Heure*</label>
                <select class="form-control" name="heure"> 
                    <option >09H-10H</option>
                    <option >10H-11H</option>
                    <option >11H-12H</option>
                    <option >13H-14H</option>
                    <option >14H-15H</option>
                    <option >15H-16H</option>
                    <option >16H-17H</option>
                    <option >17H-18H</option>
                </select>
            </div>
            <div class="form-group">
                <label for="parc1">Parcelle 1*</label>
                
                    <select class="form-control" name="parc1"> 
                    <?php foreach($survei as $survei): ?>
                    <option><?php echo $survei['code_mnemotique'].' '.$survei['poste']; ?></option>
                    <?php endforeach;?>
                </select>
                
            </div>
            <div class="form-group">
                <label for="parc2">Parcelle 2*</label>
                <select class="form-control" name="parc2"> 
                <?php foreach($parcelle2 as $parc2): ?>
                    <option><?php echo $parc2['code_mnemotique'].' '.$parc2['poste'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="parc3">Parcelle 3*</label>
                <select class="form-control" name="parc3"> 
                <?php foreach($parcelle3 as $parc3): ?>
                    <option><?php echo $parc3['code_mnemotique'].' '.$parc3['poste'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="parc4">Parcelle 4*</label>
                <select class="form-control" name="parc4"> 
                <?php foreach($parcelle4 as $parc4): ?>
                    <option><?php echo $parc4['code_mnemotique'].' '.$parc4['poste'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="parc5">Parcelle 5*</label>
                <select class="form-control" name="parc5"> 
                <?php foreach($parcelle5 as $parc5): ?>
                    <option><?php echo $parc5['code_mnemotique'].' '.$parc5['poste'] ?></option>
                    <?php endforeach;?>
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