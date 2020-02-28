<?php
    class Pages{
        public function ExibirQuestionario(){
            require 'views/header.php';
            require 'template/questionario.php';
            require 'views/footer.php';

	    if(isset($_POST['btn_enviar'])){
		echo "<script>alert('Certo');</script>";
	    }
        }
    }
?>