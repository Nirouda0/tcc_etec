<?php
    require 'controllers/controllerCadastro.php';
    $pages = new Pages;
    if(isset($_GET['page'])){
        if($_GET['page'] == 'Login'){
            $pages->ExibirCadastro();    
        }else{
            print_r('Erro 404');
        }
    }else{
        $pages->ExibirCadastro();
    }
?>