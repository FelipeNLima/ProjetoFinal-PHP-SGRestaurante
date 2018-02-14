<?php

include '../Model/Usuario_Model.php';
//
//function Logar($usuario, $senha)
//{
//    $con = new Conexao();
//    $query = $con->Conectar()->prepare("SELECT * FROM LOGIN WHERE Usuario= '$usuario' AND Senha= '$senha'");
//    $query->execute();
//    $result = $query->fetchAll(PDO::FETCH_ASSOC);
//    if (empty($result)) {
//        return false;
//    }
//    return true;
//}

$objUsuario = new Usuario();

if(isset($_POST['btcadastrar'])){
    if($objUsuario->CadastrarUsuario($_POST) === 'ok')
    {
        header("location: ../View/Garcom.php");
    }
    else
    {
        
        echo '<script type="text/javascript">alert("Erro ao Cadastrar Garçom");</script>';

    }
}

