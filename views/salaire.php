<?php 


$data = new SalaryController();
$salaries= $data->getSalary();




?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Salaire</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            
            
            <table class="table table-bordered table-dark table-hover ">
<thead>
    <tr>
    <th scope="col">Code mnemotique</th>
    <th scope="col">mois</th>
    <th scope="col">salaire</th>
    <th scope="col">Action</th>
    
</thead>
<tbody>
    <?php foreach($salaries as $salary): ?>
    <tr>
    <th scope="row"><?php echo $salary['code_mnemotique']?></th>
    <td><?php echo $salary['mois'] ?></td>
    <td><?php echo $salary['salaire']?></td>
    <td>
        <form method="post" action="addSalary"> 
        <input type="hidden" name="code_mnemotique" value="<?php echo $salary['code_mnemotique']; ?>">
        <button class="btn btn-sm btn-success mr-2 mb-2"><i class="fas fa-plus"></i></button>
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