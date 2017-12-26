<?php
    include '../Model/Garcom_Model.php';
    $objCarregar = new Garcom();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Garçom</title>
        <link rel="stylesheet" href="../CSS/PrincipalGarcom.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <fieldset class="Garcomfieldset">
            
                <legend>Garçom</legend>
                <div class="container">
                    <div class="row">
                    <div class="form-group form-inline">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                        <input type="text" name="pesquisa" class="form-control" placeholder="Digite sua pesquisa">
                    </div>
                        <a class="btn btn-success" role="button" data-toggle="modal" data-target="#MeuModal" href="#MeuModal">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                        <div class="modal fade" id="MeuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Cadastrar Garçom</h4>
                            </div>
                            <form action="../Controllers/Garcom_Controller.php" method="post">
                                <div class="modal-body">
                                        <label for="nome">Nome </label>
                                        <br>
                                        <input class="form-control" type="text" name="nome">
                                        <br><br>
                                        <label for="codigo">Código </label>
                                        <br>
                                        <input class="form-control" type="text" name="codigo">
                                </div>
                                <div class="modal-footer">
                                  <input class="btn btn-success" type="submit" name="btcadastrar" value="Salvar">
                                  <button class="btn btn-danger" data-dismiss="modal">Sair</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="panel panel-primary" style="margin-right: 177px;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped ">
                            <tr>
                                <th>Nome</th>
                                <th>Código</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        <?php foreach($objCarregar->CarregarGarcom() as $rst){ ?>
                            <tr>
                                <td><?=$rst['nome_garcom']?></td>
                                <td><?=$rst['codigo']?></td>
                                <td><a href="?acao=edit&garcom=<?=$rst['id_garcom']?>">
                                    <span class="btn btn-sm btn-warning glyphicon glyphicon-edit"></span>
                                    </a>
                                </td>
                                <td><a href="?acao=delet&garcom=<?=$rst['id_garcom']?>">
                                    <span class="btn btn-sm btn-danger glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        <?php }?>
                        </table>
                    </div>
                    </div>
                    </div> 
                </div>                
        </fieldset>
    </body>
</html>
