<?php 



    $data = new EmployesController();
    $progs= $data->getOneProgram();



?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>EMPLOI DU TEMPS</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i></a>
            <table class="table table-bordered  table-hover ">
<thead>
    <tr>
    <th scope="col">Code mnemotique</th>
    <th scope="col">Semaine</th>
    <th scope="col">Jour</th>
    <th scope="col">Secteur</th>
    <th scope="col">09H-10H</th>
    <th scope="col">10H-11H</th>
    <th scope="col">11H-12H</th>
    <th scope="col">13H-14H</th>
    <th scope="col">14H-15H</th>
    <th scope="col">15H-16H</th>
    <th scope="col">16H-17H</th>
    <th scope="col">17H-18H</th>
    <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <?php foreach($progs as $prog): ?>
    <tr>
    <th scope="row"><?php echo $prog['code_mnemotique']?></th>
    <td scope="row"><?php 
    $year = 2020;
    $week_no = 1;
    
    $week_start = new DateTime();
    $week_start->setISODate($year,$week_no);
    $week_end = clone $week_start;
    $week_end = $week_end->add(new DateInterval("P1W"));
    
    echo $week_start->format('d-M') . " Au ".$week_end->format('d-M');
    ?></td>
    <td><?php echo $prog['Jour'] ?></td>
    <td><?php echo $prog['secteur']?></td>
    <td><?php echo $prog['09H-10H']?></td>
    <td><?php echo $prog['10H-11H']?></td>
    <td><?php echo $prog['11H-12H']?></td>
    <td><?php echo $prog['13H-14H']?></td>
    <td><?php echo $prog['14H-15H']?></td>
    <td><?php echo $prog['15H-16H']?></td>
    <td><?php echo $prog['16H-17H']?></td>
    <td><?php echo $prog['17H-18H']?></td>

    <td class="d-flex flex-row">
        <form method="post" class="mr-2" action="addProgramme"> 
        <input type="hidden" name="code_mnemotique" value="<?php echo $prog['code_mnemotique']; ?>">
        <button class="btn btn-sm btn-success"><i class="fas fa-plus"></i></button>
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