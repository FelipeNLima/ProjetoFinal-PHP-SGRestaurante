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
        <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css" />
        <script type="text/javascript" src="../bootstrap-3.3.7-dist/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
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
                        <a class="btn btn-success" data-toggle="modal" href="Cadastro/CadastrarGarcom.php" id="btnCreate">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
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
