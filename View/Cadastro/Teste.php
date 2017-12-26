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
        <div class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Garçom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form class="formcadastrogarcom" action="../../Controllers/Garcom_Controller.php" method="post">
                <label for="nome">Nome </label>
                <br>
                <input class="form-control" type="text" name="nome">
                <br><br>
                <label for="codigo">Código </label>
                <br>
                <input class="form-control" type="text" name="codigo">
              </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-success" type="submit" name="btcadastrar">Cadastrar</button>
                <button class="btn btn-danger btn-block" data-dismiss="modal">Sair</button>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>

