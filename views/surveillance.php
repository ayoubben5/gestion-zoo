<?php 


$data = new EmployesController();
$survei= $data->getAllSurvei();




?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Departement de Surveillance</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>service" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-arrow-left"></i>
            </a>
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            <table class="table table-bordered table-dark table-hover ">
<thead>
    <tr>
    <th scope="col">Code mnemotique</th>
    <th scope="col">Poste</th>
    <th scope="col">Taux Occupation</th>
    <th scope="col">Grade</th>
    <th scope="col">Action</th>
    
</thead>
<tbody>
    <?php foreach($survei as $survei): ?>
    <tr>
    <th scope="row"><?php echo $survei['code_mnemotique']?></th>
    <td><?php echo $survei['poste'] ?></td>
    <td><?php echo $survei['taux_occupation'] ?></td>
    <td><?php echo $survei['grade'] ?></td>
    

    <td class="d-flex flex-row">
            <form method="post" class="mr-1" action="programme"> 
        <input type="hidden" name="code_mnemotique" value="<?php echo $survei['code_mnemotique']; ?>">
        <button class="btn btn-sm btn-primary"><i class="fas fa-calendar-alt"></i></button>
        </form> 
            <form method="post" class="mr-1" action="salaire"> 
        <input type="hidden" name="code_mnemotique" value="<?php echo $survei['code_mnemotique']; ?>">
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