<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/Principal.css" />
    <link rel="stylesheet" href="../../bootstrap-3.3.7-dist/css/bootstrap.css" />
    <script type="text/javascript" src="../../bootstrap-3.3.7-dist/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="../JS/Principal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="nav-side-menu">
        <div class="brand">Usuario Logado</div>
        <i class="fa fa-user-o fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      
            <div class="menu-list">
      
                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                      <a href="#"><i class="fa fa-cutlery fa-lg"></i> Mesas</a>
                    </li>
    
                    <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                      <a href="#"><i class="fa fa-plus-circle fa-lg"></i> Cadastro<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="products">
                        <li class="active"><a href="Garcom.php" target="iframes">Garçom</a></li>
                        <li><a href="Categoria.php">Categoria</a></li>
                        <li><a href="Produto.php">Produto</a></li>
                        <li><a href="Cardapio.php">Cardapio</a></li>
                        <li><a href="FormaPagamento.php">Forma de Pagamento</a></li>
                        <li><a href="BandeiraCartao.php">Bandeira de Cartão</a></li>
                        <li><a href="Usuario.php">Usuario</a></li>
                    </ul>
    
                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                      <a href="#"><i class="fa fa-file-pdf-o fa-lg"></i> Relatórios <span class="arrow"></span></a>
                    </li>  
                    <ul class="sub-menu collapse" id="service">
                      <li>New Service 1</li>
                      <li>New Service 2</li>
                      <li>New Service 3</li>
                    </ul>
    
    
                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                      <a href="#"><i class="fa fa-user fa-lg"></i> Usuario <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="new">
                      <li>New New 1</li>
                      <li>New New 2</li>
                      <li>New New 3</li>
                    </ul>

                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                        <a href="#"><i class="fa fa-bar-chart fa-lg"></i> Gráficos <span class="arrow"></span></a>
                    </li>
                        <ul class="sub-menu collapse" id="new">
                            <li>New New 1</li>
                            <li>New New 2</li>
                            <li>New New 3</li>
                        </ul>
                </ul>
         </div>
    </div>
            <iframe name="iframes" width="1365" height="660" frameborder="0"></iframe>
     
</body>
</html>

