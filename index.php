<?php

require_once('./views/includes/header.php');
require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home= new HomeController();
$pages=['home','add','infos','service','secteur','addSecteur','update','salaire','surveillance','medical','administration','programme','addSalary','addService','addadministration','addmedical','addsurveillance'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page=$_GET['page'];
        $home->index($page);
    }else{
        include('views/includes/404.php');
    } 
    }else{
        $home->index('infos');
    }



require_once('./views/includes/footer.php');

?>