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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Restaurante X</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i> Usuários <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="Usuario.php">Cadastrar Usuario</a></li>
                                                    <li><a href="Usuario.php">Nivel de Acesso</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="Mesa.php"><i class="fa fa-cutlery fa-lg"></i> Mesas</a></li>
					<li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus-circle fa-lg"></i> Cadastrar <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
						<li><a href="Garcom.php" target="iframes">Garçom</a></li>
						<li><a href="Categoria.php">Categoria</a></li>
                                                <li><a href="Produto.php">Produto</a></li>
                                                <li><a href="Cardapio.php">Cardapio</a></li>
                                                <li><a href="FormaPagamento.php">Forma de Pagamento</a></li>
                                                <li><a href="BandeiraCartao.php">Bandeira de Cartão</a></li>
                                            </ul>
                                        </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-pdf-o fa-lg"></i> Relatórios <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                               
                                                </ul>
                                            </li>
				</ul>
                            <div class="navbar-form navbar-right">					
				<a href="sair.php"><button type="submit" class="btn btn-success">Sair</button></a>
                            </div>
			</div><!--/.nav-collapse -->
		</div>
    </nav>
        <iframe name="iframes" width="1365" height="660" frameborder="0"></iframe>
</body>
</html>

