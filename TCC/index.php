<?php
    require 'controllers/controllerPages.php';
    $pages = new Pages;
    if(isset($_GET['page'])){
        if($_GET['page'] == 'home'){
            $pages->ExibirHome();    
        }else{
            print_r('Erro 404');
        }
    }else{
        $pages->ExibirHome();
    }
?>