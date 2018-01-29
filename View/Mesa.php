<?php
    include '../Model/Mesa_Model.php';
    $objCarregar = new Mesa();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mesa</title>
        <link rel="stylesheet" href="../CSS/Mesa.css">
        <script language="JavaScript" src="../JS/Modal.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        
         <div class="container">
             <div class="row" style="    margin-right: -73px; margin-left: 216px; margin-top: 8px;">
                <div class="panel panel-primary">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped ">
                        <tr>
                            <?php $valor1 = 10;
                            for($i=1; $i <= $valor1; $i++) {?>
                            <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 20;
                            for($i=11; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 30;
                            for($i=21; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 40;
                            for($i=31; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 50;
                            for($i=41; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 60;
                            for($i=51; $i <= $valor2; $i++) {?>
                            <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 70;
                            for($i=61; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 80;
                            for($i=71; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 90;
                            for($i=81; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                        <tr>
                            <?php $valor2 = 100;
                            for($i=91; $i <= $valor2; $i++) {?>
                                <td><a href="#"><?= $i?></a></td>
                            <?php }?>   
                        </tr>
                    </table>
                </div>
                </div>
              </div>
         </div>
    </body>
</html>