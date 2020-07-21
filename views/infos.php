<?php 


if(isset($_POST['find'])){
    $data = new EmployesController();
    $employes=$data->findEmployes();
}else{
    $data = new EmployesController();
    $employes= $data->getAllEmployes();
}


?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>la liste des Employées</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>add" class="btn btn-sm btn-primary mr-2 mb-2 ">
            <i class="fas fa-user-plus"></i>
            </a>
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            <a href="<?php echo BASE_URL ?>service" class="btn btn-sm btn-secondary mr-2 mb-2 ">
            <i class="fas fa-address-card"></i>
            </a>
            <form method="post" class="float-right mb-2 d-flex flex-rox">
            <input type="text" class="form-control" name="search" placeholder="recherche">
            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button></form>
            <table class="table table-bordered table-dark table-hover ">
<thead>
    <tr>
    <th scope="col">Code mnemotique</th>
    <th scope="col">Nom & Prénom</th>
    <th scope="col">date naissance</th>
    <th scope="col">lieu de naissance</th>
    <th scope="col">sexe</th>
    <th scope="col">nom maritale</th>
    <th scope="col">AVS</th>
    <th scope="col">Adresse</th>
    <th scope="col">Tel</th>
    <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <?php foreach($employes as $employe): ?>
    <tr>
    <th scope="row"><?php echo $employe['code_mnemotique']?></th>
    <td><?php echo $employe['nom'].' '.$employe['prenom'] ?></td>
    <td><?php 
    $oldate= $employe['date_naissance'];
    $date = date("y/m/d",strtotime($oldate));
    echo $date ?></td>
    <td><?php echo $employe['lieu_naissance']?></td>
    <td><?php echo $employe['sexe']?></td>
    <td><?php echo $employe['nom_marital']?></td>
    <td><?php echo $employe['AVS']?></td>
    <td><?php echo $employe['adresse']?></td>
    <td><?php echo $employe['tel']?></td>

    <td class="d-flex flex-row">
        <form method="post" class="mr-1" action="update"> 
        <input type="hidden" name="code_mnemotique" value="<?php echo $employe['code_mnemotique']; ?>">
        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
        </form>
        <form method="post" class="mr-1" action="salaire"> 
        <input type="hidden" name="code_mnemotique" value="<?php echo $employe['code_mnemotique']; ?>">
        <button class="btn btn-sm btn-success"><i class="fa fa-dollar-sign"></i></button>
        </form>
    </td>
    </tr>
<?php endforeach;?>
</tbody>
</table>
            </div>
        </div>
        </div>
    </div>
</div>