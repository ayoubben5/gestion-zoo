<?php 


$data = new EmployesController();
$admins= $data->getAllAdmin();




?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Departement Administratif</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>service" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-arrow-left"></i>
            </a>
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            
            <table class="table table-dark table-hover table-bordered">
<thead>
    <tr>
    <th scope="col-4">Code mnemotique</th>
    <th scope="col-4">Poste</th>
    <th scope="col-4">Salaire</th>
</thead>
<tbody>
    <?php foreach($admins as $admin): ?>
    <tr>
    <th scope="row"><?php echo $admin['code_mnemotique']?></th>
    <td><?php echo $admin['poste'] ?></td>
    <td>
    <form method="post" class="mr-1" action="salaire"> 
        <input type="hidden" name="code_mnemotique" value="<?php echo $admin['code_mnemotique']; ?>">
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