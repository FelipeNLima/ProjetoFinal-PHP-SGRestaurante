<?php
    include '../Model/Usuario_Model.php';
    include '../Model/Cargo_Model.php';
    $objCarregar = new Usuario();
    $obj = new Cargo();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Usuario</title>
        <link rel="stylesheet" href="../CSS/Usuario.css"/>
        <script language="JavaScript" src="../JS/Modal.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <fieldset class="usuariofieldset">
            <legend>Usuarios</legend>
                <div class="container">
                    <div class="row">
                    <div class="form-group form-inline">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                        <form action="../Controllers/Usuario_Controller.php" method="post">
                            <input type="text" name="pesquisa" class="form-control" placeholder="Digite sua pesquisa">
                        </form>
                    </div>
                        <a class="btn btn-success" role="button" data-toggle="modal" data-target="#MeuModal" href="#MeuModal">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                        <form action="../Controllers/Usuario_Controller.php" method="post">
                        <div class="modal fade" id="MeuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content" style="margin-top:68px;">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Cadastrar Usuario</h4>
                            </div>
                            <div class="modal-body">
                                <label for="nome">Nome </label>
                                <br>
                                <input class="form-control" type="text" name="nome">
                                <br><br>
                                <label for="usuario">Usuario </label>
                                <br>
                                <input class="form-control" type="text" name="usuario">
                                <br><br>
                                <label for="senha">Senha </label>
                                <br>
                                <input class="form-control" type="text" name="senha">
                                <br><br>
                                <label for="nivel">Cargo</label>
                                <br>
                                <input type=text class="form-control" name="nivel">
                                <?php foreach($objcarregar->CarregarCargo() as $rst){ ?>
                                    <select> 
                                        <option value=""><?=$rst['cargo']?></option>
                                    </select>
                                <?php } ?>
                            </div>
                                <div class="modal-footer">
                                  <input class="btn btn-success" type="submit" name="btcadastrar" value="Salvar">
                                  <button class="btn btn-danger" data-dismiss="modal">Sair</button>
                                </div>
                          </div>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
        </fieldset>
    </body>
</html>
