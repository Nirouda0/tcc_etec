<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Forms Aprende Ai que é batata</title>
        <link rel="stylesheet" href="css/styles_footer.css">
        <link rel="stylesheet" href="css/styles_header.css">
        <link rel="stylesheet" href="css/styles_geral.css">
    <style type="text/css">

        div.login {
            text-align: center;
            margin-top: 40px;
            
        }

        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 150px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

    </style>

</head>

<body>
    <div class="login">
    <i class="fa fa-user" style="font-size:70px"></i>
        <br><br>
        Login: <input type="text" name="login" value="">
        <br><br>
        Senha: <input type="password" name="senha" value="">
        <br><br>
        <button class="button" style="vertical-align:middle"><span>Login</span></button>
    </div>
</body>
</html>