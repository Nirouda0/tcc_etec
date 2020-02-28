<?php
    require 'controllers/controllerLogin.php';
    $pages = new Pages;
    if(isset($_GET['page'])){
        if($_GET['page'] == 'Login'){
            $pages->ExibirLogin();    
        }else{
            print_r('Erro 404');
        }
    }else{
        $pages->ExibirLogin();
    }
?>