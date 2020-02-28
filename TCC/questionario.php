<?php
    require 'controllers/controllerQuestionario.php';
    $pages = new Pages;
    if(isset($_GET['page'])){
        if($_GET['page'] == 'Questionario'){
            $pages->ExibirQuestionario();    
        }else{
            print_r('Erro 404');
        }
    }else{
        $pages->ExibirQuestionario();
    }
?>