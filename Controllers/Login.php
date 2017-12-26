<?php
header("Content-type: text/html; charset=utf-8");
     include '../Model/Usuario_Model.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $obj = Logar($usuario, $senha);
    if($obj)
    {
        echo "<script type='javascript'>alert('Login Efetuado com Sucesso!');</script>";
        header("Location: ../View/Principal.php");
    }
    else{
        echo "<script type='javascript'>alert('Usuario ou Senha Incorretos!');</script>";
        header("Location: Index.php");
    }

?>