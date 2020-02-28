<?php
    require 'controllers/ControllerMenu.php';
    $pages = new Pages;
    if(isset($_GET['page'])){
        if($_GET['page'] == 'Menu'){
            $pages->ExibirMenu();    
        }else{
            print_r('Erro 404');
        }
    }else{
        $pages->ExibirMenu();
    }
?>