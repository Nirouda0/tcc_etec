<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms Aprende Ai que é batata</title>
    <link rel="stylesheet" href="css/styles_geral.css">
    <link rel="stylesheet" href="css/styles_questionario.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="java_script/js.js" charset="UTF-8"></script> 

</head>
	<body>
	    <h1>Questões</h1>
		<form action="javascript:click();void(0)" id="form" method="post">

			<div>
		        <label for="pergunta01" id="pergunta01">Qual a sua faixa etária?*</label><br>
		        <input type="radio" id="1" name="pergunta01" />10-14<br>
		        <input type="radio" id="2" name="pergunta01" />15-19<br>
		        <input type="radio" id="3" name="pergunta01"  />20-25<br>
		        <input type="radio" id="4" name="pergunta01" />26 ou mais<br>
		    </div>
		    	<br>

			<div>
		        <label for="pergunta02" id="pergunta02">Já teve aulas EAD? Classifique abaixo a sua experiência com o ensino à distância. *</label><br>
		        <input type="radio" id="5" name="pergunta02" />Péssimo<br>
		        <input type="radio" id="6" name="pergunta02"  />Ruim<br>
		        <input type="radio" id="7" name="pergunta02"  />Bom<br>
		        <input type="radio" id="8" name="pergunta02"  />Muito bom<br>
		        <input type="radio" id="9" name="pergunta02"  />Excelente<br>
		        <input type="radio" id="10" name="pergunta02"  />Nunca tive ensino a distância<br>
		    </div>
		    	<br>
		    <div>
		        <label for="pergunta03" id="pergunta03">Possui dificuldades em estudar sozinho?*</label><br>
		        <input type="radio" id="11" name="pergunta03" />Sim<br>
		        <input type="radio" id="12" name="pergunta03" />Não<br>
		        <input type="radio" id="13" name="pergunta03" />Mais ou menos<br>
		    </div>
		    	<br>
		    <div>
		        <label for="pergunta04" id="pergunta04">Gostaria de ter orientação para saber qual assunto estudar primeiro?*</label><br>
		        <input type="radio" id="14" name="pergunta04" />Sim<br>
		        <input type="radio" id="15" name="pergunta04" />Não<br>
		    </div>
		    	<br>
		    <div>
		        <label for="pergunta05" id="pergunta05">O que você acha de receber notificações com dicas e curiosidades de fatos importantes?*</label><br>
		        <input type="radio" id="16"  name="pergunta05" />Ruim<br>
		        <input type="radio" id="17"  name="pergunta05" />Bom<br>
		        <input type="radio" id="18"  name="pergunta05" />Muito bom<br>
		        <input type="radio" id="19"  name="pergunta05" />Não sei opinar<br>
		    </div>
		    	<br>
		    <div>
		        <label for="pergunta06" id="pergunta06">Você se inscreveria em uma plataforma com conteúdo para estudo de diversas temáticas?*</label><br>
		       	<input type="radio" id="20"  name="pergunta06" />Sim<br>
		        <input type="radio" id="21"  name="pergunta06" />Não<br>
		    </div>
		    	<br>
		     <div>
		        <label for="pergunta07" id="pergunta07">Como gostaria de acessar a plataforma*</label><br>
		       	<input type="radio" id="22" name="pergunta07" />Site<br>
		        <input type="radio" id="23" name="pergunta07"  />Aplicativo para celular<br>
		        <input type="radio" id="24" name="pergunta07"  />Programa para computador<br>
		    </div>
		    	<br>
			 <div>
		        <label for="pergunta08" id="pergunta08">Gostaria que essa plataforma possibilitasse a visualização do seu currículo para empresas?*</label><br>
		       	<input type="radio" id="25" name="pergunta08" />Sim<br>
		        <input type="radio" id="26" name="pergunta08" />Não<br>
		    </div>
		    	<br>
		     <div>
		        <label for="pergunta09" id="pergunta09">Gostaria de obter descontos na mensalidade de cursos superiores por estar inscrito na plataforma?*</label><br>
		       	<input type="radio" id="27" name="pergunta09" />Sim<br>
		        <input type="radio" id="28" name="pergunta09" />Não<br>
		    </div>
		    	<br>
		     <div>
		        <label for="pergunta10" id="pergunta10">O quão importante você considera os fóruns de discussões. Assinale abaixo:*</label><br>
		       	<input type="radio" id="29" name="pergunta10" />Pouco importante<br>
		        <input type="radio" id="30" name="pergunta10"  />Importante<br>
		        <input type="radio" id="31" name="pergunta10"/>Muito importante<br>
		        <input type="radio" id="32" name="pergunta10"/>Nunca participei ou utilizei fóruns<br>
		    </div>
		    	<br>
		     <div>
		        <label for="pergunta11" id="pergunta11">Qual dos temas abaixo te desperta maior interesse:*</label><br>
		       	<input type="radio" id="33" name="pergunta11" />Vestibular/ ENEM<br>
		        <input type="radio" id="34" name="pergunta11"/>Trabalhos escolares<br>
		        <input type="radio" id="35" name="pergunta11"/>Concursos<br>
		        <input type="radio" id="36" name="pergunta11"/>Atualidades<br>
		        <input type="radio" id="37" name="pergunta11"/>Conhecimentos Gerais<br>

		    </div>
		    <br>

		    <div class="botao">
		    	<input type="submit" name="Enviar" id="enviar"style="font-size: 20px">
		    </div>
		</form>
	</body>
</html>