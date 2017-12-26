<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cadastrar Garçom</title>
        <link rel="stylesheet" href="../../CSS/PrincipalGarcom.css"/>
        <link rel="stylesheet" href="../../bootstrap-3.3.7-dist/css/bootstrap.css" />
        <script type="text/javascript" src="../../bootstrap-3.3.7-dist/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="../../JS/Mensagens.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="row">
            <h2>Cadastro de Garçom</h2>
            <form class="formcadastrogarcom" action="../../Controllers/Garcom_Controller.php" method="post">
                <label for="nome">Nome </label>
                <br>
                <input class="form-control" type="text" name="nome">
                <br><br>
                <label for="codigo">Código </label>
                <br>
                <input class="form-control" type="text" name="codigo">
                <br><br>
                <input class="btn btn-success" type="submit" name="btcadastrar" id="cadastrar" value="Cadastrar">
                <div class="inputsair">
                    <button class="btn btn-danger btn-block" onclick = "close()">Sair</button>
                </div>
            </form>
        </div>
        </div>
    </body>
</html>
