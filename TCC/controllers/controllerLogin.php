<?php
    class Pages{
        public function ExibirLogin(){
            require 'views/header.php';
            require 'template/login.php';
            require 'views/footer.php';

	    if(isset($_POST['btn_enviar'])){
		echo "<script>alert('Certo');</script>";
	    }
        }
    }
?>