<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/styles_geral.css">
 <link rel="stylesheet" href="css/styles_header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Aprende Ai!</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Temas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Enem</a></li>
          <li><a href="#">Vestibular</a></li>
          <li><a href="#">Concurso</a></li>
        </ul>
      </li>
      <li><a href="#">Matérias</a></li>
    </ul>  
    <ul class="nav navbar-nav navbar-right">
      <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

    <!--  INPUT DE PESQUISA -->
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control"  id="input-busca" placeholder="Qual assunto você procura?">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</body>
</html>
