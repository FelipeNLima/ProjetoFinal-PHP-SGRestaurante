<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/Estilo.css" />
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
    <script type="text/javascript" src="bootstrap-3.3.7-dist/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    
</head>
<body class="bodylogin">
    <div class="container"></div>
    <form action="Controllers/Login.php" method="post" accept-charset="utf-8" class="form-login">
        <img src = "img/fundo.jpg" class = "imglogo" alt = "logo" id = "logo">
        <h2 class="form-login-heading">Entre com o usuario</h2>
        <label for="inputUsuario">Usuario</label>
        <input type="usuario" name="usuario" id="inputusuario" class="form-control" placeholder="Digite seu Usuario" required autofocus>
        <label for="inputSenha">Senha</label>
        <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Digite sua Senha" required autofocus>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="esqueci" > Esqueci a senha
         </label>
    </div>
        <button type="submit" name="entrar" class="btn btn-lg btn-primary btn-block">Entrar</button>
    </form>
</body>
</html>
