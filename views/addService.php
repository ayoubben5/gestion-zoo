<?php 
if(isset($_POST['submit'])){
$newService = new EmployesController();
$newService->addService();
}


?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-16 mx-auto">
        <?php include('./views/includes/alert.php'); ?>
        <div class="card">
        <div class="card-header text-center w-15"><h5>Ajouter Service</h5></div>
            <div class="card-body bg-light">
            <a href="<?php echo BASE_URL ?>home" class="btn btn-sm btn-info mr-2 mb-2 ">
            <i class="fas fa-home"></i>
            </a>
            <form method="post">
            <div class="form-group">
                <label for="type_service">type de service*</label>
                <select class="form-control" name="type_service"> 
                    <option >administration</option>
                    <option >medical</option>
                    <option >surveillance</option>
                </select>
            </div>
            <div class="form-group">
                <label for="code_mnemotique">code mnemotique*</label>
                <input type="text" name="code_mnemotique" class="form-control" placeholder="code mnemotique">
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