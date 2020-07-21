<?php 


$data = new EmployesController();
$services= $data->getAllServices();




?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Service</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>infos" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-arrow-left"></i>
            </a>
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            
            <a href="<?php echo BASE_URL ?>surveillance" class="btn btn-sm btn-info mr-2 mb-2 float-right">
            <i class="fas fa-eye"></i> </a>
            <a href="<?php echo BASE_URL ?>medical" class="btn btn-sm btn-info mr-2 mb-2 float-right" >
            <i class="fas fa-user-md"></i> </a>
            <a href="<?php echo BASE_URL ?>administration" class="btn btn-sm btn-info mr-2 mb-2 float-right">
            <i class="fas fa-briefcase"></i> </a>
            <table class="table table-bordered table-dark table-hover ">
<thead>
    <tr>
    <th scope="col">Code mnemotique</th>
    <th scope="col">type de service</th>
    
</thead>
<tbody>
    <?php foreach($services as $service): ?>
    <tr>
    <th scope="row"><?php echo $service['code_mnemotique']?></th>
    <td><?php echo $service['type_service'] ?></td>
    

    <!-- <td class="d-flex flex-row">
        <?php 
        echo $service['id_survei'] ?
            ' <a href="<?php echo BASE_URL ?>program" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-calendar-alt"></i> </a>
            ' :
                    '' 
        ?>
        
        
        
    </td> -->
    </tr>
<?php endforeach;?>
</tbody>
</table>
            </div>
        </div>
        </div>
    </div>
</div>