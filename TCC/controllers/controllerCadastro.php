<?php
    class Pages{
        public function ExibirCadastro(){
            require 'views/header.php';
            require 'template/cadastro.php';
            require 'views/footer.php';

	    if(isset($_POST['btn_enviar'])){
		echo "<script>alert('Certo');</script>";
	    }
        }
    }
?>