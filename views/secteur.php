<?php 


if(isset($_POST['find'])){
    $data = new SecteursController();
    $secteurs=$data->findSecteurs();
}else{
    $data = new SecteursController();
    $secteurs= $data->getAllSecteurs();
}


?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Emploi du temps global des Secteurs</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            <a href="<?php echo BASE_URL ?>addSecteur" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-plus"></i>
            </a>
            <form method="post" class="float-right mb-2 d-flex flex-rox">
            <input type="text" class="form-control" name="search" placeholder="recherche">
            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button></form>
            <table class="table table-bordered  table-hover ">
<thead>
    <tr>
    <th scope="col">Secteur</th>
    <th scope="col">Chef secteur</th>
    <th scope="col">Jour</th>
    <th scope="col">Heure</th>
    <th scope="col">Parcelle 1</th>
    <th scope="col">Parcelle 2</th>
    <th scope="col">Parcelle 3</th>
    <th scope="col">Parcelle 4</th>
    <th scope="col">Parcelle 5</th>
    </tr>
</thead>
<tbody>
    <?php foreach($secteurs as $secteur): ?>
    <tr>
    <th scope="row"><?php echo $secteur['secteur']?></th>
    <td><?php echo $secteur['chef_secteur'] ?></td>
    <td><?php 
    echo $secteur['jour'] ?></td>
    <td><?php echo $secteur['heure']?></td>
    <td><?php echo $secteur['parc1']?></td>
    <td><?php echo $secteur['parc2']?></td>
    <td><?php echo $secteur['parc3']?></td>
    <td><?php echo $secteur['parc4']?></td>
    <td><?php echo $secteur['parc5']?></td>

    </tr>
<?php endforeach;?>
</tbody>
</table>
            </div>
        </div>
        </div>
    </div>
</div>