<?php
     include '../Model/Usuario_Model.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $obj = Logar($usuario, $senha);
    if($obj)
    {

        header("Location: ../View/Principal.php");
    }
    else{

        header("Location: Index.php");
    }

?>